<?php

use App\Http\Controllers\TemplateController;
use App\Models\Template;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here all APIs are available
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function () {
    $users = User::all();
    return response()->json($users);
});

Route::post('/users', function (Request $request) {
    if ($request->password1 == $request->password2) {
        $user = User::create([
            'name' => $request->name,
            'password' => $request->password1,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
        ]);
    }
    return response()->json($user);
});
Route::post('/templates', [TemplateController::class, 'postTemplate']);
Route::get('/templates', [TemplateController::class, 'getTemplate']);
Route::get('/templates/{id}', [TemplateController::class, 'getTemplateById']);