<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
    public function savedList()
    {
        return view('account.save-list');
    }
    public function changePasswordView()
    {
        return view('account.change-password');
    }

    public function changePassword(Request $request)
    {
        dd('asdas');
        if (auth()->user()) {
            $authUser = auth()->user();
            $currentP = $request->current_password;
            $newP = $request->new_password;
            $confirmP = $request->confirm_password;

            //check if the password is valid
            if (!$request->validate([
                'currentPassword' => 'required|min:8',
                'newPassword' => 'required|min:8'
            ])) {
                return 'invalid-password';
            }
            if (Hash::check($currentP, $authUser->password)) {
                if (Str::of($newP)->exactly($confirmP)) {
                    $user = User::find($authUser->id);
                    $user->password = Hash::make($newP);
                    if ($user->save()) {
                        return 'password changed';
                    } else {
                        return 'Something went wrong';
                    }
                } else {
                    return 'password do not match';
                }
            } else {
                return 'incorrect password';
            }
        } else {
            return 'Not authenticated';
        }
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
        Auth::logout();
        return redirect()->route('login');
    }

    public function dashboard()
    {
        return view('account.dashboard');
    }
    public function authorSection()
    {
        return view('account.author-section');
    }
}
