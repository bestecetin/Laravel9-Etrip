<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Place;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        $page='home';
        $sliderdata=Place::limit(4)->get();
        $placelist1=Place::limit(6)->get();
        $placelist2=Place::where('city','Istanbul')->limit(6)->get();
        $placelist3=Place::where('city','Paris')->limit(6)->get();

        $setting=Setting::first();
        return view('home.index',[
            'page'=>$page,
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'placelist1'=>$placelist1,
            'placelist2'=>$placelist2,
            'placelist3'=>$placelist3
            ]
        );
    }
    public function about(){
        $setting=Setting::first();
        return view('home.about',[

                'setting'=>$setting,
            ]
        );
    }
    public function references(){
        $setting=Setting::first();
        return view('home.references',[

                'setting'=>$setting,
            ]
        );
    }
    public function contact(){
        $setting=Setting::first();
        return view('home.contact',[

                'setting'=>$setting,
            ]
        );
    }
    public function faq(){
        $setting=Setting::first();
        $datalist=Faq::all();
        return view('home.faq',[

                'setting'=>$setting,
                'datalist'=>$datalist
            ]
        );
    }
    public function storemessage(Request $request){
       //dd($request);
        $data=new Message();
        $data->name=$request->input('name');
        $data->phone=$request->input('phone');
        $data->email=$request->input('email');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('contact')->with('info','Your message has been sent, Thank you');
    }
    public function storecomment(Request $request){
        $data=new Comment();
        $data->user_id=Auth::id();
        $data->place_id=$request->input('place_id');
        $data->subject=$request->input('subject');
        $data->review=$request->input('review');
        $data->rate=$request->input('rate');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('place',['id'=>$request->input('place_id')])->with('info','Your comment has been sent, Thank you');
    }
    public function place($id){
        $data=Place::find($id);
        $images=DB::table('images')->where('place_id',$id)->get();
        $reviews=Comment::where('place_id',$id)->where('status','True')->get();
        return view('home.place',[
                'data'=>$data,
                'images'=>$images,
                'reviews'=>$reviews
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
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

    }
    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}

