<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SecretController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');
Route::get('/', function () {
    return view('frontend.pages.homepage');
})->name('welcome');

// Route::group(['middleware' => ['auth', 'inactivity.logout']], function () {
//     Route::get('dashboard', [AuthController::class, 'dashboard'])->name('user.dashboard');
// });
// Forgot Password Routes
 Route::get('about-us',[ FrontendController::class, 'aboutUs'])->name('frontend.aboutus');
 Route::get('contact',[ FrontendController::class, 'contactUs'])->name('frontend.contactus');


// Reset Password Routes
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('/registeration', [AuthController::class, 'getRegister'])->name('getRegister');
Route::get('/login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('dashboard', [SecretController::class, 'dashboard'])->name('user.dashboard');
    Route::get('support', [SecretController::class, 'support'])->name('user.support');
});
// Route::get('dashboard', [AuthController::class, 'dashboard'])->middleware('auth:web')->name('user.dashboard');
// Route::get('/dashboard', [SecretController::class, 'dashboard'])->name('dashboard');
Route::post('/post/registeration', [AuthController::class, 'postRegister'])->name('postRegister');
Route::post('/post/login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::post('/store-secret', [SecretController::class, 'store'])->name('store.secret');
Route::get('/secret/{secret}', [SecretController::class, 'secret'])->name('secret');
Route::get('/private/{uuid}', [SecretController::class, 'generatelink'])->name('view.secret');
Route::post('/user-secret', [SecretController::class, 'userSecret'])->name('userSecret');

Route::post('/clear-secret-link', [SecretController::class, 'clearSecretLink'])->name('clear.secret_link');
Route::post('/mask-secret-content/{id}', [SecretController::class, 'maskSecretContent'])->name('mask.secret.content');
Route::post('/check-phasepass/{id}', [SecretController::class, 'checkPhasepass'])->name('check.phasepass');



Route::prefix('admin')->group(function (){

    Route::get('/login', [AdminController::class, 'getLogin'])->name('admin.login');
Route::post('/post',  [AdminController::class, 'postAdminLogin'])->name('admin.post.login');


Route::get('/Reset/password', [AdminController::class,'GetResetPasswordForm'])->name('GetResetPasswordForm');
Route::post('/password/forget', [AdminController::class, 'sendResetLink'])->name('admin.forget.password.link');
     Route::get('/password/reset/{token}', [AdminController::class, 'showFormReset'])->name('admin.reset.password.form');
    


     Route::get('/password/resetpassword/', [AdminController::class, 'showFormReset'])->name('admin.forgetpasswordlink');
      Route::post('/password/reset', [AdminController::class, 'resetPassword'])->name('admin.reset.password');
Route::middleware(['auth:admin'])->group(function () {
        Route::get('dashbaord',[ AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/user',[ AdminController::class, 'users'])->name('admin.users');
        Route::get('/secrets',[ AdminController::class, 'secret'])->name('admin.secret');
        Route::post('/logout', [AdminController::class, 'logOut'])->name('admin.logout');
    });



});
