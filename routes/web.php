<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CompanyCategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PostController;
use App\Models\CompanyCategory;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::get('/job/{job}', [PostController::class, 'show'])->name('post.show');

//Accounts
Route::get('/account/logout', [AccountController::class, 'logout'])->name('account.logout');
Route::get('/account/overview', [AccountController::class, 'index'])->name('account.index');
Route::get('/account/deactivate', [AccountController::class, 'deactivateView'])->name('account.deactivate');
Route::get('/account/change-password', [AccountController::class, 'changePasswordView'])->name('account.changePassword');
Route::get('/account/my-saved-jobs', [AccountController::class, 'savedList'])->name('account.savedList');
Route::get('/account/dashboard', [AccountController::class, 'dashboard'])->name('account.dashboard');
Route::get('/account/author-section', [AccountController::class, 'authorSection'])->name('account.authorSection');

Route::get('/account/post/create', [PostController::class, 'create'])->name('post.create');
Route::get('/account/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');

Route::get('/account/company/create', [CompanyController::class, 'create'])->name('company.create');
Route::get('/account/company/{company}/edit', [CompanyController::class, 'edit'])->name('company.edit');
Route::post('/account/company', [CompanyController::class, 'store'])->name('company.store');

Route::post('/account/category', [CompanyCategoryController::class, 'store'])->name('category.store');
Route::get('/account/category/{category}/edit', [CompanyCategoryController::class, 'edit'])->name('category.edit');
Route::put('/account/category/{category}', [CompanyCategoryController::class, 'update'])->name('category.update');
Route::delete('/account/category/{category}', [CompanyCategoryController::class, 'delete'])->name('category.delete');

Route::delete('/account/delete', [AccountController::class, 'deleteAccount'])->name('account.delete');
Route::put('/account/change-password', [AccountController::class, 'changePassword'])->name('account.changePassword');

//admins
// Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
// Route::get('/admin/register', [AdminLoginController::class, 'showRegistrationForm'])->name('admin.register');
// Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
// Route::post('/admin/register', [AdminLoginController::class, 'register'])->name('admin.register');

Route::get('/make-role', function () {
  $roles = ['admin', 'author', 'user'];
  foreach ($roles as $role) {
    Role::create(['name' => $role]);
  }
});

Route::get('/make-permiss', function () {
  $roles = ['view-dashboard', 'create_post', 'edit_post', 'delete_post'];
  foreach ($roles as $role) {
    Permission::create(['name' => $role]);
  }
});

Route::get('/adminPermission', function () {
  $role = Role::findByName('admin');
  $permission = Permission::findByName('view-dashboard');

  $role->givePermissionTo($permission);
});


Route::get('/authorPermission', function () {
  $role = Role::findByName('author');
  $permission = Permission::findByName('create_post');

  $role->givePermissionTo($permission);
});

//has no permission
Route::get('/userPermission', function () {
  $role = Role::findByName('user');
  $permission = Permission::findByName('');

  $role->givePermissionTo($permission);
});


Route::get('/giveadminrole', function () {
  $user = User::find(1);
  $user->assignRole('admin');
});

Route::get('/giveauthorrole', function () {
  $user = User::find(2);
  $user->assignRole('author');
});
Route::get('/giveuserrole', function () {
  $user = User::find(3);
  $user->assignRole('user');
});

Route::get('/registercategories', function () {
  $categories = ['IT & Telecommunication', 'Marketing / Advertising', 'General Mgmt'];
  foreach ($categories as $category) {
    $companyCategory = new CompanyCategory;
    $companyCategory->category_name = $category;
    $companyCategory->save();
  }
});
