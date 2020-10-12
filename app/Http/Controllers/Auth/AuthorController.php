<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /** Author dashboard */
    public function authorSection()
    {
        if ($this->hasCompany()) {
            $company = auth()->user()->company->with('posts')->first();
            return view('account.author-section')->with([
                'company' => $company,
            ]);
        }
        //doesnt have company
        return view('account.author-section')->with([
            'company' => null
        ]);
    }

    // Author Employer panel
    //employer is company of author
    public function employer($employer)
    {
        $company = Company::find($employer)->with('posts')->first();
        return view('account.employer')->with([
            'company' => $company,
        ]);
    }
    public function hasCompany()
    {
        return auth()->user()->company ? true : false;
    }
}
