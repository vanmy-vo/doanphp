@extends('user.layout')

@section('title','Trang chủ')

@section('web_content')
    <!-- Main Content Section Start -->
    <div class="main-content--section pbottom--30">
        <div class="container">
            <!-- Main Content Start -->
            <div class="main--content">
            <!-- Post Items Start -->
            <div class="post--items post--items-1 pd--30-0">
                <div class="row gutter--15">
                    <div class="col-md-12">
                        <div class="container">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="{{asset('user/img/slideshow-img/a12-16877994426012071256703.jpg')}}">
                                        <div class="carousel-caption">
                                        <h3><a href="#">Việt Nam là hình mẫu về phục hồi kinh tế</a></h3>
                                        <p>Trưa 26.6, trong khuôn khổ chuyến thăm chính thức Trung Quốc và dự hội nghị của Diễn đàn Kinh tế thế giới, Thủ tướng...<a class="label label-primary" href="" target="_blank"></a></p>
                                        </div>
                                    </div><!-- End Item -->
                            
                                    <div class="item">
                                        <img src="{{asset('user/img/slideshow-img/img1081-168779566180572722111.jpeg')}}">
                                        <div class="carousel-caption">
                                        <h3><a href="#">Thiếu tướng Vũ Hồng Văn, Cục trưởng A03 nhận huân chương Quân công hạng nhì</a></h3>
                                        <p>Tại hội nghị sơ kết công tác công an 6 tháng đầu năm, thừa ủy quyền của lãnh đạo Đảng, Nhà nước, đại tướng Tô Lâm, Bộ trưởng Bộ Công an, đã...<a class="label label-primary" href="" target="_blank"></a></p>
                                        </div>
                                    </div><!-- End Item -->
                                    
                                    <div class="item">
                                        <img src="{{asset('user/img/slideshow-img/ezgif-1-d25e8afc1c.jpg')}}">
                                        <div class="carousel-caption">
                                            <h3><a href="#">'Mở cửa' du lịch giữa Ấn Độ và Đà Lạt, Lạc Dương</a></h3>
                                            <p>Nhiều đơn vị lữ hành của Ấn Độ đang có kế hoạch tổ chức đưa du khách đến Đà Lạt, Lạc Dương và các điểm du lịch khác của Lâm Đồng. <a class="label label-primary" href="" target="_blank"></a></p>
                                        </div>
                                    </div><!-- End Item -->
                                    
                                    <div class="item">
                                        <img src="{{asset('user/img/slideshow-img/img1081-168779566180572722111.jpeg')}}">
                                        <div class="carousel-caption">
                                        <h3><a href="#">Thiếu tướng Vũ Hồng Văn, Cục trưởng A03 nhận huân chương Quân công hạng nhì</a></h3>
                                        <p>Tại hội nghị sơ kết công tác công an 6 tháng đầu năm, thừa ủy quyền của lãnh đạo Đảng, Nhà nước, đại tướng Tô Lâm, Bộ trưởng Bộ Công an, đã...<a class="label label-primary" href="" target="_blank"></a></p>
                                        </div>
                                    </div><!-- End Item -->
                                </div><!-- End Carousel Inner -->

                                <ul class="list-group col-sm-4">
                                    <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active"><h4>Việt Nam là hình mẫu về phục hồi kinh tế</h4></li>
                                    <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>Thiếu tướng Vũ Hồng Văn, Cục trưởng A03 nhận huân chương Quân công hạng nhì</h4></li>
                                    <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4>'Mở cửa' du lịch giữa Ấn Độ và Đà Lạt, Lạc Dương</h4></li>
                                    <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>Thiếu tướng Vũ Hồng Văn, Cục trưởng A03 nhận huân chương Quân công hạng nhì</h4></li>
                                </ul>
                        
                                <!-- Controls -->
                                <div class="carousel-controls">
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                        
                            </div><!-- End Carousel -->
                        </div>
                    </div>   
                </div>
            </div>
            <!-- Post Items End -->
            </div>
            <!-- Main Content End -->

            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="row">
                            <!-- Finance Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Tin mới</h2>

                                    <div class="nav">
                                        <a href="#" class="btn-link">Xem thêm</a>
                                    </div>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row" data-ajax-content="inner">
                                        <li class="col-md-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img src="{{asset('user/img/home-img/finance-01.jpg')}}" alt=""></a>
                                                    <a href="#" class="cat">Business</a>
                                                    <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Vassago</a></li>
                                                            <li><a href="#">Today 03:30 am</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="news-single-v1.html" class="btn-link">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>

                                        <li class="col-md-6">
                                            <ul class="nav row">
                                                <li class="col-xs-12 hidden-md hidden-lg">
                                                    <!-- Divider Start -->
                                                    <hr class="divider">
                                                    <!-- Divider End -->
                                                </li>

                                                <li class="col-xs-6">
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-2">
                                                        <div class="post--img">
                                                            <a href="news-single-v1.html" class="thumb"><img src="{{asset('user/img/home-img/finance-02.jpg')}}" alt=""></a>

                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="#">Zepar</a></li>
                                                                    <li><a href="#">Today 03:52 pm</a></li>
                                                                </ul>

                                                                <div class="title">
                                                                    <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>

                                                <li class="col-xs-6">
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-2">
                                                        <div class="post--img">
                                                            <a href="news-single-v1.html" class="thumb"><img src="{{asset('user/img/home-img/finance-03.jpg')}}" alt=""></a>

                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="#">Demiurge</a></li>
                                                                    <li><a href="#">Today 03:02 pm</a></li>
                                                                </ul>

                                                                <div class="title">
                                                                    <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>

                                                <li class="col-xs-12">
                                                    <!-- Divider Start -->
                                                    <hr class="divider">
                                                    <!-- Divider End -->
                                                </li>

                                                <li class="col-xs-6">
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-2">
                                                        <div class="post--img">
                                                            <a href="news-single-v1.html" class="thumb"><img src="{{asset('user/img/home-img/finance-04.jpg')}}" alt=""></a>

                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="#">Demiurge</a></li>
                                                                    <li><a href="#">Today 02:05 am</a></li>
                                                                </ul>

                                                                <div class="title">
                                                                    <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>

                                                <li class="col-xs-6">
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-2">
                                                        <div class="post--img">
                                                            <a href="news-single-v1.html" class="thumb"><img src="{{asset('user/img/home-img/finance-05.jpg')}}" alt=""></a>

                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="#">Zepar</a></li>
                                                                    <li><a href="#">Today 12:35 am</a></li>
                                                                </ul>

                                                                <div class="title">
                                                                    <h3 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <!-- Preloader Start -->
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                    <!-- Preloader End -->
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Finance End -->

                            <!-- Photo Gallery Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Tin nổi bật</h2>

                                <div class="nav">
                                    <a href="#" class="btn-link">Xem thêm</a>
                                </div>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-1" data-ajax-content="outer">
                                <ul class="nav row gutter--15" data-ajax-content="inner">
                                    <li class="col-md-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1 post--title-large">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{asset('user/img/home-img/photo-gallery-01.jpg')}}" alt=""></a>
                                                <a href="#" class="cat">Serfer</a>
                                                <a href="#" class="icon"><i class="fa fa-eye"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Today 05:52 pm</a></li>
                                                    </ul>

                                                    <div class="title text-xxs-ellipsis">
                                                        <h2 class="h4"><a href="news-single-v1.html" class="btn-link">Standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li class="col-md-4 col-xs-6 col-xxs-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{asset('user/img/home-img/photo-gallery-02.jpg')}}" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Today 03:52 pm</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li class="col-md-4 col-xs-6 col-xxs-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{asset('user/img/home-img/photo-gallery-03.jpg')}}" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Today 03:52 pm</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <li class="col-md-4 hidden-sm hidden-xs">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="news-single-v1.html" class="thumb"><img src="{{asset('user/img/home-img/photo-gallery-04.jpg')}}" alt=""></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Astaroth</a></li>
                                                        <li><a href="#">Today 03:52 pm</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                </ul>

                                <!-- Preloader Start -->
                                <div class="preloader bg--color-0--b" data-preloader="1">
                                    <div class="preloader--inner"></div>
                                </div>
                                <!-- Preloader End -->
                            </div>
                            <!-- Post Items End -->
                        </div>
                        <!-- Photo Gallery End -->
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