@extends('Backadmin.layout')


@section('show')

<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header card">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="icofont icofont-file-code bg-c-blue"></i>
                            <div class="d-inline">
                                <h4>景點圖片</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{route('admin.attraction.index')}}">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.attraction.edit',['attraction' => $Attraction->id])}}">景點更新</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->

            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Form Inputs card start -->
                        <div class="card">
                            <div class="card-header">
                            <h4>景點基本資料</h4>
                                <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

                                    <div class="card-header-right">
                                        <i class="icofont icofont-spinner-alt-5"></i>
                                    </div>

                                </div>
                                <div class="card-block">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">名稱:</label>
                                        <div class="col-sm-4">
                                            <h3>{{ $Attraction->name }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">地址:</label>
                                        <div class="col-sm-4">
                                            <h3>{{ $Attraction->add }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">營業時間:</label>
                                        <div class="col-sm-4">
                                            <h3>{{ $Attraction->business_time_start }} ~ {{ $Attraction->business_time_end }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">公休:</label>
                                        <div class="col-sm-4">
                                            <h3>{{ $Attraction->public_holiday }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">官網:</label>
                                        <div class="col-sm-4">
                                             <a href="{{ $Attraction->offical }}"><h3>{{ $Attraction->name }}</h3></a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">文章:</label>
                                        <div class="col-sm-4">
                                            <p>
                                            {{ $Attraction->artice }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">圖片:(圖片庫)</label>
                                        <div class="col-sm-4">
                                        @if( count($Attraction->Attraction_img) == 0 )
                                            <a href="{{ route('admin.AttractionImg.create',['post_id' => $Attraction->id]) }}" class="btn btn-primary">新增圖片</a>
                                        @else
                                            <a class="btn btn-mat btn-primary" href="{{ route('admin.AttractionImgs',['post_id' => $Attraction->id]) }}" >圖片庫</a>
                                        @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">價位資料:(價位庫) <a class="btn btn-primary" href="{{ route('admin.Material',['id' =>$Attraction->id]) }}">前往景點價格</a></label>
                                        <div class="col-sm-12">
                                        @if( count($Attraction->Attraction_price) == 0 )
                                            <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>id</th>
                                                                    <th>票名稱</th>
                                                                    <th>票的價錢</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($Attraction->Attraction_price as $price)
                                                                <tr>
                                                                    <th scope="row">{{ $price->id}}</th>
                                                                    <td>{{ $price->name }}</td>
                                                                    <td>{{ $price->price }}</td>

                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Form Inputs card start -->
                        <div class="card">
                            <div class="card-header">

                                <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

                                    <div class="card-header-right">
                                        <i class="icofont icofont-spinner-alt-5"></i>
                                    </div>

                                </div>
                                <div class="card-block">

                                    <form method="post" action="{{ route('admin.attraction.update',['attraction' => $Attraction->id]) }}">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" name="post_categroy_id" value="1">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">名稱:</label>
                                            <div class="col-sm-4">
                                                <input type="text"  name="name" class="form-control" value="{{ $Attraction->name }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">開始營業時間:</label>
                                            <div class="col-sm-3">
                                                <input type="time" name="business_time_start" class="form-control" value="{{ $Attraction->business_time_start }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">結束營業時間:</label>
                                            <div class="col-sm-3">
                                                <input type="time" name="business_time_end" class="form-control" value="{{ $Attraction->business_time_end }}">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">公休:</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="public_holiday" class="form-control" value="{{ $Attraction->public_holiday }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">地址:</label>
                                            <div class="col-sm-6">

                                                <input type="text" name="add" class="form-control" value="{{ $Attraction->add }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">官網:</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="offical" class="form-control" value="{{ $Attraction->offical }}">
                                            </div>
                                        </div>


                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">文章</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="5" cols="5" name="artice" class="form-control" placeholder="Default textarea" >{{ $Attraction->artice }}</textarea>
                                                </div>
                                            </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">顯示:</label>

                                            <div class="col-sm-7">
                                                <input type="radio" name="display" id="" value="0">不顯示
                                                <input type="radio" name="display" id="" value="1">顯示
                                            </div>
                                        </div>
                                            <button class="btn btn-mat btn-primary " type="submit">送出</button>
                                            <button class="btn btn-mat btn-danger " type="reset" >重新填寫</button>
                                        </form>
                                    </div>
                                </div>




@endsection