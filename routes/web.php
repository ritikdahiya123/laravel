<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\NewController;
use App\http\Controllers\RegistrationController;
use App\Models\Customer;
use App\Models\Products;
use App\Models\User;




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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/crud/{name}', function ($name) {
    $data=compact('name');
    return view('crud')->with($data);
    // echo $name;
});

Auth::routes();

// Route::get('/new', [CrudController::class,'new']);
// Route::resource('/crud', CrudController::class);
Route::get('/new', 'App\Http\Controllers\NewController@New');
Route::get('/form', 'App\Http\Controllers\RegistrationController@index');
Route::get('/registration', 'App\Http\Controllers\RegistrationController@registration')->name('registration.view');
Route::get('/login', 'App\Http\Controllers\RegistrationController@login')->name('login.view');
Route::get('/products', 'App\Http\Controllers\RegistrationController@products')->name('products.view');
Route::get('/updateproductsview', 'App\Http\Controllers\RegistrationController@updateproductsview')->name('updateproductsview.view');


Route::get('/dashboard', 'App\Http\Controllers\RegistrationController@dashboard');


Route::post('/user', 'App\Http\Controllers\RegistrationController@user')->name('user');
Route::post('/allproducts', 'App\Http\Controllers\RegistrationController@allproducts')->name('allproducts');
Route::post('/updateproducts', 'App\Http\Controllers\RegistrationController@updateproducts')->name('updateproducts');

Route::post('/loginuser', 'App\Http\Controllers\RegistrationController@loginuser')->name('loginuser');

Route::post('/register', 'App\Http\Controllers\RegistrationController@register')->name('register');

Route::get('/register/view', 'App\Http\Controllers\RegistrationController@view')->name('view.view');
// Route::get('/register/viewuser', 'App\Http\Controllers\RegistrationController@viewuser');

Route::get('/register/delete/{id}', 'App\Http\Controllers\RegistrationController@delete');
Route::get('/register/update/{id}', 'App\Http\Controllers\RegistrationController@update');
Route::post('/register/updateuser/{id}', 'App\Http\Controllers\RegistrationController@updateuser');



// Route::get('/customer',function (){

//     $customers=Customer::all();
//     echo "<pre>";
//     print_r($customers->toArray());
// });



