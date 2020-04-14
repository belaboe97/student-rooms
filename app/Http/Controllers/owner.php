<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

class owner extends Controller

{
    public function index()
    {
    
        return view('index'); ;
    }

    public function ownerview(){

        $data = DB::select('select * from rooms');

        return view ('mainpage')->with('owner',$data);
    }
}