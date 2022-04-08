<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home.index');
    }
    public function test(){
        return view('home.test');
    }

    public function param($id,$number){
        //echo "Paramater 1:", $id;
        //echo "<br>Paramater 2:", $number;
        //echo "<br> Sum of paramaters:", $number+$id;
        return view('home.test2',[
            'id' => $id,
            'number' => $number
        ]);
    }
    public function save(Request $request){
      echo "Save function <br>";
      echo "First Name ",$_REQUEST['fname'];
      echo "Last Name ",$_REQUEST['lname'];
        //return view('home.test2',[
          //  'id' => $id,
            //'number' => $number
        //]);

    }

}

