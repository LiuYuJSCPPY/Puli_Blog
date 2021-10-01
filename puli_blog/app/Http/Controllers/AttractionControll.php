<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attractions;

class AttractionControll extends Controller
{
    //
    public function index(){

        $attractions = Attractions::all();

        return view('front.index',['$attractions' => $attractions]);
    }

    public function show($id){

        $attraction = Attractions::findOrFail($id);
        return view('front.show',['attraction' => $attraction]);
    }



}
