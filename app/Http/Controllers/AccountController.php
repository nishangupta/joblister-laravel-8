<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('account.user-account');
    }
    public function changePasswordView()
    {
        return view('account.change-password');
    }
    public function deactivateView()
    {
        return view('account.deactivate');
    }
    public function deleteAccount()
    {
        $user = User::find(auth()->user()->id);
        Auth::logout($user->id);
        if ($user->delete()) {
            return redirect(route('post.index'));
        } else {
            return view('account.deactivate');
        }
    }
    public function logout()
    {
        Auth::logout(auth()->user());
        return redirect()->route('post.index');
    }
}
