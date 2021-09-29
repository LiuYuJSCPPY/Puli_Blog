@extends('Backadmin.layout')






@section('show')
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-header card">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="icofont icofont-layout bg-c-blue"></i>
                            <div class="d-inline">
                                <h4>景點</h4>
                                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
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
                                <li class="breadcrumb-item"><a href="">首頁</a>
                                </li>
                                <li class="breadcrumb-item"><a href="">景點</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="row">
                    <!-- card1 start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card widget-card-1">
                            <div class="card-block-small">
                                <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                                <span class="text-c-blue f-w-600">文章 space</span>
                                <h4>{{ $Attractions->count() }}</h4>
                                <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Get more space
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card1 end -->
                    <!-- card1 start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card widget-card-1">
                            <div class="card-block-small">
                                <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                                <span class="text-c-pink f-w-600">Revenue</span>
                                <h4>$23,589</h4>
                                <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Last 24 hours
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card1 end -->
                    <!-- card1 start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card widget-card-1">
                            <div class="card-block-small">
                                <i class="icofont icofont-warning-alt bg-c-green card1-icon"></i>
                                <span class="text-c-green f-w-600">Fixed issue</span>
                                <h4>45</h4>
                                <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Tracked via microsoft
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card1 end -->
                    <!-- card1 start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card widget-card-1">
                            <div class="card-block-small">
                                <i class="icofont icofont-social-twitter bg-c-yellow card1-icon"></i>
                                <span class="text-c-yellow f-w-600">Followers</span>
                                <h4>+562</h4>
                                <div>
                                    <span class="f-left m-t-10 text-muted">
                                        <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Just update
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card1 end -->
                    <!-- Statestics Start -->
                    <div class="col-md-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>景點所有資料</h5>
                            <a href="{{ route('admin.attraction.create') }}" class="btn btn-mat btn-primary ">+ 新增資料</a>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>名稱</th>
                                            <th>圖檔</th>
                                            <th>購買門票資料</th>
                                            <th>顯示資料</th>
                                            <th>

                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($Attractions as $attraction)
                                        <tr>


                                            <th scope="row">{{$attraction->id}}</th>
                                            <th>{{$attraction->name}}</th>

                                                @if( count($attraction->Attraction_img) ===0)
                                                 <th>上沒有圖案</th>
                                                @else
                                                   <th> 有 </th>
                                                @endif

                                                @if( count($attraction->Attraction_price) ===0)
                                                 <th>上沒有資料</th>
                                                @else
                                                   <th> 有 </th>
                                                @endif

                                                @if( $attraction->display ===1)
                                                    <th>顯示文章</th>
                                                @else
                                                    <th>未顯示文章</th>
                                                @endif
                                            <th>
                                                <a href="{{ route('admin.attraction.show',['attraction' => $attraction->id]) }}" class="btn btn-primary">查看</a>
                                                <a href="{{ route('admin.attraction.edit',['attraction' => $attraction->id ]) }}" class="btn btn-warning">更新</a>
                                                <a href="" class="btn btn-danger">刪除</a>
                                            </th>

                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- Email Sent End -->
                    </div>
                </div>
            </div>

            <div id="styleSelector">

            </div>
        </div>
    </div>



@endsection