<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attractions;
use App\Models\Attractions_img;
use Illuminate\Support\Facades\Auth;

class AttractionControll extends Controller
{
    //
    public function index(){

        $attractions = Attractions::all();

        $user = Auth::user();




        return view('front.index',['attractions' => $attractions,'user' => $user]);
    }

    public function show($id){

        $attraction = Attractions::findOrFail($id);
        return view('front.show',['attraction' => $attraction]);
    }








}
