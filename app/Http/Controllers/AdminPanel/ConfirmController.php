<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ConfirmController extends Controller
{
    public function index()
    {
        $data=Place::all();
        return view('admin.confirm.index',[
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        return view('admin.confirm.show',[
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
        $data->status=$request->status;
        $data->save();
        return redirect('admin/confirm');

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
        return redirect('admin/confirm');

    }
}
