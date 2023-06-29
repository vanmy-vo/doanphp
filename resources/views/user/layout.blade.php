<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>News - @yield('title')</title>

    <!-- ==== Favicons ==== -->
    <link rel="icon" href="{{asset('user/img/Tin-tuc-icon.png')}}" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700">

    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="{{asset('user/css/font-awesome.min.css')}}">
    
    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
    
    <!-- ==== Bar Rating Plugin ==== -->
    <link rel="stylesheet" href="{{asset('user/css/fontawesome-stars-o.min.css')}}">
    
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/custom.css')}}">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('user/css/responsive-style.css')}}">

    <!-- ==== Theme Color Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('user/css/colors/theme-color-1.css')}}" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="{{asset('user/css/custom.css')}}">
</head>
<body>
    <!-- Preloader Start -->
    {{-- <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div> --}}
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header class="header--section header--style-1">
            <!-- Header Topbar Start -->
            <div class="header--topbar bg--color-2">
                <div class="container">
                    <div class="float--left float--xs-none text-xs-center">
                        <!-- Header Topbar Info Start -->
                        <ul class="header--topbar-info nav">
                            <li>Website tin tức Việt Nam</li>
                        </ul>
                        <!-- Header Topbar Info End -->
                    </div>

                    <div class="float--right float--xs-none text-xs-center">
                        <!-- Header Topbar Action Start -->
                        {{-- <ul class="header--topbar-action nav">
                            <li><a href="login.html"><i class="fa fm fa-user-o"></i>Đăng ký/Đăng nhập</a></li>
                        </ul> --}}
                        <!-- Header Topbar Action End -->
                        
                        <!-- Header Topbar Language Start -->
                        {{-- <ul class="header--topbar-lang nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fm fa-language"></i>Tiếng Việt<i class="fa flm fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Tiếng Việt</a></li>
                                </ul>
                            </li>
                        </ul> --}}
                        <!-- Header Topbar Language End -->

                        <!-- Header Topbar Social Start -->
                        <ul class="header--topbar-social nav hidden-sm hidden-xxs">
                            <li><a href="#"><i class="fa fa-facebook"></i>acebook</a></li>
                        </ul>
                        <!-- Header Topbar Social End -->
                    </div>
                </div>
            </div>
            <!-- Header Topbar End -->

            <!-- Header Mainbar Start -->
            <div class="header--mainbar">
                <div class="container">
                    <!-- Header Logo Start -->
                    <div class="header--logo float--left float--sm-none text-sm-center">
                        <h1 class="h1">
                            <a href="{{asset('/')}}" class="btn-link">
                                <img src="{{asset('user/img/logo-tt.png')}}" alt="News Logo" width="227" height="50">
                                <span class="hidden">Logo tin tức</span>
                            </a>
                        </h1>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Ad Start -->
                    <div class="header--ad float--right float--sm-none hidden-xs">
                        <a href="#">
                            <img src="{{asset('user/img/ads-img//pepsi-ad.jpg')}}" alt="Advertisement">
                        </a>
                    </div>
                    <!-- Header Ad End -->
                </div>
            </div>
            <!-- Header Mainbar End -->

            <!-- Header Navbar Start -->
            <div class="header--navbar style--1 navbar bd--color-1 bg--color-1" data-trigger="sticky">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div id="headerNav" class="navbar-collapse collapse float--left">
                        <!-- Header Menu Links Start -->
                        <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
                            <li><a href="{{asset('/')}}">Trang chủ</a></li>
                            {{-- <li><a href="{{asset('type-category')}}">Giáo dục</a></li> --}}
                            {{-- <li class="dropdown">
                                <a href="{{asset('type-category')}}" class="dropdown-toggle" data-toggle="dropdown">Du Lịch<i class="fa flm fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="{{asset('type-category')}}" class="dropdown-toggle" data-toggle="dropdown">Địa điểm Việt Nam<i class="fa flm fa-angle-right"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{asset('category')}}">Đà Lạt</a></li>
                                            <li><a href="{{asset('category')}}">Sa Pa</a></li>
                                            <li><a href="{{asset('category')}}">Hậu Giang</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{asset('type-category')}}" class="dropdown-toggle" data-toggle="dropdown">Địa điểm quốc tế<i class="fa flm fa-angle-right"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{asset('category')}}">Thái Lan</a></li>
                                            <li><a href="{{asset('category')}}">Singapore</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li><a href="{{asset('type-category')}}">Giải Trí</a></li> --}}
                            {{-- <li><a href="{{asset('type-category')}}">Văn hóa</a></li> --}}
                            {{-- <li><a href="{{asset('type-category')}}">Công nghệ</a></li>                           --}}
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh mục<i class="fa flm fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="{{asset('type-category')}}" class="dropdown-toggle" data-toggle="dropdown">Thế giới<i class="fa flm fa-angle-right"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{asset('category')}}">Điểm nóng</a></li>
                                            <li><a href="{{asset('category')}}">Quân sự</a></li>
                                            <li><a href="{{asset('category')}}">Thế giới động vật</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{asset('type-category')}}" class="dropdown-toggle" data-toggle="dropdown">Bạn trẻ - cuộc sống<i class="fa flm fa-angle-right"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{asset('category')}}">Tình yêu - giới tính</a></li>
                                            <li><a href="{{asset('category')}}">Giới trẻ</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{asset('type-category')}}" class="dropdown-toggle" data-toggle="dropdown">Đời sống Showbiz<i class="fa flm fa-angle-right"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{asset('category')}}">Showbiz 24h</a></li>
                                            <li><a href="{{asset('category')}}">Sao Việt</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{asset('type-category')}}" class="dropdown-toggle" data-toggle="dropdown">Ô tô<i class="fa flm fa-angle-right"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{asset('category')}}">Tin tức ô tô</a></li>
                                            <li><a href="{{asset('category')}}">Bảng giá xe</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{asset('type-category')}}" class="dropdown-toggle" data-toggle="dropdown">Bóng đá<i class="fa flm fa-angle-right"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{asset('category')}}">Bóng đá Việt Nam</a></li>
                                            <li><a href="{{asset('category')}}">Lịch thi đấu</a></li>
                                            <li><a href="{{asset('category')}}">Giải ngoại hạng anh</a></li>
                                            <li><a href="{{asset('category')}}">Giải C1</a></li>
                                            <li><a href="{{asset('category')}}">Bóng đá quốc tế</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{route('contact')}}">Liên hệ</a></li>      
                        </ul>
                        <!-- Header Menu Links End -->
                    </div>

                    <!-- Header Search Form Start -->
                    <form action="#" class="header--search-form float--right" data-form="validate">
                        <input type="search" name="search" placeholder="Tìm kiếm..." class="header--search-control form-control" required>

                        <button type="submit" class="header--search-btn btn"><i class="header--search-icon fa fa-search"></i></button>
                    </form>
                    <!-- Header Search Form End -->
                </div>
            </div>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Section End -->

        <!-- Posts Filter Bar Start -->
        {{-- <div class="posts--filter-bar style--1 hidden-xs">
            <div class="container">
                <ul class="nav">
                    <li>
                        <a href="#">
                            <i class="fa fa-star-o"></i>
                            <span>Tin mới</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-heart-o"></i>
                            <span>Phổ biến nhất</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-fire"></i>
                            <span>Tin nổi bật</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-flash"></i>
                            <span>Xu hướng</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-eye"></i>
                            <span>Xem nhiều nhất</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div> --}}
        <!-- Posts Filter Bar End -->

        @yield('web_content')
        
        <!-- Footer Section Start -->
        <footer class="footer--section">
            <!-- Footer Widgets Start -->
            <div class="footer--widgets pd--30-0 bg--color-2">
                <div class="container">
                    <div class="row AdjustRow">
                        <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Giới thiệu</h2>
                                </div>

                                <!-- About Widget Start -->
                                <div class="about--widget">
                                    <div class="content">
                                        <p>Website Tin Tức Việt Nam</p>
                                    </div>

                                    <div class="action">
                                        <a href="#" class="btn-link">Xem thêm<i class="fa flm fa-angle-double-right"></i></a>
                                    </div>

                                    <ul class="nav">
                                        <li>
                                            <i class="fa fa-map"></i>
                                            <a href="">TP.Hồ Chí Minh</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o"></i>
                                            <a href="">Demo@caothang.edu.vn</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <a href="">+123 456 (789)</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- About Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Danh Mục</h2>
                                </div>

                                <!-- Links Widget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <li><a href="#" class="fa-angle-right">Đời sống</a></li>
                                        <li><a href="#" class="fa-angle-right">Quốc Tê</a></li>
                                        <li><a href="#" class="fa-angle-right">Thể Thao</a></li>
                                        <li><a href="#" class="fa-angle-right">Giải Trí</a></li>
                                        <li><a href="#" class="fa-angle-right">Công Nghệ</a></li>
                                        <li><a href="#" class="fa-angle-right">Kinh Tế</a></li>
                                        <li><a href="#" class="fa-angle-right">Văn Hóa</a></li>
                                    </ul>
                                </div>
                                <!-- Links Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Liên hệ quảng cáo</h2>
                                </div>

                                <!-- Links Widget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <li><a href="#" class="fa-angle-right"> 0945.12.34.56</a></li>
                                        <li><a href="#" class="fa-angle-right">Email: ads@caothang.edu.vn</a></li>
                                    </ul>
                                </div>
                                <!-- Links Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>
                        <div class="col-md-3 col-xs-6 col-xxs-12 ptop--30 pbottom--30">
                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Tin tức</h2>
                                </div>

                                <!-- Links Widget Start -->
                                <div class="links--widget">
                                    <ul class="nav">
                                        <li><a href="#" class="fa-angle-right">Chính trị - Xã hội</a></li>
                                        <li><a href="#" class="fa-angle-right">Tin TP.Hồ Chí Minh</a></li>
                                    </ul>
                                </div>
                                <!-- Links Widget End -->
                            </div>
                            <!-- Widget End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Widgets End -->

            <!-- Footer Copyright Start -->
            <div class="footer--copyright bg--color-3">
                <div class="social--bg bg--color-1"></div>

                <div class="container">
                    <p class="text float--left">&copy; 2023 <a href="#">Website Tin Tức</a></p>

                    <ul class="nav social float--right">
                        <li><a href="#"><i class="fa fa-facebook"></i>acebook</a></li>
                    </ul>

                    <ul class="nav links float--right">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Hỗ trợ</a></li>
                    </ul>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </footer>
        <!-- Footer Section End -->
    </div>
    <!-- Wrapper End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#"><i class="fa fa-angle-double-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

    <!-- ==== jQuery Library ==== -->
    <script src="{{asset('user/js/jquery-3.2.1.min.js')}}"></script>

    <!-- ==== Bootstrap Framework ==== -->
    <script src="{{asset('user/js/bootstrap.min.js')}}"></script>

    <!-- ==== StickyJS Plugin ==== -->
    <script src="{{asset('user/js/jquery.sticky.min.js')}}"></script>

    <!-- ==== HoverIntent Plugin ==== -->
    <script src="{{asset('user/js/jquery.hoverIntent.min.js')}}"></script>

    <!-- ==== Marquee Plugin ==== -->
    <script src="{{asset('user/js/jquery.marquee.min.js')}}"></script>

    <!-- ==== Validation Plugin ==== -->
    <script src="{{asset('user/js/jquery.validate.min.js')}}"></script>

    <!-- ==== Isotope Plugin ==== -->
    <script src="{{asset('user/js/isotope.min.js')}}"></script>

    <!-- ==== Resize Sensor Plugin ==== -->
    <script src="{{asset('user/js/resizesensor.min.js')}}"></script>

    <!-- ==== Sticky Sidebar Plugin ==== -->
    <script src="{{asset('user/js/theia-sticky-sidebar.min.js')}}"></script>

    <!-- ==== Zoom Plugin ==== -->
    <script src="{{asset('user/js/jquery.zoom.min.js')}}"></script>

    <!-- ==== Bar Rating Plugin ==== -->
    <script src="{{asset('user/js/jquery.barrating.min.js')}}"></script>

    <!-- ==== Countdown Plugin ==== -->
    <script src="{{asset('user/js/jquery.countdown.min.js')}}"></script>

    <!-- ==== RetinaJS Plugin ==== -->
    <script src="{{asset('user/js/retina.min.js')}}"></script>

    <!-- ==== Main JavaScript ==== -->
    <script src="{{asset('user/js/main.js')}}"></script>
    <script src="{{asset('user/js/custom.js')}}"></script>
</body>
</html>
