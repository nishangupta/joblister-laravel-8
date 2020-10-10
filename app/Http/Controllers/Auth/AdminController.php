<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\CompanyCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function dashboard()
    {
        $authors = User::role('author')->with('company')->paginate(5);
        $roles = Role::all()->pluck('name');
        $permissions = Permission::all()->pluck('name');
        $rolesHavePermissions = Role::with('permissions')->get();

        return view('account.dashboard')->with([
            'companyCategories' => CompanyCategory::all(),
            'recentAuthors' => $authors,
            'roles' => $roles,
            'permissions' => $permissions,
            'rolesHavePermissions' => $rolesHavePermissions
        ]);
    }
    public function manageAuthors()
    {
        return view('account.manage-authors');
    }
}
