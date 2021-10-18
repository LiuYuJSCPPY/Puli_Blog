<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attractions;
use App\Models\Attractions_img;
use App\Models\Attractions_price;
use App\Models\comment;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AttractionControll extends Controller
{
    //
    public function index(){

        $posts = Attractions::where('display','=',true)->get();

        $attractions = Attractions::where('display','=',true)->paginate(5);

        $post =  Attractions::orderBy('id','DESC')->where('display','=',true)->limit(5)->get();

        return view('front.index',['attractions' => $attractions,'post' => $post,'posts' =>$posts]);

    }

    public function show($id){

        $posts = Attractions::where('display','=',true)->get(); //

        $post = post::where('post_categroy_id' ,'=',1)->where('artice_id','=',$id)->first();

        $Posts_Attractions = Attractions::orderBy('id','DESC')->limit(5)->get();

        $attraction = Attractions::findOrFail($id);

        $comment = comment::where('posts_id','=',$post->id);

        return view('front.show',['attraction' => $attraction ,'Posts_Attractions' => $Posts_Attractions,'post' => $post,'TotalComment' =>$comment,'posts' => $posts]);
    }








}
