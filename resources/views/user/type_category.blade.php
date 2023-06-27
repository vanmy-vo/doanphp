@extends('user.layout')
@section('title','Loại tin tức')

@section('web_content')
    <!-- Main Breadcrumb Start -->
    <div class="main--breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="home-1.html" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
                <li class="active"><span>Du lịch</span></li>
            </ul>
        </div>
    </div>
    <!-- Main Breadcrumb End -->

    <!-- Main Content Section Start -->
    <div class="main-content--section pbottom--30">
        <div class="container">

            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="row">
                            <!-- left Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Địa điểm quốc tế</h2>
                                    <div class="nav">
                                        <a href="#" class="btn-link">Xem thêm</a>
                                    </div>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img src="{{asset('user/img/national-img/diplomacy-01.jpg')}}" alt=""></a>
                                                    <a href="#" class="cat">Diplomatic</a>
                                                    {{-- <a href="#" class="icon"><i class="fa fa-flash"></i></a> --}}

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="#" class="btn-link">On the other hand, we denounce with righteous indignation and dislike demoralized</a></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="post--content">
                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos mollitia animi, id est laborum et dolorum fuga.</p>
                                                </div>

                                                <div class="post--action">
                                                    <a href="news-single-v1.html">Continue Reading... </a>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img src="{{asset('user/img/national-img/diplomacy-02.jpg')}}" alt=""></a>
                                                    <a href="#" class="cat">Talk-Show</a>
                                                    {{-- <a href="#" class="icon"><i class="fa fa-flash"></i></a> --}}

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html" class="btn-link">On the other hand, we denounce with righteous indignation and dislike demoralized</a></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="post--content">
                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos mollitia animi, id est laborum et dolorum fuga.</p>
                                                </div>

                                                <div class="post--action">
                                                    <a href="news-single-v1.html">Continue Reading... </a>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                    </ul>

                                    <!-- Preloader Start -->
                                    {{-- <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div> --}}
                                    <!-- Preloader End -->
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- left End -->

                            <!-- right Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Địa điểm Việt Nam</h2>
                                    <div class="nav">
                                        <a href="#" class="btn-link">Xem thêm</a>
                                    </div>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img src="{{asset('user/img/national-img/administration-01.jpg')}}" alt=""></a>
                                                    <a href="#" class="cat">Command</a>
                                                    {{-- <a href="#" class="icon"><i class="fa fa-flash"></i></a> --}}

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html" class="btn-link">On the other hand, we denounce with righteous indignation and dislike demoralized</a></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="post--content">
                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos mollitia animi, id est laborum et dolorum fuga.</p>
                                                </div>

                                                <div class="post--action">
                                                    <a href="news-single-v1.html">Continue Reading... </a>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img src="{{asset('user/img/national-img/administration-02.jpg')}}" alt=""></a>
                                                    <a href="#" class="cat">Regulation</a>
                                                    {{-- <a href="#" class="icon"><i class="fa fa-flash"></i></a> --}}

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Famous</a></li>
                                                            <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html" class="btn-link">On the other hand, we denounce with righteous indignation and dislike demoralized</a></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="post--content">
                                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos mollitia animi, id est laborum et dolorum fuga.</p>
                                                </div>

                                                <div class="post--action">
                                                    <a href="news-single-v1.html">Continue Reading... </a>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                    </ul>

                                    <!-- Preloader Start -->
                                    {{-- <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div> --}}
                                    <!-- Preloader End -->
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- right End -->
                        </div>
                    </div>
                </div>
                <!-- Main Content End -->

                <!-- Main Sidebar Start -->
                <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <!-- Widget Start -->
                        <div class="widget">
                            <!-- Ad Widget Start -->
                            <div class="ad--widget">
                                <a href="#">
                                    <img src="{{asset('user/img/ads-img/ad-300x250-1.jpg')}}" alt="">
                                </a>
                            </div>
                            <!-- Ad Widget End -->
                        </div>
                        <!-- Widget End -->


                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Liên hệ</h2>
                                <i class="icon fa fa-envelope-open-o"></i>
                            </div>

                            <!-- Subscribe Widget Start -->
                            <div class="subscribe--widget">
                                <div class="content">
                                    <p>Liên hệ với chúng tôi</p>
                                </div>

                                <form action="" method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="mailchimpAjax">
                                    <div class="input-group">
                                        <input type="email" name="" placeholder="Nhập Email" class="form-control" autocomplete="off" required>
                                        <input type="text" name="" placeholder="Nhập nội dung" class="form-control" autocomplete="off" required>

                                        {{-- <div class="input-group-btn">
                                            <button type="submit" class="btn btn-lg btn-default active"><i class="fa fa-paper-plane-o"></i></button>
                                        </div> --}}
                                        <button type="submit" class="btn btn-lg btn-default active"><i class="fa fa-paper-plane-o"></i></button>

                                    </div>

                                    <div class="status"></div>
                                </form>
                            </div>
                            <!-- Subscribe Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Quảng cáo</h2>
                                <i class="icon fa fa-bullhorn"></i>
                            </div>

                            <!-- Ad Widget Start -->
                            <div class="ad--widget">
                                <a href="#">
                                    <img src="{{asset('user/img/ads-img/ad-300x250-2.jpg')}}" alt="">
                                </a>
                            </div>
                            <!-- Ad Widget End -->
                        </div>
                        <!-- Widget End -->
                    </div>
                </div>
                <!-- Main Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Main Content Section End -->
@endsection
