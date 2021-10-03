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



        return view('Backadmin.AttractionsControll.AttractionMaterial');
    }

    public function Material(){

        $attraction_id = session('attraction_id');

        $Material = Attractions_price::where('attractions_id','=',$attraction_id)->get();

        return response()->json([
            'test' => $Material,
        ]);
    }





    public function attractionMaterialCreate($id){
        $user = Auth::user();
        $attraction = Attractions::findOrFail($id);
        $attractions_price = Attractions_price::where('attractions_id','=',$attraction->id)->get();

        return view('Backadmin.AttractionsControll.AttractionsCreate',['attractions' => $attraction,'attractions_price' => $attractions_price,'user' => $user]);
    }

    // 景點新增圖片畫面
    public function AttractionImgCreate($id){
        $user = Auth::user();
        $attraction = attractions::find($id);
        $imgs = Attractions_img::where('attractions_id','=',$attraction->id)->get();

        return view('Backadmin.AttractionsControll.AttracionsImgCreate',['attraction' => $attraction,'imgs' => $imgs,'user' => $user]);
    }


    // 新增細項
    public function attractionMaterialStore(Request $request){
        $Material = new Attractions_price;

        $Material->attractions_id = $request->input('attractions_id');
        $Material->name = $request->input('name');
        $Material->price = $request->input('price');
        $Material->save();
        return response()->json([
            'status' => 200,
            'message' => '新增成功'
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


    // 顯示要更新細項
    public function attractionMaterialEdit($post_id,$id){
        $attraction = Attractions::findOrFail($post_id);
        $attraction_M = Attractions_price::findOrFail($id);
        $attractions_price = Attractions_price::where('attractions_id','=',$attraction->id)->get();

        return view('Backadmin.AttractionsControll.AttractionsUpdate',['attractions' => $attraction,'attractions_price' => $attractions_price, 'attraction_M' => $attraction_M]);
    }


    // 該文章圖片庫
    public function AttractionImg($post_id){
        $attraction = Attractions::findOrFail($post_id);
        $Imgs=  Attractions_img::where('attractions_id' ,'=', $post_id)->get();
        $users = Auth::user();
        return view('Backadmin.AttractionsControll.AttractionsImg',['post_id' =>$attraction,'Imgs' => $Imgs,'user' => $users]);
    }



    // 顯示要更新圖片
    public function AttractionImgEdit($post_id , $id){
    $attraction = attractions::find($post_id);
    $imgs = Attractions_img::findOrFail($id);

    return view('Backadmin.AttractionsControll.AttractionsImgUpdate',['attraction' => $attraction,'imgs' => $imgs]);
    }



    // 更新細項
    public function attractionMaterialUpdate($post_id,$id , Request $request){

        if($id&&$post_id){
            $attraction_M = Attractions_price::where('id' ,'=' ,$id)->get();

            if( $request->hasAny(['name','price']) ){
                $Rupdate = $request->all();
                Attractions_price::findOrFail($id)->update($Rupdate);
                return back()->with('成功更改');

            }else{

                return back()->with('更改失敗');
            }

        }else{
            return back()->with('路由有問題');
        }


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


            // Storage::disk('public')->delete('/Attractions/1632921820_route未加入參數值錯誤訊號.PNG');

            $ImgName = time().'_'.$request->file('imgpath')->getClientOriginalName();

            $ImgPath = $request->file('imgpath')->storeAs(
                'Attractions',
                $ImgName,
                'public');
            var_dump($ImgPath);

            $img->update(['path_img' => asset(Storage::disk('public')->url($ImgPath))]);

            return back()->with('success file!');
        }

        return back()->with('success file!');

    }



}
