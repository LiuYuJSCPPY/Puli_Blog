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
                                            <th>資料狀態</th>
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
                                                 <th>尚沒有圖案

                                                 </th>
                                                @else
                                                   <th> 有 </th>
                                                @endif

                                                @if( count($attraction->Attraction_price) ===0)
                                                 <th>尚沒有資料
                                                 </th>
                                                @else
                                                   <th> 有 </th>
                                                @endif

                                                @if( $attraction->display ===1)
                                                    <th>顯示文章</th>
                                                @else
                                                    <th>未顯示文章</th>
                                                @endif
                                            <th>
                                                <form action="{{route('admin.attraction.destroy',['attraction' => $attraction->id]) }}" method="post">
                                                <a href="{{ route('admin.attraction.show',['attraction' => $attraction->id]) }}" class="btn btn-primary">查看</a>
                                                <a href="{{ route('admin.attraction.edit',['attraction' => $attraction->id ]) }}" class="btn btn-warning">更新</a>

                                                    @csrf
                                                    @method("DELETE")
                                                    <input type="submit" value="刪除" class="btn btn-danger">
                                                </form>

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