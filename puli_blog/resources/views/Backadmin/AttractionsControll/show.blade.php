@extends('Backadmin.layout')

@section('show')


@php


    $attraction->Attraction_price ? $attraction_prices = $attraction->Attraction_price  : [] ;
    $attraction->Attraction_img ? $Attraction_imgs = $attraction->Attraction_img : $Attraction_imgs= [] ;
@endphp


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
                                    <a href="index.html">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.attraction.index')}}">景點文章</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.AttractionImg.create',['post_id' => $attraction->id])}}">景點圖檔資料</a>
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
                            <h5>可以不寫</h5>
                                <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

                                    <div class="card-header-right">
                                        <i class="icofont icofont-spinner-alt-5"></i>
                                    </div>

                                </div>
                                <div class="card-block">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">名稱:</label>
                                        <div class="col-sm-4">
                                            <h3>{{ $attraction->name }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">地址:</label>
                                        <div class="col-sm-4">
                                            <h3>{{ $attraction->add }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">營業時間:</label>
                                        <div class="col-sm-4">
                                            <h3>{{ $attraction->business_time_start }} ~ {{ $attraction->business_time_end }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">公休:</label>
                                        <div class="col-sm-4">
                                            <h3>{{ $attraction->public_holiday }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">官網:</label>
                                        <div class="col-sm-4">
                                             <a href="{{  $attraction->offical }}"><h3>{{ $attraction->name }}</h3></a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">文章:</label>
                                        <div class="col-sm-4">
                                            <p>
                                            {{  $attraction->artice }}
                                            </p>
                                        </div>
                                    </div>

                                    @if(isset($Attraction_imgs ))
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <!-- 再編會發生Array是空值時，PHP還去抓Array_Key而導致 Undefined array key 0 的訊息，所以這邊需要使用 [@] 來作為可忽略的元件-->
                                            @if( @$Attraction_imgs[0])
                                            <div class="carousel-item active">
                                            <img src="{{ $Attraction_imgs[0]->path_img }}" class="d-block w-100" alt="{{ $Attraction_imgs[0]->name }}" width="100%">
                                            </div>
                                            @endif
                                        @foreach( $Attraction_imgs as $img )

                                            <div class="carousel-item ">
                                            <img src="{{ $img ->path_img }}" class="d-block w-100" alt="{{ $img ->name }}" width="100%">
                                            </div>
                                        @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    @endif

                                    @if($attraction_prices != null)
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>景點表格價位</h5>

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



                                                            @foreach($attraction_prices as $price)
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
                                    @endif



                                </div>




@endsection