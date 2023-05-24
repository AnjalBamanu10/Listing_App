<?php



use App\Http\Controllers\AppUserController;
use App\Http\Controllers\ViewController;
use App\Models\AppUser;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[ViewController::class,'index'])->name('dashboard')->middleware(['auth']);

Route::get('/login',[ViewController::class,'loginView'])->name('login');
Route::get('/sign-up',[ViewController::class,'signupUser'])->name('signup');
Route::post('/login', [AppUserController::class,'loginUser'])->name('loginUser');

Route::post('/sign-up',[AppUserController::class,'registerUser'])->name('RegisterUser');

Route::get('/logout',[AppUserController::class,'logout'])->name('logout');
