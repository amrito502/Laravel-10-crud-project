<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    public function index(){
        $data = Data::latest()->get();
        return view('index',compact('data'));
    }


    public function add_data(){
        return view('add_data');
    }

    public function store_data(Request $request){
        Data::create($request->all());
        return redirect()->route('index')->with('message','Data Successfully Created');
    }

    public function edit_data($id){
        $data = Data::find($id);
        return view('edit_data', compact('data'));
    }

    public function update_data(Request $request, $id){

        $data = Data::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->update();

        return redirect()->route('index')->with('message','Data Successfully Updated');
    }

    public function delete_data($id){
        $data = Data::find($id);
        $data->delete();
        return redirect()->route('index')->with('message','Data Successfully Deleted');
    }
}
