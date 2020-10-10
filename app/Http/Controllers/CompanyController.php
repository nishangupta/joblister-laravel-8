<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->company) {
            return $this->edit();
        }
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateCompany($request);
        $company = new Company();
        if ($this->companySave($company, $request)) {
            return redirect()->route('account.authorSection');
        }
        return redirect()->route('account.authorSection');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $company = auth()->user()->company;
        return view('company.edit', compact('company'));
    }


    public function update(Request $request, $id)
    {
        $this->validateCompany($request);

        $company = auth()->user()->company;
        if ($this->companySave($company, $request)) {
            return redirect()->route('account.authorSection');
        }

        return redirect()->route('account.authorSection');
    }

    protected function validateCompany(Request $request)
    {
        return $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'logo' => 'required|image|max:3999',
            'category' => 'required|string',
            'website' => 'required|string',
        ]);
    }
    public function companySave(Company $company, Request $request)
    {
        $company->user_id = auth()->user()->id;
        $company->title = $request->title;
        $company->description = $request->description;
        $company->company_category_id = $request->category;
        $company->website = $request->website;

        if ($request->hasFile('logo')) {
            $fileName = $request->file('logo')->getClientOriginalName();
            $actualFileName = pathinfo($fileName, PATHINFO_FILENAME);
            $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
            $fileNameToStore = $actualFileName . time() . '.' . $fileExtension;
            $path = $request->file('logo')->storeAs('public/companies/logos', $fileNameToStore);

            if ($company->logo) {
                Storage::delete('public/companies/logos/' . basename($company->logo));
            }
            $company->logo = 'storage/companies/logos/' . $fileNameToStore;
        }
        if ($company->save()) {
            return true;
        }
        return false;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        if (auth()->user()->company->delete()) {
            return redirect()->route('account.authorSection');
        }
        return redirect()->route('account.authorSection');
    }
}
