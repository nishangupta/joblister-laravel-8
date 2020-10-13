<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /** Author dashboard */
    public function authorSection()
    {
        if ($this->hasCompany()) {
            //without the if block the posts relationship returns error
            $company = auth()->user()->company->with('posts')->first();

            // $posts = $company->posts->filter(function($item){
            //     return $tiem
            // });

            // dd($company->posts->where('id', [1, 2]));
            // $posts = $company->posts->get()->pluck('id');
            // dd($posts);

            // dd($company->posts->pluck('id'));
            $ids = $company->posts->pluck('id');
        } else {
            $company = null;
        }

        $notifications = JobApplication::whereIn('post_id', $ids)->get();
        dd($notifications->toArray());

        //doesnt have company
        return view('account.author-section')->with([
            'company' => $company
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

    //job notifications
    //when users apply on the job
}
