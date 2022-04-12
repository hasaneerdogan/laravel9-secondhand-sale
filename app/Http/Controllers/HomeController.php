<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('Myhome.index');
    }

    public function test()
    {
        return view('MyHome.test');
    }

    public function param($id,$number)
    {
       // echo "Parameter 1:",$id;
        //echo "<br> Parameter 2:",$number;
        //echo "<br> Sum Parameters: *" , $id+$number;

        return view('MyHome.test2',[

            'id' => $id,
            'number' => $number
        ]);
    }
    public function save(Request $request)
    {
        echo "Save Function<br>";
        echo "Name :<br>",$_REQUEST["fname"];
        echo "Last Name <br>:",$_REQUEST["lname"];

    }

}
