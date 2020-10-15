<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class savedJobController extends Controller
{
    public function index()
    {
        $posts = auth()->user()->posts;
        return view('account.saved-job', compact('posts'));
    }
    public function store($id)
    {
        $user = User::find(auth()->user()->id);
        $hasPost = $user->posts()->where('id', $id)->get();
        //check if the post is already saved
        if (count($hasPost)) {
            Alert::toast('You already have saved this job!', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Job successfully saved!', 'success');
            $user->posts()->attach($id);
            return redirect()->route('savedJob.index');
        }
    }
    public function destroy($id)
    {
        $user = User::find(auth()->user()->id);
        $user->posts()->detach($id);
        Alert::toast('Deleted Saved job!', 'success');
        return redirect()->route('savedJob.index');
    }
}
