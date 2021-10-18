<?php

namespace App\Http\Controllers\BackControll;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attractions;
use App\Models\post;
use App\Models\Attractions_img;
use App\Models\Attractions_price;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AttractionsRequest;
use Illuminate\Support\Facades\Validator;



class AttractionImgMaterial extends Controller
{
    //

    // 景點新增細項畫面

    public function Materialindex($id){
        $attraction = Attractions::find($id);

        return view('Backadmin.AttractionsControll.AttractionMaterial',['attraction' =>  $attraction]);
    }


    // 景點細項資料
    public function Material(){

        $attraction_id = session('attraction_id');


        $Material = Attractions_price::where('attractions_id','=',$attraction_id)->get();

        return response()->json([
            'session' =>  $attraction_id,
            'test' => $Material,
            'Material' => $attraction_id,
        ]);
    }

    // 需要更新景點個別資料
    public function MaterialEdit($id){

        $attraction_id = session('attraction_id');

        $attraction = Attractions_price::where('id','=',$id)->where('attractions_id','=',$attraction_id)->first();

        return response()->json([
            'status' => 200,
            'attraction' => $attraction,
        ]);
    }


    // 新增細項
    public function attractionMaterialStore(Request $request){


        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'price' => 'required',
            'attractions_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'error' => $validator->messages()
            ]);
        }else{
            $attraction = new Attractions_price;

            $attraction->name = $request->input('name');
            $attraction->price = $request->input('price');
            $attraction->attractions_id = $request->input('attractions_id');
            $attraction->save();
            return response()->json([
                'status' => 200,
                'message' => '新增成功'
            ]);

        }

    }


    // public function teatMaterialUpdate($post_id, $id ){
    //     $attraction = Attractions_price::where('id','=',$id)->where('attractions_id','=',$post_id)->first();

    //     return response()->json([
    //         'status' => 200,
    //         'update' => $attraction,
    //         'message' => "已經更新囉!!",
    //     ]);
    // }


    public function MaterialUpdate($post_id, $id ,Request $request){

        if($post_id && $id){
            $update = Attractions_price::where('attractions_id','=',$post_id)->where('id','=',$id)->first();

            $validator = Validator::make($request->all(),[
                'name' => 'required',
                'price' => 'required',
                'attractions_id' => 'required',
            ]);

            if($validator->fails()){

                return response()->json([
                    'status' => 400,
                    'message' => 'error',
                    'ss' => $validator,
                ]);

                $update->name = $request->input('name');
                $update->price = $request->input('price');
                $update->update();

                return response()->json([
                    'status' => 200,
                    'update' => $update,
                    'message' => "已經更新囉!!",
                ]);

            }else{

                $update->name = $request->input('name');
                $update->price = $request->input('price');
                $update->update();

                return response()->json([
                    'status' => 200,
                    'update' => $update,
                    'message' => "已經更新囉!!",
                ]);

            }

        }else{

            return response()->json([
                'status' => 404,
                'message' => "noll id",
            ]);
        }

    }


    public function Materialdestroy($post_id, $id){
       $Attraction  = Attractions_price::where('attractions_id','=',$post_id)->where('id','=',$id)->first();
       $Attraction->delete();

       return response()->json([
           'status' => 400,
           'message' => '已成功刪除',
       ]);

    }






    // 新增圖片
    public function AttractionImgStore($id ,Request $request){
        $attraction = Attractions::find($id);

        $name = $request->input('name');


        $Imgname = time().'_'.$request->file('imgpath')->getClientOriginalName();
            // 新增圖片路由
            if($name && $Imgname){

                $Imgpath = $request->file('imgpath')->storeAs(
                    'Attractions',
                    $Imgname,
                    'public'
                );

                Attractions_img::create([
                    'name' => $name,
                    'path_img' => asset(Storage::disk('public')->url($Imgpath)),
                    'attractions_id' => $attraction->id,
                    ]);

                return back();
            } else {
                return back()->with('test','名稱或檔案未填寫');
        }
    }




    public function AttractionImgCreate($post_id){
        $attraction = Attractions::findOrFail($post_id);
        $users = Auth::user();
        return view('Backadmin.AttractionsControll.AttractionsImgCreate',['attraction' =>$attraction,'user' => $users]);
    }

    // 該文章圖片庫
    public function AttractionImg($post_id){

        $attraction = Attractions::findOrFail($post_id);
        $Imgs=  Attractions_img::where('attractions_id' ,'=', $post_id)->get();

        return view('Backadmin.AttractionsControll.AttractionsImg',['post_id' =>$attraction,'Imgs' => $Imgs]);
    }



    // 顯示要更新圖片
    public function AttractionImgEdit($post_id , $id){
    $attraction = attractions::find($post_id);
    $imgs = Attractions_img::findOrFail($id);
    return view('Backadmin.AttractionsControll.AttractionsImgUpdate',['attraction' => $attraction,'imgs' => $imgs]);
    }


    // 更新圖片
    public function AttractionImgUpdate($post_id , $id ,Request $request){
    $attraction = attractions::find($post_id);

    $img = Attractions_img::findOrFail($id);

    // 如果有抓到name，再來判斷圖片是否又要修改
        $Name = $request->input('name');
        $img->update(['name' => $Name]);



        // 如果有抓到圖片ID，那就要做把之前的圖片刪掉在新增新的圖片
        if($request->file('imgpath') != null){

            $img = Attractions_img::findOrFail($id);

            // PHP rtrim(刪除http://127.0.0.1:8000/storage/ 字串數)
            $path_Img = substr($img->path_img,30);

            var_dump($path_Img);
            Storage::disk('public')->delete($path_Img);


            $ImgName = time().'_'.$request->file('imgpath')->getClientOriginalName();

            $ImgPath = $request->file('imgpath')->storeAs(
                'Attractions',
                $ImgName,
                'public');
            var_dump($ImgPath);

            $img->update(['path_img' => asset(Storage::disk('public')->url($ImgPath))]);

            return back()->with('success file!');
        }


    }

    public function AttractionImgDelete($post_id, $M_id){

        $img = Attractions_img::findOrFail($M_id);

        $path_Img = substr($img->path_img,30);

        var_dump($path_Img);
        Storage::disk('public')->delete($path_Img);

        Attractions_img::where('attractions_id','=',$post_id)->findOrFail($M_id)->delete();


    return back();


    }



}
