<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /** Author dashboard */
    public function authorSection()
    {
        return view('account.author-section')->with([
            'company' => auth()->user()->company,
        ]);
    }

    // Author Employer panel
    public function employer()
    {
        return view('account.employer')->with([
            'author' => auth()->user()
        ]);
    }
}
