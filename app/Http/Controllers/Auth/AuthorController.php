<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    /** Author dashboard */
    public function authorSection()
    {
        $company = auth()->user()->company->with('posts')->first();
        return view('account.author-section')->with([
            'company' => $company,
        ]);
    }

    // Author Employer panel
    public function employer($employer)
    {
        $getEmployer = User::find($employer);
        $company = $getEmployer->company->with('posts')->first();

        if ($getEmployer->hasRole('author')) {
            return view('account.employer')->with([
                'company' => $company,
            ]);
        }
        return abort(404);
    }
}
