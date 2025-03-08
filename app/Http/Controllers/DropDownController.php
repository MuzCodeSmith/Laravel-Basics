<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// models
use App\Models\{Country,City,State};

class DropDownController extends Controller{
    public function index()
    {
        $counteries = Country::get(['id','name']);
        return view('dropdown',compact('counteries'));
    }

    public function fetchState(Request $request){
        $data['states'] = State::where('country_id',$request->country_id)->get(['id','name']);
        return response()->json($data);
    }
}
