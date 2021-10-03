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
                                <h4>景點基本資料</h4>
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
                                <li class="breadcrumb-item"><a href="{{ route('admin.attraction.create')}}">景點基本資料</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->

            <!-- Page body start -->
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

                                    <form method="post" action="{{ route('admin.attraction.store') }}">
                                        @csrf
                                        <input type="hidden" name="post_categroy_id" value="1">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label @error('title') is-invalid @enderror" >名稱:</label>
                                            <div class="col-sm-4">
                                                <input type="text"  name="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">開始營業時間:</label>
                                            <div class="col-sm-3">
                                                <input type="time" name="business_time_start" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">結束營業時間:</label>
                                            <div class="col-sm-3">
                                                <input type="time" name="business_time_end" class="form-control">
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">公休:</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="public_holiday" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label @error('title') is-invalid @enderror">地址:</label>
                                            <div class="col-sm-6">

                                                <input type="text" name="add" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">官網:</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="offical" class="form-control">
                                            </div>
                                        </div>


                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">文章</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="5" cols="5" name="artice" class="form-control" placeholder="Default textarea"></textarea>
                                                </div>
                                            </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">顯示:</label>

                                            <div class="col-sm-7">
                                                <input type="radio" name="display" id="" value="0">false
                                                <input type="radio" name="display" id="" value="1">true
                                            </div>
                                        </div>

                                        <!-- 下次再完成 -->
                                            <!-- <div class="card">
                                                <div class="card-header">
                                                     新增功能
                                                    <div class="card-header-left">
                                                        <button class="btn btn-grd-primary" id="addoptions">+ 新增細項</button>
                                                    </div>
                                                     在新增的功能之外刪除按鈕
                                                    <div class="card-block">
                                                        <div class="form-group row">
                                                            <label class="col-sm-1 col-form-label">名稱:</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text"  name="name" class="form-control">
                                                                </div>
                                                            <label class="col-sm-1 col-form-label">價錢:</label>
                                                                <div class="col-sm-3">
                                                                    <input type="text"  name="name" class="form-control">
                                                                </div>

                                                                <div class="col-sm-3">
                                                                     <button class="btn btn-mat btn-danger ">刪除</button>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

                                            <button class="btn btn-mat btn-primary " type="submit">送出</button>
                                            <button class="btn btn-mat btn-danger " type="reset" >重新填寫</button>
                                        </form>
                                    </div>
                                </div>
                                        <!-- Basic Form Inputs card end -->

                                                    </div>
                                                </div>
                                                <!-- Page body end -->
                                            </div>
                                        </div>
                                        <!-- Main-body end -->
                                        @error('title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div id="styleSelector">

                                        </div>
                                    </div>
@endsection


<!--
@section('tooljs')

<script>
    new Vue({
        el:'#'
    })

    var add = document.getElementById('addoptions');



</script>



@endsection -->

