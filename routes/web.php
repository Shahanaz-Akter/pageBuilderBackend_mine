<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Otp;


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

// Route::get('/', function () {
//     return view('auth.login');
// });
// Route::get('/signup', function () {
//     return view('auth.signup');
// });
// Route::get('/otp', function () {
//     return view('auth.otp');
// });
// Route::get('/location', function () {
//     return view('auth.business_location');
// });
// Route::get('/pin', function () {
//     return view('auth.pin_generate');
// });
// Route::get('/reset_pin', function () {
//     return view('auth.reset_pin');
// });
// Route::get('/tob', function () {
//     return view('auth.type_of_business');
// });
// Route::get('/home', function () {
//     return view('home');
// });
// Route::post('/getpin', function (Request $request) {
//     dd($request);
// });
// Route::post('/post_otp', function (Request $request) {
//     dd($request);
// });
// Route::get('/add_product', function (Request $request) {
//     return view('inventory.add_product');
// });

// Route::get('/inventory', function (Request $request) {
//     return view('inventory.home');
// });
Route::get('/electronics_inventory', function (Request $request) {
    return view('electronics_inventory.home');
});

// Route::get('/product_group', function (Request $request) {
//     return view('inventory.product_group');
// });
// Route::get('/product_item', function (Request $request) {
//     return view('inventory.product_item');
// });
// Route::get('/product_category', function (Request $request) {
//     return view('inventory.add_category');
// });



Route::controller(App\Http\Controllers\Otp\OtpController::class)->group(function () {

    Route::get('/', 'signUp')->name('signup');
    Route::post('/sendOtp', 'sendOtp')->name('sendOtp');
    Route::get('/otp/{id}', 'Otp')->name('otp');
    Route::post('/post_otp', 'post_Otp')->name('post_otp');
    Route::get('/tob/{id}', 'tob')->name('tob');
    Route::post('/post_tob/{id}', 'post_tob')->name('post_tob');
    Route::get('/location/{id}', 'location')->name('location');
    Route::post('/post_location/{id}', 'post_location')->name('post_location');
    Route::get('/pin/{id}', 'pin')->name('pin');
    Route::post('/post_pin/{id}', 'post_pin')->name('post_pin');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/login', 'login')->name('login');
    Route::post('/post_login', 'post_login')->name('post_login');


    Route::get('/forgotten_password', 'forgotten_password')->name('forgotten_password');
    Route::post('/post_forgotten_password', 'post_forgotten_password')->name('post_forgotten_password');
    Route::get('/further_otp/{id}', 'further_otp')->name('further_otp');
    Route::post('/post_further_otp', 'post_further_otp')->name('post_further_otp');



    Route::get('/reset_pin/{id}', 'reset_pin')->name('reset_pin');
    Route::post('/post_resetpin/{id}', 'post_resetpin')->name('post_resetpin');

    Route::get('/resend/{id}', 'resend')->name('resend');
    Route::post('/post_resend', 'post_resend')->name('post_resend');

    Route::get('/logout', 'logout')->name('logout');
});
