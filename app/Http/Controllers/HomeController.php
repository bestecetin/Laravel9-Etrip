<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        $sliderdata=Place::limit(4)->get();
        $placelist1=Place::limit(6)->get();
        $placelist2=Place::where('city','Istanbul')->limit(6)->get();
        $placelist3=Place::where('city','Paris')->limit(6)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'placelist1'=>$placelist1,
            'placelist2'=>$placelist2,
            'placelist3'=>$placelist3
            ]
        );
    }
    public function place($id){
        $data=Place::find($id);
        $images=DB::table('images')->where('place_id',$id)->get();
        return view('home.place',[
                'data'=>$data,
                'images'=>$images
        ]);
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

