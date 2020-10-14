<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\AuthorController;
use App\Http\Controllers\CompanyCategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\savedJobController;
use App\Models\CompanyCategory;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

//public routes
Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::get('/job/{job}', [PostController::class, 'show'])->name('post.show');
Route::get('employer/{employer}', [AuthorController::class, 'employer'])->name('account.employer');

//job 
Route::get('search', [JobController::class, 'index'])->name('job.index');

//auth routes
Route::middleware('auth')->prefix('account')->group(function () {
  //every auth routes AccountController
  Route::get('logout', [AccountController::class, 'logout'])->name('account.logout');
  Route::get('overview', [AccountController::class, 'index'])->name('account.index');
  Route::get('deactivate', [AccountController::class, 'deactivateView'])->name('account.deactivate');
  Route::get('change-password', [AccountController::class, 'changePasswordView'])->name('account.changePassword');
  Route::delete('delete', [AccountController::class, 'deleteAccount'])->name('account.delete');
  Route::put('change-password', [AccountController::class, 'changePassword'])->name('account.changePassword');
  //savedJobs
  Route::get('my-saved-jobs', [savedJobController::class, 'index'])->name('savedJob.index');
  Route::get('my-saved-jobs/{id}', [savedJobController::class, 'store'])->name('savedJob.store');
  Route::delete('my-saved-jobs/{id}', [savedJobController::class, 'destroy'])->name('savedJob.destroy');
  //applyjobs
  Route::get('apply-job', [AccountController::class, 'applyJobView'])->name('account.applyJob');
  Route::post('apply-job', [AccountController::class, 'applyJob'])->name('account.applyJob');

  //Admin Role Routes
  Route::group(['middleware' => ['role:admin']], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('account.dashboard');
    Route::get('view-all-users', [AdminController::class, 'viewAllUsers'])->name('account.viewAllUsers');

    Route::get('category/{category}/edit', [CompanyCategoryController::class, 'edit'])->name('category.edit');
    Route::post('category', [CompanyCategoryController::class, 'store'])->name('category.store');
    Route::put('category/{id}', [CompanyCategoryController::class, 'update'])->name('category.update');
    Route::delete('category/{id}', [CompanyCategoryController::class, 'destroy'])->name('category.destroy');
  });

  //Author Role Routes
  Route::group(['middleware' => ['role:author']], function () {
    Route::get('author-section', [AuthorController::class, 'authorSection'])->name('account.authorSection');

    Route::get('job-application/{id}', [JobApplicationController::class, 'show'])->name('jobApplication.show');
    Route::delete('job-application', [JobApplicationController::class, 'destroy'])->name('jobApplication.destroy');
    Route::get('job-application', [JobApplicationController::class, 'index'])->name('jobApplication.index');

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

  //User Role routes
  Route::group(['middleware' => ['role:user']], function () {
    Route::get('become-employer', [AccountController::class, 'becomeEmployerView'])->name('account.becomeEmployer');
    Route::post('become-employer', [AccountController::class, 'becomeEmployer'])->name('account.becomeEmployer');
  });
});

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
  $roles = ['view-dashboard', 'create-post', 'edit-post', 'delete-post', 'manage-authors', 'author-section', 'create-category', 'edit-category', 'delete-category', 'create-company', 'edit-company', 'delete-company'];
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
