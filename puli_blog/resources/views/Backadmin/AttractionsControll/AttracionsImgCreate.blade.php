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
                                </div>

                                <div class="card-block">

                                    <form method="post" action="{{ route('attractionImg.Store',['post_id' => $attraction->id]) }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">名稱:</label>
                                            <div class="col-sm-4">
                                                <input type="text"  name="name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">檔案:</label>
                                            <div class="col-sm-4">
                                                <input type="file" name="imgpath" id="">

                                            </div>
                                        </div>

                                            <button class="btn btn-mat btn-primary " type="submit">送出</button>
                                            <button class="btn btn-mat btn-danger " type="reset" >重新填寫</button>
                                            <a class="btn btn-mat btn-success " href="" >下一步</a>

                                        </form>
                                    </div>
                                    @if ($message = Session::get('test'))
                                        <div class="alert alert-success">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif

                                </div>



@endsection