<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        //return 'Customers';

        $data = User::all();
        return view('user',['users'=>$data]);

    }

    public function login()
    {
        return view ('user.login');
    }

    public function process(Request $req)
    {
       $validated = $req->validate([
        "email"=>['required', 'email'],
        'password'=>'required'
       ]);

       if(auth()->attempt($validated)){
        $req->session()->regenerate();
        return redirect("/");
       }
    }

    public function register(){
        return view ('user.register');
    }

    
    public function store(Request $req)
    {
      //dd($req);
      $validated=$req->validate([
        "name"=>['required','min:4'],
        "email"=>['required','email', Rule::unique('users','email'),],
        "password"=>'required|confirmed|min:6'

      ]);

      $validated['password']=Hash::make($validated['password']);
      $user=User::create($validated);
    }

}

/*
class UserController extends Controller
{
    public function index(){
        return 'Hello from users';
    }

    public function show($id){
        $data=array(
            "id"=>$id,
            "name"=>"LeonardReyes",
            "email"=>"primus.reyes@gmail.com"
         );
        return view('user', ['data' => $data]); 
    }
}
*/ 

