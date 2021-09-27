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
                                <h4>景點票資料</h4>
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
                                <li class="breadcrumb-item"><a href="{{ route('admin.index')}}">景點文章</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.create')}}">景點基本資料</a>
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
                                            <h3>{{ $attractions->name }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">地址:</label>
                                        <div class="col-sm-4">
                                            <h3>{{ $attractions->add }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">營業時間:</label>
                                        <div class="col-sm-4">
                                            <h3>{{ $attractions->business_time_start }} ~ {{ $attractions->business_time_end }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">公休:</label>
                                        <div class="col-sm-4">
                                            <h3>{{ $attractions->public_holiday }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">官網:</label>
                                        <div class="col-sm-4">
                                             <a href="{{  $attractions->offical }}"><h3>{{ $attractions->name }}</h3></a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">文章:</label>
                                        <div class="col-sm-4">
                                            <p>
                                            {{  $attractions->artice }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-block">

                                    <form method="post" action="{{ route('attraction.store',['post_id' => $attractions->id]) }}">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">名稱:</label>
                                            <div class="col-sm-4">
                                                <input type="text"  name="name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">價錢:</label>
                                            <div class="col-sm-4">
                                                <input type="number"  name="price" class="form-control">
                                            </div>
                                        </div>

                                            <button class="btn btn-mat btn-primary " type="submit">送出</button>
                                            <button class="btn btn-mat btn-danger " type="reset" >重新填寫</button>
                                            <a class="btn btn-mat btn-success " href="{{route('AttractionImg.create',['post_id' => $attractions->id])}}" >下一步</a>

                                        </form>
                                    </div>
                                </div>


            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Form Inputs card start -->
                        <div class="card">
                            <div class="card-header">
                                <h2>景點票目前 {{$attractions->Attraction_price->count()}} 筆</h2>

                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left "></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
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
                                            @if (count($attractions_price) != 0)
                                                @foreach( $attractions_price as $attraction)
                                                <tr>
                                                    <th scope="row">{{ $attraction->id }}</th>
                                                    <td>{{ $attraction->name }}</td>
                                                    <td>{{ $attraction->price }}</td>
                                                </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <th>目前沒有資料</th>
                                                </tr>
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection