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
        if (Auth::user()){
            $user = Auth::user();

            $attractions = Attractions::paginate(10);

            $posts = DB::table('Attractions')->orderBy('id','DESC')->limit(5)->get();

            return view('front.index',['attractions' => $attractions,'user' => $user,'posts' => $posts]);

        }else{
        $attractions = Attractions::paginate(5);

        return view('front.index',['attractions' => $attractions]);
        }


    }

    public function show($id){

        $post = post::where('post_categroy_id' ,'=',1)->where('artice_id','=',$id)->first();
        $attractions = DB::table('Attractions')->orderBy('id','DESC')->limit(5)->get();
        $attraction = Attractions::findOrFail($id);
        $comment = comment::where('posts_id','=',$post->id);


        return view('front.show',['attraction' => $attraction ,'Atraction' => $attractions,'post' => $post,'TotalComment' =>$comment]);
    }








}
