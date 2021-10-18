<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;
use App\Models\post;
use Illuminate\Support\Facades\Auth;

class CommentControll extends Controller
{
    //

    public function GetPostComment($categroy_id , $attraction_id){

        $post_id = post::where('post_categroy_id','=',$categroy_id)->where('artice_id','=',$attraction_id)->first();

        $post_comment = comment::where('posts_id','=',$post_id->id)->get();

        return response()->json([
            'status' => 200,
            'PostComment' => $post_comment,
        ]);
    }

    public function StorePostComment($categroy_id , $attraction_id, Request $request){


        if (Auth::user()){
            $post_id = post::where('artice_id','=',$attraction_id)->where('post_categroy_id','=',$categroy_id)->first();

            $post_comment = comment::where('posts_id','=',$post_id->id)->first();


            comment::create([
                'posts_id' => $attraction_id,
                'user_id' => Auth::user()->id,
                'name' => Auth::user()->name,
                'text' => $request->input('text'),
            ]);


            return response()->json([
                'status' => 200,
                'message' => '成功',
                'PostCommebt' => $post_comment,
            ]);

        }else {
            return response()->json([
                'status' => 400,
                'message' => "請先登入",
            ]);
        }


    }
}
