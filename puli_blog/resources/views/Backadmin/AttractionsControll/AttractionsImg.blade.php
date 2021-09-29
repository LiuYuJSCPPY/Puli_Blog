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
                                <h4>景點圖片庫</h4>
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
                                <li class="breadcrumb-item"><a href="">景點圖片庫</a>
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
                            <h4>圖片庫</h4>
                                <div class="card-header-right">
                                <a href="{{ route('admin.AttractionImg.create',['post_id' => $post_id->id]) }}" class="btn btn-primary">+ 新增圖片</a>
                                </div>

                                </div>
                                <div class="card-block">
                                    <div class="album py-5 bg-light">
                                        <div class="container">

                                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                                @foreach($Imgs as $img)
                                                <div class="col-sm-6 col-lg-4">
                                                    <div class="card shadow-sm">
                                                    <img src="{{ $img->path_img }}" class="img-thumbnail" alt="..."  width="100%" height="225">
                                                        <div class="card-body">
                                                            <p class="card-text">圖片名稱: {{ $img->name }}</p>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div class="btn-group">
                                                                    <a href="{{ route('admin.AttractionImg.edit',['post_id' => $post_id->id , 'M_id' => $img->id]) }}" class="btn btn-primary">更新圖片</a>
                                                                </div>
                                                                <small class="text-muted">9 mins</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        </div>
                                    </div>



                                </div>





@endsection