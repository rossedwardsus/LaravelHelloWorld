<?php

namespace App\Http\Controllers;

use App\Models\User;
//use App\Http\Controllers\RedirectResponse;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
//use Request;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Redirect;

class FormController extends Controller
{
    public function show()
    {
        //return view('user.profile', [
        //    'user' => User::findOrFail($id)
        //]);
        

        $users = DB::table('users')->get();

        //return "formpost" . $request -> method();
        return view("form", ['users' => $users]);
        //return response("html", 200)->headers('Content-Type', 'text/html');
        #return Request::post();
    }

    public function store(Request $request): RedirectResponse
{
        //$validated = $request->validate([
            //'title' => 'required|unique:posts|max:255',
        //    'email' => 'required',
        //]);

        //$user = User::create(['first_name' => 'laravel first name', 'last_name' => 'laravel last name', 'about_me' => 'laravel about me']);
    


        // The blog post is valid...
    
        return redirect('/form');
    }
}
