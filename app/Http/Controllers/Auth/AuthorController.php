<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\JobApplication;
use Carbon\Carbon;

class AuthorController extends Controller
{
    /** Author dashboard */
    public function authorSection()
    {
        $livePosts = null;
        $company = null;
        $applications = null;

        if ($this->hasCompany()) {
            //without the if block the posts relationship returns error
            $company = auth()->user()->company;
            $posts = $company->posts()->get();

            if ($company->posts->count()) {
                $livePosts = $posts->where('deadline', '>', Carbon::now())->count();
                $ids = $posts->pluck('id');
                $applications = JobApplication::whereIn('post_id', $ids)->get();
            }
        }

        //doesnt have company
        return view('account.author-section')->with([
            'company' => $company,
            'applications' => $applications,
            'livePosts' => $livePosts
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

    //check if has company
    protected function hasCompany()
    {
        return auth()->user()->company ? true : false;
    }
}
