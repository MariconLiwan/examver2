<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;


class RoomController extends Controller
{

    public function index()
    {
        //return 'Customers';

        $data = Room::all();
        return view('room.index',['rooms'=>$data]);

    }
}


