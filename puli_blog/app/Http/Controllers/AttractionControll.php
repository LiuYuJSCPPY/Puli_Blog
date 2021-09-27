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


    public function AttractionsCreate($id){
            $attraction = Attractions::findOrFail($id);
            $attractions_price = Attractions_price::where('attractions_id','=',$attraction->id)->get();

            return view('Backadmin.AttractionsControll.AttractionsCreate',['attractions' => $attraction,'attractions_price' => $attractions_price]);
        }


    public function AttractionsImgCreate($id){
        $attraction = attractions::find($id);

        return view('Backadmin.AttractionsControll.AttracionsImgCreate',['attraction' => $attraction]);
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


    public function AttractionsStore($id ,Request $request){
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

    public function AttractionsImgStore($id ,Request $request){
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
                    'Attractions_id' => $attraction->id,
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
