<!DOCTYPE html>
<html lang="en">

<head>
    <title>後台管理系統</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="CodedThemes">
      <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="CodedThemes">
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
      <!-- Favicon icon -->
      <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css') }}">
  </head>

  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.html">
                            使用者: {{Auth::user()->name}}

                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <!-- <li class="header-notification">
                                <a href="#!">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-pink"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <!-- <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image"> -->
                                    <span>{{Auth::user()->name}}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                            <i class="ti-settings"></i> 設定
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="ti-lock"></i> 是否是管理者
                                            @if(Auth::user()->is_admin === 1)
                                            是管理者
                                            @else
                                            不是管理者
                                            @endif
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <i class="ti-layout-sidebar-left"></i></button>
                                {{ __('登出') }}
                            </x-dropdown-link>

                                        </form>

                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">


                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms"></div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="{{route('attractions.index')}}">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">部落格首頁</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('admin.attraction.index')}}">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">景點</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>


                            </ul>


                    </nav>
                    <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="icofont icofont-table bg-c-blue"></i>
                                                    <div class="d-inline">
                                                        <h4>景點價目表</h4>

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
                                                    <li class="breadcrumb-item"><a href="{{route('admin.Material',['id' => $attraction->id])}}">景點價目表</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                <!-- Page-body start -->
                                <div class="page-body">

                                    <!-- Hover table card start -->
                                    <div class="card">
                                        <div class="card-header">

                                            <h2 id="">景點名稱: {{$attraction->name}}</h2>

                                            <ul id="save_msgList"></ul>
                                            <div class="card-header-right">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AttractionModal" data-bs-whatever="@mdo">新增景點價格</button>
                                                <a href="{{ route('admin.attraction.index') }}" class="btn btn-warning"> 首頁 </a></div>
                                            </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <div id="success_message"></div>
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>票價名稱</th>
                                                            <th>票價</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Hover table card end -->
                                </div>

                                <!-- Page-body end -->
                            </div>
                        </div>
                        <!-- Main-body end -->

                    <!-- 新增 -->
                    <div class="modal fade" id="AttractionModal" tabindex="-1" aria-labelledby="AttractionModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="AttractionModalLabel">新增資料</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <form>

                                    <div class="mb-3">
                                        <label for="recipient-name"  class="col-form-label name">名稱:</label>
                                        <input type="text" id="name" class="form-control"  >
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name"  class="col-form-label name">價錢:</label>
                                        <input type="number" class="form-control" id="price">
                                    </div>
                                        <input type="hidden"  id="attraction_id" value="{{ $attraction->id }}">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary add_attraction" >Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 新增 -->


                    <!-- START更新 -->
                    <div class="modal fade" id="Update_AttractionModal" tabindex="-1" aria-labelledby="Update_AttractionModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"  id="Update_AttractionModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <form>

                                    <div class="mb-3">
                                        <label for="recipient-name"  class="col-form-label ">名稱:</label>
                                        <input type="text" id="update_name" class="form-control AttractionName"  >
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name"  class="col-form-label name">價錢:</label>
                                        <input type="number" class="form-control price" id="update_price">
                                    </div>
                                        <input type="hidden"  id="update_attraction_id" value="{{ $attraction->id }}" >
                                        <input type="hidden"  id="post_id" value=" " class="post_id">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary udpate_attraction" >Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END更新 -->


                    <!-- Start刪除 -->
                    <div class="modal fade" id="delete_AttractionModal" tabindex="-1" aria-labelledby="delete_AttractionModal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">刪除資料</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h4>你確定要刪除資料嗎?</h4>
                                    <input type="hidden" name="" id="delete_attraction" value="{{ $attraction->id }}">
                                    <input type="hidden" name="" id='delete_id'>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">返回</button>
                                    <button type="button" class="btn btn-primary delete_attraction_price">是的</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END刪除 -->

                </div>

            </div>
        </div>



<script type="text/javascript" src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/popper.js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('assets/js/modernizr/modernizr.js') }}"></script>
<!-- am chart -->
<script src="{{ asset('assets/pages/widget/amchart/amcharts.min.js') }}"></script>
<script src="{{ asset('assets/pages/widget/amchart/serial.min.js') }}"></script>
<!-- Todo js -->
<script type="text/javascript " src="{{ asset('assets/pages/todo/todo.js ') }}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ asset('assets/pages/dashboard/custom-dashboard.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
<script type="text/javascript " src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('assets/js/demo-12.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="https://cdn.staticfile.org/vue/2.4.2/vue.min.js"></script>
<script src="https://cdn.staticfile.org/vue-resource/1.5.1/vue-resource.min.js"></script>
<script src="https://cdn.staticfile.org/axios/0.18.0/axios.min.js"></script>

<script>

var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>



<script>

$(document).ready(function(){



    test();
    function test(){
        $.ajax({
            type : "GET",
            url:"/admin/Materials",
            dataType:"json",
            success :function(response){
                console.log(response.session)
                console.log(response.test);
                console.log(response.Material);
                $('tbody').html("");
                $.each( response.test ,function( key , item ){
                    $('tbody').append(
                        '<tr>\
                            <th scope="row">'+item.id +'</th>\
                            <td>'+item.name+'</td>\
                            <td>'+item.price +'</td>\
                            <td>\
                            <button type="button" value="' +item.id + '" class="btn btn-primary editbtn_attraction" data-bs-toggle="modal" data-bs-target="#Update_AttractionModal">更新</button>\
                            <button type="button" value="' +item.id + '" class="btn btn-danger delete_button" data-bs-toggle="modal" data-bs-target="#delete_AttractionModal" >刪除</button>\
                            </td>\
                        </tr>'
                    );
                });
            }
        });
    }



    // ajax新增按鈕
    $(document).on('click','.add_attraction',function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();

        var data = {
            'name' : $('#name').val(),
            'price' : $('#price').val(),
            'attractions_id' : $('#attraction_id').val(),
        }

        $.ajax({
            type : "POST",
            url:"/admin/Material/store",
            data : data,
            dataType:"json",
            success :function(response){
                if( response.status == 400 ){
                    $('#save_msgList').html("");
                    $('#save_msgList').addClass("alert alert-danger");
                    $.each(response.error,function(key,err_value){
                        $('#save_msgList').append('<li>'+ err_value +'</li>');
                    });
                    $('.add_attraction').text('Save');
                }else{
                    $('#save_msgList').html("");
                    $('#success_message').addClass('alert alert-success');
                    $('#success_message').text(response.message);
                    $('#AttractionModal').find('input #name').val('');
                    $('#AttractionModal').find('input #price').val('');
                    $('.add_attraction').text('Save');
                    $('#AttractionModal').modal('hide');
                    test();
                }
            }
        });

    });

    // ajax更新按鈕

    $(document).on('click','.editbtn_attraction',function(e){
     e.preventDefault();

     $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    var edit_id = $(this).val();

        $.ajax({
            type: "GET",
            url : "/admin/Material/edit/" + edit_id,
            success : function(response){
                console.log(response.attraction);
                $('.AttractionName').val(response.attraction.name);
                $('.price').val(response.attraction.price);
                $('.attraction_id').val(response.attraction.attractions_id);
                $('#btn-close').find('input').val("");
                $('.modal-title').text(response.attraction.name+"的資料更新");
                $('#post_id').val(response.attraction.id);
            }
        });
    });



    // 更新到server端
    $(document).on('click','.udpate_attraction' ,function(e){
        e.preventDefault();


        var attraction_id = $('#update_attraction_id').val();
        var id = $('.post_id').val();

        var UpdateData = {
            'name' : $('#update_name').val(),
            'price' :$('#update_price').val(),
            'attractions_id' :$('#update_attraction_id').val(),
        }
        console.log(UpdateData);



        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


        $.ajax({
            type: "PUT",
            url: "/admin/Material/update/"+attraction_id+"/"+id,
            data : UpdateData,
            dataType: "JSON",
            success : function(response){
                if (response.status == 400){

                    $('#save_msgList').html("");
                    $('#save_msgList').addClass("alert alert-danger");
                    $.each(response.error,function(key,err_value){
                        $('#save_msgList').append('<li>'+ err_value +'</li>');
                    });
                    $('.add_attraction').text('Save');

                }else{
                // console.log(response);

                $('#save_msgList').html('');
                $('#success_message').addClass('alert alert-success');
                $('#success_message').text(response.message);
                $('#Update_AttractionModal').find('input #update_name').val('');
                $('#Update_AttractionModal').find('input #update_price').val('');
                $('.udpate_attraction').text("UPDATE");
                $('#Update_AttractionModal').modal('hide');
                test();
            }
                }


        });

    })



    $(document).on('click','.delete_button',function(e){
        e.preventDefault(e);

        var this_id = $(this).val();

        $('#delete_id').val(this_id);
        $('#delete_AttractionModal').modal('show');

    });




    $(document).on('click','.delete_attraction_price',function(e){
        e.preventDefault(e);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var data = {
            'attractions_id' : $('#delete_attraction').val(),
            'id' : $('#delete_id').val(),
        }

        $.ajax({
            type: 'delete',
            data : data,
            url: "/admin/delete/" + data.attractions_id + "/Material/" + data.id,
            dataType : "JSON",
            success : function(response){
                if (response.status == 404) {
                    $('#success_message').addClass('alert alert-success');
                    $('#success_message').text(response.message);
                    $('.delete_attraction_price').text('YES Delete');
                }else{
                    $('#save_msgList').html("");
                    $('#success_message').addClass('alert alert-success');
                    $('#success_message').text(response.message);
                    $('.delete_attraction_price').text('確定');
                    $('#delete_AttractionModal').modal('hide');
                    test();
                }


            }
        });


    });






});



</script>

</body>

</html>
