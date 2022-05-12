<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPlaceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Place::all();
        return view('admin.place.index',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Category::all();
        return view('admin.place.create',[
            'data'=>$data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Place();
        $data->category_id=$request->category_id;
        $data->user_id=0; //$request->category_id;
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->detail=$request->detail;
        $data->country=$request->country;
        $data->city=$request->city;
        $data->location=$request->location;
        $data->phone=$request->phone;
        $data->working_hours_start=$request->working_hours_start;
        $data->working_hours_end=$request->working_hours_end;
        $data->working_days=$request->working_days;
        $data->description=$request->description;
        $data->status=$request->status;
        if ($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin\place');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place,$id)
    {
        $data=Place::find($id);
        return view('admin.place.show',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Place $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place,$id)
    {
        $data=Place::find($id);
        $datalist=Category::all();
        return view('admin.place.edit',[
            'data'=>$data,
            'datalist'=>$datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place,$id)
    {
        $data=Place::find($id);
        $data->category_id=$request->category_id;
        $data->user_id=0; //$request->category_id;
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->detail=$request->detail;
        $data->city=$request->city;
        $data->country=$request->country;
        $data->location=$request->location;
        $data->phone=$request->phone;
        $data->working_hours_start=$request->working_hours_start;
        $data->working_hours_end=$request->working_hours_end;
        $data->working_days=$request->working_days;
        $data->status=$request->status;
        if ($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/place');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place,$id)
    {
        $data=Place::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/place');

    }
}
