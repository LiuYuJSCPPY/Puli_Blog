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
use App\Http\Requests\AttractionsRequest ;

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
        if(Auth::user()){

            $user = Auth::user();
            $Attractions = Attractions::all();


            return view('Backadmin.AttractionsControll.index',['Attractions' => $Attractions,'user' => $user]);
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
        if(Auth::user()){
            $user = Auth::user();
        return view('Backadmin.AttractionsControll.create',['user' => $user]);
        }

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  新增景點資料及文章
    public function store(AttractionsRequest $request)
    {
        //判斷是否是會員
        if($request->user()){
            $user = $request->user();
            $all = $request->all();


            if( isset($all['name']) ){
                $attractions = Attractions::create($all);
                if ($attractions->id && $user->id){
                post::create([
                    'user_id' => $user->id,
                    'post_categroy_id' => $request->input('post_categroy_id'),
                    'artice_id' => $attractions->id,
                ]);
                }

            return redirect()->route('admin.attractionMaterial.create',["post_id" => $attractions->id]);
            }

        }else{
            return response('錯誤');
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
        if(Auth::user()){

            $user = Auth::user();

            $attraction = Attractions::find($id);

            session('attraction_id','null');

            session(['attraction_id' => $attraction->id]);

            return view('Backadmin.AttractionsControll.show',['attraction' => $attraction,'user' => $user]);
        }
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
        $users = Auth::user();
        $attraction = Attractions::findOrFail($id);
        return view('Backadmin.AttractionsControll.edit',['Attraction' => $attraction ,'user' => $users]);

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