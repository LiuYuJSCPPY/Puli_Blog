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
                                <h4>景點資料</h4>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.attraction.index')}}">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.attraction.show',['attraction' => $attraction->id ])}}">景點資料</a>
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
                                        <div class="col-sm-6">
                                            <h3>{{ $attraction->name }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">地址:</label>
                                        <div class="col-sm-6">
                                            <h3>{{ $attraction->add }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">營業時間:</label>
                                        <div class="col-sm-6">
                                            <h3>{{ $attraction->business_time_start }} ~ {{ $attraction->business_time_end }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">公休:</label>
                                        <div class="col-sm-6">
                                            <h3>{{ $attraction->public_holiday }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">官網:</label>
                                        <div class="col-sm-6">
                                             <a href="{{  $attraction->offical }}"><h3>{{ $attraction->name }}</h3></a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">文章:</label>
                                        <div class="col-sm-6">
                                            <p>
                                            {{  $attraction->artice }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">圖片:</label>
                                        <div class="col-sm-6">
                                            @if( count($attraction->Attraction_img) == 0 )

                                            <p>尚未有圖片</p>

                                            @else

                                            <a href="{{ route('admin.AttractionImgs',['post_id' => $attraction->id]) }}" class="btn btn-primary">圖片庫</a>

                                            @endif
                                        </div>
                                    </div>


                                        <div class="card">
                                            <div class="card-header">
                                                <h5>景點表格價位:</h5>



                                            </div>
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
                                                            @foreach($attraction->Attraction_price as $price)
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
                                        </div>
                                </div>

@endsection

