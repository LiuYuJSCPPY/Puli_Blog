<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attractions;
use App\Models\post;
use App\Models\Attractions_img;
use App\Models\Attractions_price;
use Illuminate\Support\Facades\Storage;

class AttractionControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Attractions = Attractions::all();


        return view('Backadmin.AttractionsControll.index',['Attractions' => $Attractions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
        return view('Backadmin.AttractionsControll.create');
    }


    public function attractionMaterialCreate($id){
            $attraction = Attractions::findOrFail($id);
            $attractions_price = Attractions_price::where('attractions_id','=',$attraction->id)->get();

            return view('Backadmin.AttractionsControll.AttractionsCreate',['attractions' => $attraction,'attractions_price' => $attractions_price]);
        }


    public function AttractionImgCreate($id){
        $attraction = attractions::find($id);
        $imgs = Attractions_img::where('attractions_id','=',$attraction->id)->get();

        return view('Backadmin.AttractionsControll.AttracionsImgCreate',['attraction' => $attraction,'imgs' => $imgs]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  新增景點資料及文章
    public function store(Request $request)
    {
        //

        $all = $request->all();
        if( isset($all['name']) ){
            $attractions = Attractions::create($all);
            if ($attractions->id && $request->hasAny('user_id')){
            post::create([
                'user_id' => $request->input('user_id'),
                'post_categroy_id' => $request->input('post_categroy_id'),
                'artice_id' => $attractions->id,
            ]);
            }

            return redirect()->route('attraction.create',["post_id" => $attractions->id]);
        }

    }


    public function attractionMaterialStore($id ,Request $request){
        $attraction = Attractions::find($id);



        if ( $request->input('name') != null  &&  $request->input('price') != null){
                Attractions_price::create([
                'attractions_id' => $attraction->id,
                'name' => $request->input('name'),
                'price' => $request->input('price')
                ]);
            return back();
        }else{
            return back()->with('test','名稱或檔案未填寫');
        }


    }

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $attraction = Attractions::find($id);

        return view('Backadmin.AttractionsControll.show',['attraction' => $attraction]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $attraction = Attractions::findOrFail($id);
        return view('Backadmin.AttractionsControll.edit',['Attraction' => $attraction]);

    }

    public function attractionMaterialEdit($post_id,$id){
        $attraction = Attractions::findOrFail($post_id);
        $attraction_M = Attractions_price::findOrFail($id);
        $attractions_price = Attractions_price::where('attractions_id','=',$attraction->id)->get();

        return view('Backadmin.AttractionsControll.AttractionsUpdate',['attractions' => $attraction,'attractions_price' => $attractions_price, 'attraction_M' => $attraction_M]);
    }


    // 設定該文章圖庫
    public function AttractionImg($post_id){
        $attraction = Attractions::findOrFail($post_id);
        $Imgs=  Attractions_img::where('attractions_id' ,'=', $post_id)->get();

        return view('Backadmin.AttractionsControll.AttractionsImg',['post_id' =>$attraction,'Imgs' => $Imgs]);
    }


    public function AttractionImgEdit($post_id,$id){
    $attraction = attractions::find($post_id);
    $imgs = Attractions_img::findOrFail($id);


    return view('Backadmin.AttractionsControll.AttractionsImgUpdate',['attraction' => $attraction,'imgs' => $imgs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $attraction= attractions::findOrFail($id);


        $R_attraction = $request->all();
        $attraction->update($R_attraction);

        return redirect()->route('admin.attraction.index');
    }

    public function attractionMaterialUpdate($post_id,$id , Request $request){

        if($id&&$post_id){
            $attraction_M = Attractions_price::where('id' ,'=' ,$id)->get();
            var_dump($request->all());
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


    public function AttractionImgUpdate($id ,Request $request){
    $attraction = attractions::find($id);
    $imgs = Attractions_img::where('attractions_id','=',$attraction->id)->get();


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function post($id){

    }
}