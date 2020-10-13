<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
            return redirect()->back();
        } else {
            $user->posts()->attach($id);
            return redirect()->route('savedJob.index');
        }
    }
    public function destroy($id)
    {
        $user = User::find(auth()->user()->id);
        $user->posts()->detach($id);
        return redirect()->route('savedJob.index');
    }
}
