<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FormController;


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

Route::get('/add_friend', function () {
    return view('friend');
});

Route::get('/add_account', function () {
    return view('bank_account');
});



Route::get('/form1', function (Request $request) {
    //return 'welcome' . $request -> method();
    if($request -> method() === "GET"){
        return view("form");
    //}else{
    //    return $request->get('email');
    }
});

Route::get('/form', [FormController::class, 'show']); 
Route::post('/formpost', [FormController::class, 'store']);


Route::get('/api', function () {
    $data = [
        "status"=> "OK",
        "data"=> [ 
                    "user" => [
                               "name"=> "Shriyansh",
                               "email"=>"some@email.com",
                               "contact"=>"1234567890",
                               "fcmToken"=>"Token@123"
                    ],
                    "event"=> [
                               "status" => "successful",
                               "status_code" => 4
                     ]
        ]
    ];

    return response()->json($data, 200);

    //return view('welcome');

});
