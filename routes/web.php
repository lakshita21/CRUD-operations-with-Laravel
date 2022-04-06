<?php

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

$Path = "App\Http\Controllers";
Route::get('/', function () {
    return view('welcome');
});

Route::view('login', 'LoginPage');
Route::post('loginSubmit', $Path . '\userLogin@LogIn');
Route::get('userData', $Path . '\UserdetailController@show');
Route::get('deleteUser/{id}', $Path . '\UserdetailController@destroy');
Route::get('userCreate', $Path . '\UserdetailController@create');
Route::post('addUser', $Path . '\UserdetailController@store');
Route::get('editUser/{id}', $Path . '\UserdetailController@edit');
Route::post('updateUser/{id}', $Path . '\UserdetailController@update')->name('userdetail.update');
Route::get('/logout', function () {
    session()->forget('name');
    session()->flash('errorMessage', "Logout Successfully.");
    return redirect('login');
});
// Route::group(['middleware' => ['userAuth']], function () {
//     Route::view('userData', 'UserData');
// });
