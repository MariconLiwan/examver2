<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


class UserController extends Controller
{

    public function index()
    {
        //return 'Customers';

        $data = User::all();
        return view('user',['users'=>$data]);

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

