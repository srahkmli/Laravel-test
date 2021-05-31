<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Addresses;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/insert', function (){

    $user = User::findOrFail(1);
    $address= new Addresses(['name'=>'1234 street']);

    $user->address()->save($address);
    return ' data has been inserted';
});


Route::get('/update', function (){

    $address = Addresses::whereUserId(1)->first();
    $address= new Addresses(['name'=>'5678 Alley']);

   $address->save();
   return 'data updated';
});

Route::get('/read', function (){

    $user = User::findOrFail(1);

    echo $user->address->name;
});

Route::get('/delete', function (){

    $user = User::findOrFail(1);

     $user->address()->delete();
     return"done";
});

/*
Route::get('/address', function () {
    return view('address');
}); */


Route::resource('/posts',App\Http\Controllers\AddressController::class);