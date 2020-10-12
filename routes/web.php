<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\AuthorController;
use App\Http\Controllers\CompanyCategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PostController;
use App\Models\CompanyCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

//public routes
Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::get('/job/{job}', [PostController::class, 'show'])->name('post.show');
Route::get('employer/{employer}', [AuthorController::class, 'employer'])->name('account.employer');

//auth routes
Route::middleware('auth')->prefix('account')->group(function () {
  //every auth routes AccountController
  Route::get('logout', [AccountController::class, 'logout'])->name('account.logout');
  Route::get('overview', [AccountController::class, 'index'])->name('account.index');
  Route::get('deactivate', [AccountController::class, 'deactivateView'])->name('account.deactivate');
  Route::get('change-password', [AccountController::class, 'changePasswordView'])->name('account.changePassword');
  Route::get('my-saved-jobs', [AccountController::class, 'savedList'])->name('account.savedList');
  Route::delete('delete', [AccountController::class, 'deleteAccount'])->name('account.delete');
  Route::put('change-password', [AccountController::class, 'changePassword'])->name('account.changePassword');

  //Admin Routes
  Route::group(['middleware' => ['role:admin']], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('account.dashboard');
    Route::get('manage-authors', [AdminController::class, 'manageAuthors'])->name('account.manageAuthors');

    Route::get('category/{category}/edit', [CompanyCategoryController::class, 'edit'])->name('category.edit');
    Route::post('category', [CompanyCategoryController::class, 'store'])->name('category.store');
    Route::put('category/{category}', [CompanyCategoryController::class, 'update'])->name('category.update');
    Route::delete('category/{category}', [CompanyCategoryController::class, 'destroy'])->name('category.destroy');
  });

  //Author Routes
  Route::group(['middleware' => ['role:author']], function () {
    Route::get('author-section', [AuthorController::class, 'authorSection'])->name('account.authorSection');

    Route::get('post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('post', [PostController::class, 'store'])->name('post.store');
    Route::get('post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::put('post/{post}', [PostController::class, 'update'])->name('post.update');
    Route::delete('post/{post}', [PostController::class, 'destroy'])->name('post.destroy');

    Route::get('company/create', [CompanyController::class, 'create'])->name('company.create');
    Route::post('company', [CompanyController::class, 'store'])->name('company.store');
    Route::get('company/edit', [CompanyController::class, 'edit'])->name('company.edit');
    Route::put('company/{id}', [CompanyCategoryController::class, 'update'])->name('company.update');
    Route::delete('company', [CompanyController::class, 'destroy'])->name('company.destroy');
  });
});

Route::post('/postsubmit', function (Request $request) {
  dd($request->all());
})->name('postsubmit');

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
  // $roles = ['view-dashboard', 'create-post', 'edit-post', 'delete-post', 'manage-authors', 'author-section', 'create-category', 'edit-category', 'delete-category','create-company', 'edit-company', 'delete-company'];
  foreach ($roles as $role) {
    Permission::create(['name' => $role]);
  }
});

Route::get('/adminPermission', function () {
  $role = Role::findByName('admin');
  $permissions = Permission::all()->pluck('name');
  foreach ($permissions as $permission) {
    $getPermission = Permission::findByName($permission);
    $role->givePermissionTo($getPermission);
  }
});


Route::get('/authorPermission', function () {
  $role = Role::findByName('author');

  $permissions = ['create-post', 'edit-post', 'delete-post', 'author-section', 'create-company', 'edit-company', 'delete-company'];
  foreach ($permissions as $permission) {
    $getPermission = Permission::findByName($permission);
    $role->givePermissionTo($getPermission);
  }
});

//has no permission
// Route::get('/userPermission', function () {
//   $role = Role::findByName('user');

//   $permissions = ['create_post', 'edit_post', 'delete_post', 'author-section',];
//   foreach ($permissions as $permission) {
//     $getPermission = Permission::findByName($permission);
//     $role->givePermissionTo($getPermission);
//   }

//   $role->givePermissionTo($permission);
// });


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
