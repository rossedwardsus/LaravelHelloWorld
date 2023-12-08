<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Routing\Controller as BaseController;

class AddBankAccountController extends Controller
{
    public function show()
    {
        //return view('user.profile', [
        //    'user' => User::findOrFail($id)
        //]);

        //return "formpost" . $request -> method();
        //return response("html", 200)->headers('Content-Type', 'text/html');
        return Request::post();
    }
}
