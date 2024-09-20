<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Middleware\PermissionMiddleware;
use Spatie\Permission\Middleware\RoleMiddleware;
use App\Http\Controllers\Admin\{
    AdminController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Spatie\Permission\Models\Permission;

// Auth::routes();

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => ['auth','isAdminMiddleWare']], function() {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});



Route::get('/user-list', [AdminController::class, 'list'])->name('user_list');



// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';
