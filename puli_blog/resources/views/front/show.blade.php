<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    Document Title
    =============================================
    -->
    <title>Titan | Multipurpose HTML5 Template</title>
    <!--
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('front_assets/images/favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('front_assets/images/favicons/apple-icon-60x60.png')}} ">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('front_assets/images/favicons/apple-icon-72x72.png')}} ">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('front_assets/images/favicons/apple-icon-76x76.png')}} ">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('front_assets/images/favicons/apple-icon-114x114.png')}} ">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('front_assets/images/favicons/apple-icon-120x120.png')}} ">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('front_assets/images/favicons/apple-icon-144x144.png')}} ">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('front_assets/images/favicons/apple-icon-152x152.png')}} ">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front_assets/images/favicons/apple-icon-180x180.png')}} ">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('front_assets/images/favicons/android-icon-192x192.png ')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset(' front_assets/images/favicons/favicon-16x16.png' )}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset(' front_assets/images/favicons/favicon-96x96.png' )}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset(' front_assets/images/favicons/favicon-32x32.png' )}}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="front_assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--
    Stylesheets
    =============================================

    -->
    <!-- Default stylesheets-->
    <link href="{{ asset('front_assets/lib/bootstrap/dist/css/bootstrap.min.css' )}}" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{ asset('front_assets/lib/animate.css/animate.css' )}}" rel="stylesheet">
    <link href="{{ asset('front_assets/lib/components-font-awesome/css/font-awesome.min.css' )}}" rel="stylesheet">
    <link href="{{ asset('front_assets/lib/et-line-font/et-line-font.css' )}}" rel="stylesheet">
    <link href="{{ asset('front_assets/lib/flexslider/flexslider.css' )}}" rel="stylesheet">
    <link href="{{ asset('front_assets/lib/owl.carousel/dist/assets/owl.carousel.min.cs' )}}s" rel="stylesheet">
    <link href="{{ asset('front_assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css' )}}" rel="stylesheet">
    <link href="{{ asset('front_assets/lib/magnific-popup/dist/magnific-popup.css' )}}" rel="stylesheet">
    <link href="{{ asset('front_assets/lib/simple-text-rotator/simpletextrotator.css' )}}" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="{{ asset('front_assets/css/style.css' )}}" rel="stylesheet">
    <link id="color-scheme" href="{{ asset('front_assets/css/colors/default.css' )}}" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">Titan</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Home</a>
                <ul class="dropdown-menu">
                  <li><a href="index_mp_fullscreen_video_background.html">Default</a></li>
                  <li><a href="index_op_fullscreen_gradient_overlay.html">One Page</a></li>
                  <li><a href="index_agency.html">Agency</a></li>
                  <li><a href="index_portfolio.html">Portfolio</a></li>
                  <li><a href="index_restaurant.html">Restaurant</a></li>
                  <li><a href="index_finance.html">Finance</a></li>
                  <li><a href="index_landing.html">Landing Page</a></li>
                  <li><a href="index_photography.html">Photography</a></li>
                  <li><a href="index_shop.html">Shop</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Headers</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Static Image Header</a>
                    <ul class="dropdown-menu">
                      <li><a href="index_mp_fullscreen_static.html">Fulscreen</a></li>
                      <li><a href="index_mp_classic_static.html">Classic</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Flexslider Header</a>
                    <ul class="dropdown-menu">
                      <li><a href="index_mp_fullscreen_flexslider.html">Fulscreen</a></li>
                      <li><a href="index_mp_classic_flexslider.html">Classic</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Video Background Header</a>
                    <ul class="dropdown-menu">
                      <li><a href="index_mp_fullscreen_video_background.html">Fulscreen</a></li>
                      <li><a href="index_mp_classic_video_background.html">Classic</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Text Rotator Header</a>
                    <ul class="dropdown-menu">
                      <li><a href="index_mp_fullscreen_text_rotator.html">Fulscreen</a></li>
                      <li><a href="index_mp_classic_text_rotator.html">Classic</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Gradient Overlay Header</a>
                    <ul class="dropdown-menu">
                      <li><a href="index_mp_fullscreen_gradient_overlay.html">Fulscreen</a></li>
                      <li><a href="index_mp_classic_gradient_overlay.html">Classic</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" href="documentation.html" data-toggle="dropdown">Documentation</a>
                <ul class="dropdown-menu">
                  <li><a href="documentation.html#contact">Contact Form</a></li>
                  <li><a href="documentation.html#reservation">Reservation Form</a></li>
                  <li><a href="documentation.html#mailchimp">Mailchimp</a></li>
                  <li><a href="documentation.html#gmap">Google Map</a></li>
                  <li><a href="documentation.html#plugin">Plugins</a></li>
                  <li><a href="documentation.html#changelog">Changelog</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="main">
        <section class="module-small">
          <div class="container">
            <div class="row">
              <div class="col-sm-8">
                <div class="post">

                  @if (@$attraction->Attraction_img)
                    <div class="post-thumbnail"><img src="{{ @$attraction->Attraction_img->first()->path_img }}" alt="avatar"/></div>
                    @else
                    <div class="post-thumbnail"><img src="{{ asset('front_assets/images/post-4.jpg') }}" alt="Blog Featured Image"/></div>
                    @endif

                  <div class="post-header font-alt">
                    <h1 class="post-title">{{ $attraction->name }}</h1>
                    <div class="post-meta">By&nbsp;<a href="#">{{ @$attraction->user->name }}</a>| 23 November | 3 Comments | <a href="#">Photography, </a><a href="#">Web Design</a>
                    </div>
                  </div>
                  <div class="post-entry">
                    <p style="font-size:22px">{{ $attraction->artice }}</p>
                  </div>
                </div>
                <div class="price">
                <h4 class="comment-title font-alt">景點價格</h4>
                <div class="menu col-sm-12">
                @foreach($attraction->Attraction_price as $attraction_price  )
                  <div class="menu col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                        <h4 class="menu-title font-alt">{{ $attraction_price->name }}</h4>
                        <!-- <div class="menu-detail font-serif">Mushroom / Veggie / White Sources</div> -->
                        </div>
                        <div class="col-sm-4 menu-price-detail">
                        <h4 class="menu-price font-alt">TW  {{ $attraction_price->price }}</h4>
                        </div>
                    </div>
                  </div>
                @endforeach
                </div>


                </div>

              <!-- START留言 -->
                <div class="comments">
                  <h4 class="comment-title font-alt">總共留言 {{ $TotalComment->count() }}</h4>


                  <div class="comment clearfix">
                    <div class="comment-avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/ryanbattles/128.jpg" alt="avatar"/></div>
                    <div class="comment-content clearfix">
                      <div class="comment-author font-alt"><a href="#">John Doe</a></div>
                      <div class="comment-body">
                        <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
                      </div>
                      <div class="comment-meta font-alt">Today, 14:55 - <a href="#">Reply</a>
                      </div>
                    </div>

                    <div class="comment clearfix">
                      <div class="comment-avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/draganbabic/128.jpg" alt="avatar"/></div>
                      <div class="comment-content clearfix">
                        <div class="comment-author font-alt"><a href="#">Mark Stone</a></div>
                        <div class="comment-body">
                          <p>Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
                        </div>
                        <div class="comment-meta font-alt">Today, 15:34 - <a href="#">Reply</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="comment clearfix">
                    <div class="comment-avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/pixeliris/128.jpg" alt="avatar"/></div>
                    <div class="comment-content clearfix">
                      <div class="comment-author font-alt"><a href="#">Andy</a></div>
                      <div class="comment-body">
                        <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
                      </div>
                      <div class="comment-meta font-alt">Today, 14:59 - <a href="#">Reply</a>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="comment-form">
                  <h4 class="comment-form-title font-alt">新增公開留言:</h4>
                    <div class="form-group">
                      <textarea class="form-control" id="comment" name="comment" rows="4" placeholder="Comment"></textarea>
                      <input type="hidden" id="post_id" value="{{ $attraction->id }}">
                      <input type="hidden" id="categroy" value="1">
                    </div>
                    <button class="btn btn-round btn-d addbtn" >Post comment</button>
                </div>
              </div>
              <!-- END留言 -->


              <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                <div class="widget">
                  <form role="form">
                    <div class="search-box">
                      <input class="form-control" type="text" placeholder="Search..."/>
                      <input type="hidden" id="" value="">
                      <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                  </form>
                </div>
                <div class="widget">
                  <h5 class="widget-title font-alt">Blog Categories</h5>
                  <ul class="icon-list">
                    <li><a href="#">景點 - 7</a></li>
                    <li><a href="#">小吃店 - 3</a></li>
                    <li><a href="#">旅館 - 12</a></li>
                    <li><a href="#">Marketing - 1</a></li>
                    <li><a href="#">Wordpress - 16</a></li>
                  </ul>
                </div>
                <div class="widget">
                  <h5 class="widget-title font-alt">新增的文章</h5>
                  <ul class="widget-posts">
                    @foreach( $Atraction as $post )
                    <li class="clearfix">
                      @if(@$post->Attraction_img)
                      <div class="widget-posts-image"><a href="#"><img src="{{ @$post->Attraction_img->path_img }}" alt="Post Thumbnail"/></a></div>
                      @else
                      <div class="widget-posts-image"><a href="#"><img src="" alt="Post Thumbnail"/></a></div>
                      @endif
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">{{ $post->name }}</a></div>
                        <div class="widget-posts-meta">23 january</div>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>
                <!-- <div class="widget">
                  <h5 class="widget-title font-alt">Tag</h5>
                  <div class="tags font-serif"><a href="#" rel="tag">Blog</a><a href="#" rel="tag">Photo</a><a href="#" rel="tag">Video</a><a href="#" rel="tag">Image</a><a href="#" rel="tag">Minimal</a><a href="#" rel="tag">Post</a><a href="#" rel="tag">Theme</a><a href="#" rel="tag">Ideas</a><a href="#" rel="tag">Tags</a><a href="#" rel="tag">Bootstrap</a><a href="#" rel="tag">Popular</a><a href="#" rel="tag">English</a>
                  </div>
                </div> -->
                <div class="widget">
                  <h5 class="widget-title font-alt">Text</h5>The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.
                </div>
                <!-- <div class="widget">
                  <h5 class="widget-title font-alt">Recent Comments</h5>
                  <ul class="icon-list">
                    <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                    <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                    <li>Andy on <a href="#">Eco bag Mockup</a></li>
                    <li>Jack on <a href="#">Bottle Mockup</a></li>
                    <li>Mark on <a href="#">Our trip to the Alps</a></li>
                  </ul>
                </div> -->
              </div>
            </div>
          </div>
        </section>
        <!-- <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">About Titan</h5>
                  <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                  <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                  <p>Email:<a href="#">somecompany@example.com</a></p>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Recent Comments</h5>
                  <ul class="icon-list">
                    <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                    <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                    <li>Andy on <a href="#">Eco bag Mockup</a></li>
                    <li>Jack on <a href="#">Bottle Mockup</a></li>
                    <li>Mark on <a href="#">Our trip to the Alps</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Blog Categories</h5>
                  <ul class="icon-list">
                    <li><a href="#">Photography - 7</a></li>
                    <li><a href="#">Web Design - 3</a></li>
                    <li><a href="#">Illustration - 12</a></li>
                    <li><a href="#">Marketing - 1</a></li>
                    <li><a href="#">Wordpress - 16</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Popular Posts</h5>
                  <ul class="widget-posts">
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="front_assets/images/rp-1.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                        <div class="widget-posts-meta">23 january</div>
                      </div>
                    </li>
                    <li class="clearfix">
                      <div class="widget-posts-image"><a href="#"><img src="front_assets/images/rp-2.jpg" alt="Post Thumbnail"/></a></div>
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                        <div class="widget-posts-meta">15 February</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">TitaN</a>, All Rights Reserved</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div> -->
    </main>
    <!--
    JavaScripts
    =============================================
    -->
    <script src=" {{ asset('front_assets/lib/jquery/dist/jquery.js') }}"></script>
    <script src=" {{ asset('front_assets/lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src=" {{ asset('front_assets/lib/wow/dist/wow.js') }}"></script>
    <script src=" {{ asset('front_assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js') }}"></script>
    <script src=" {{ asset('front_assets/lib/isotope/dist/isotope.pkgd.js') }}"></script>
    <script src=" {{ asset('front_assets/lib/imagesloaded/imagesloaded.pkgd.js') }}"></script>
    <script src=" {{ asset('front_assets/lib/flexslider/jquery.flexslider.js') }}"></script>
    <script src=" {{ asset('front_assets/lib/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src=" {{ asset('front_assets/lib/smoothscroll.js') }}"></script>
    <script src=" {{ asset('front_assets/lib/magnific-popup/dist/jquery.magnific-popup.js') }}"></script>
    <script src=" {{ asset('front_assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js') }}"></script>
    <script src=" {{ asset('front_assets/js/plugins.js') }}"></script>
    <script src=" {{ asset('front_assets/js/main.js') }}"></script>

    <Script>
      $(document).ready(function(){

        GetComment();
        function GetComment(){
          $.ajax({
            type: "GET",
            url : "/comment/categroy/1/post/{{$attraction->id}}",
            success : function(response){
              console.log(response);

              $.each(response.PostComment,function(key,item){
                $(".comments").append(
                  '<div class="comment clearfix">\
                    <div class="comment-avatar"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/pixeliris/128.jpg" alt="avatar"/></div>\
                    <div class="comment-content clearfix">\
                      <div class="comment-author font-alt"><a href="#">'+item.name+'</a></div>\
                      <div class="comment-body">\
                        <p>'+item.text+'</p>\
                      </div>\
                      <div class="comment-meta font-alt">'+ item.created_at+' - <a href="#">Reply</a>\
                      </div>\
                    </div>\
                  </div>'
                );
                console.log(item.name);
              });
            }
          });

        }




        $('.addbtn').on('click',function(e){

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          e.preventDefault();

          var data = {
            'text' : $('#comment').val(),
            'post_id' :  $('#post_id').val(),
            'categroy' : $('#categroy').val(),
          }
          $.ajax({
            type : "POST",
            data : data,
            dataType : "JSON",
            url : "/comment/categroy/1/post/{{$attraction->id}}",
            success : function(response){

              if( response.status == 400 ){
                $('.form-group').append('<div class="alert alert-danger" role="alert">\
                  <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button><i class="fa fa-coffee"></i><strong>' +response.error + '!</strong> 您尚未登入\
                </div>');
                console.log(response.error);
              }else{
                $(".comments").html("");
                $('.form-group').find('input').val("");
                $('.form-group').find('textarea').val("");
                GetComment();
              }
            }
          });

          console.log(data);
        });




      });

    </Script>
  </body>
</html>