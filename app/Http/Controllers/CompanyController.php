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
        $hasCompany = Company::find(auth()->user()->id);

        if ($hasCompany) {
            $inputs = ['title'=>'']
            return view('company.create')->with(['title'=>$hasCompany->title]]);
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
        $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'logo' => 'required|image|max:3999',
            'category' => 'required|string',
            'website' => 'required|string',
        ]);


        $company = new Company();
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

        $company->save();
        return redirect()->route('account.authorSection');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
