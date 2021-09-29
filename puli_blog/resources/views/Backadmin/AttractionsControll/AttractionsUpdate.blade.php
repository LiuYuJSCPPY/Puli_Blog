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
                                <li class="breadcrumb-item"><a href="{{ route('admin.attraction.index')}}">景點文章</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.attractionMaterial.create',['post_id' =>  $attractions->id  ])}}">景點基本資料</a>
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
                            <h4>{{ $attractions->name }}更改價錢資料</h4>
                                <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

                                    <div class="card-header-right">
                                        <i class="icofont icofont-spinner-alt-5"></i>
                                    </div>

                                </div>
                                <div class="card-block">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">名稱:</label>
                                        <div class="col-sm-4">
                                            <h3>{{ $attraction_M->name }}</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">價錢:</label>
                                        <div class="col-sm-4">
                                            <h3>{{ $attraction_M->price }}</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-block">

                                    <form method="post" action="{{ route('admin.attractionMaterial.update',['post_id' => $attractions->id,'M_id' => $attraction_M]) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">名稱:</label>
                                            <div class="col-sm-4">
                                                <input type="text"  name="name" class="form-control" value="{{ $attraction_M->name }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">價錢:</label>
                                            <div class="col-sm-4">
                                                <input type="number" name="price" class="form-control" value="{{ $attraction_M->price }}" >
                                            </div>
                                        </div>
                                        @if ($message = Session::get('test'))
                                        <div class="alert alert-success">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @endif
                                            <button class="btn btn-mat btn-primary " type="submit">送出</button>
                                            <button class="btn btn-mat btn-danger " type="reset" >重新填寫</button>
                                            <a class="btn btn-mat btn-success " href="{{route('admin.attraction.show',['attraction' => $attractions->id])}}" > 返回</a>


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
                                <h2>景點票目前 {{$attractions_price->count()}} 筆</h2>

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
                                                @foreach( $attractions_price as $price)
                                                <tr>
                                                    <th scope="row">{{ $price->id }}</th>
                                                    <td>{{ $price->name }}</td>
                                                    <td>{{ $price->price }}</td>
                                                    <td><a href="{{ route('admin.attractionMaterial.edit',['post_id' => $price->Attractions->id , 'M_id' => $price->id]) }}"> 更新</a> </td>
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
