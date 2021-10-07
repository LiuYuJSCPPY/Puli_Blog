<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attractions;
use App\Models\Attractions_img;
use App\Models\Attractions_price;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AttractionControll extends Controller
{
    //
    public function index(){

        $attractions = Attractions::all();

        $user = Auth::user();

        return view('front.index',['attractions' => $attractions,'user' => $user]);
    }

    public function show($id){

        $attractions = DB::table('Attractions')->orderBy('id','DESC')->limit(5)->get();
        $attraction = Attractions::findOrFail($id);
        return view('front.show',['attraction' => $attraction ,'Atraction' => $attractions]);
    }








}
