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
    <title>埔里旅遊網</title>
    <!--
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href=" {{ asset('front_assets/images/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href=" {{ asset('front_assets/images/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href=" {{ asset('front_assets/images/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href=" {{ asset('front_assets/images/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href=" {{ asset('front_assets/images/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href=" {{ asset('front_assets/images/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href=" {{ asset('front_assets/images/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href=" {{ asset('front_assets/images/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href=" {{ asset('front_assets/images/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href=" {{ asset('front_assets/images/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href=" {{ asset('front_assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href=" {{ asset('front_assets/images/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href=" {{ asset('front_assets/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content=" {{ asset('front_assets/images/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!--
    Stylesheets
    =============================================

    -->
    <!-- Default stylesheets-->
    <link href=" {{ asset('front_assets/lib/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href=" {{ asset('front_assets/lib/animate.css/animate.css') }}" rel="stylesheet">
    <link href=" {{ asset('front_assets/lib/components-font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('front_assets/lib/et-line-font/et-line-font.css') }}" rel="stylesheet">
    <link href=" {{ asset('front_assets/lib/flexslider/flexslider.css') }}" rel="stylesheet">
    <link href=" {{ asset('front_assets/lib/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('front_assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('front_assets/lib/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">
    <link href=" {{ asset('front_assets/lib/simple-text-rotator/simpletextrotator.css') }}" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href=" {{ asset('front_assets/css/style.css') }}" rel="stylesheet">
    <link id="color-scheme" href=" {{ asset('front_assets/css/colors/default.css') }}" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="{{ route('attractions.index') }}">埔里旅遊網</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"><a  href="#" >首頁</a>

              </li>
              <li class="dropdown"><a href="#" >景點</a>

              </li>

              @if(!Auth::user())
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">未登入</a>
                <ul class="dropdown-menu" role="menu">
                  <li class="dropdown"><a href="{{ route('login') }}" >登入</a>
                  </li>
                </ul>
              </li>
              @else
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">{{ Auth::user()->name }}</a>

                <ul class="dropdown-menu" role="menu">
                  <li class="dropdown"><a  href="{{ route('admin.attraction.index') }}">後台管理台</a>

                  </li>
                  <li class="dropdown">
                    <form action="{{ route('logout') }}" method="post">
                      @csrf
                        <button class="dropdown-toggle" type="submit">登出</button >
                    </form>
                  </li>


                </ul>
              </li>
              @endif


            </ul>
          </div>
        </div>
      </nav>
      <div class="main">
        <section class="module bg-dark-60 blog-page-header" data-background=" {{ asset('front_assets/images/20210404_175054.jpg') }}">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">景點</h2>
                <div class="module-subtitle font-serif">去看看這個世界，並且讓世界的人知道我的美麗</div>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-8">
                <div class="row multi-columns-row post-columns">
                @foreach( $attractions as $attraction)
                  <div class="col-md-6 col-lg-6">
                    <div class="post">

                    @if( count($attraction->Attraction_img) != 0)

                      <div class="post-thumbnail"><a href="{{ route('attractions.show',['id' => $attraction->id] ) }}"><img width="760px" height="360px" src=" {{ $attraction->Attraction_img[0]->path_img }}" alt="{{ $attraction->Attraction_img[0]->name }}"/></a></div>
                    @else
                        <div class="post-thumbnail"><a href="{{ route('attractions.show',['id' => $attraction->id] ) }}"><img src=" {{ asset('front_assets/images/post-2.jpg') }}" alt="Blog-post Thumbnail"/></a></div>
                      @endif
                      <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">{{ $attraction->name }}</a></h2>
                        <div class="post-meta">官方網站:&nbsp;<a href="{{$attraction->offical}}">{{$attraction->name}}</a>&nbsp;| 公休: {{ $attraction->public_holiday }}
                        </div>
                      </div>
                      <div class="post-entry">
                        <p> 地址: {{ $attraction->add }}</p>
                      </div>
                      <div class="post-more"><a class="more-link" href="{{ route('attractions.show',['id' => $attraction->id ]) }}">Read more</a></div>
                    </div>
                  </div>
                @endforeach




                </div>
                <div class="pagination font-alt">
                   {{ $attractions->links() }}
                </div>
              </div>


              <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                <div class="widget">
                  <!-- <form role="form">
                    <div class="search-box">
                      <input class="form-control" type="text" placeholder="Search..."/>
                      <input type="hidden" id="" value="">
                      <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                  </form> -->
                </div>
                <div class="widget">
                  <h5 class="widget-title font-alt">分類</h5>
                  <ul class="icon-list">
                    <li><a href="#">景點 - {{$posts->count()}}</a></li>

                  </ul>
                </div>
                <div class="widget">
                  <h5 class="widget-title font-alt">新增的文章</h5>
                  <ul class="widget-posts">
                    @foreach( $post as $apost )
                    <li class="clearfix">

                      @if($apost->Attraction_img->count() != 0)
                        <div class="widget-posts-image"><a href="{{ route('attractions.show',['id' => $apost->id]) }}"><img src="{{ $apost->Attraction_img->first()->path_img }}" alt="Post Thumbnail"/></a></div>
                      @else
                        <div class="widget-posts-image"><a href="{{ route('attractions.show',['id' => $apost->id]) }}"><img src="{{ asset('front_assets/images/post-2.jpg') }}" alt="Post Thumbnail"/></a></div>
                      @endif
                      <div class="widget-posts-body">
                        <div class="widget-posts-title"><a href="{{ route('attractions.show',['id' => $apost->id]) }}">{{ $apost->name }}</a></div>
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
                <!-- <div class="widget">
                  <h5 class="widget-title font-alt">Text</h5>The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators.
                </div> -->
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
  </body>
</html>