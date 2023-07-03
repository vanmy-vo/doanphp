@extends('user.layout')

@section('title','Trang chủ')

@section('web_content')
<?php
use App\Models\Taikhoan;
use App\Models\Slide;

?>
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
                                        <img src="{{asset('user/img/slideshow-img/a12-16877994426012071256703.jpg')}}" width="400" height="350">
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
                                    
                                    <div class="item">
                                        <img src="{{asset('user/img/slideshow-img/a12-16877994426012071256703.jpg')}}">
                                        <div class="carousel-caption">
                                            <h3><a href="#">Việt Nam là hình mẫu về phục hồi kinh tế</a></h3>
                                            <p>Trưa 26.6, trong khuôn khổ chuyến thăm chính thức Trung Quốc và dự hội nghị của Diễn đàn Kinh tế thế giới, Thủ tướng...<a class="label label-primary" href="" target="_blank"></a></p>
                                        </div>
                                    </div><!-- End Item -->
                                </div><!-- End Carousel Inner -->

                                <ul class="list-group col-sm-4">
                                    <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active"><h4>Việt Nam là hình mẫu về phục hồi kinh tế</h4></li>
                                    <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>Thiếu tướng Vũ Hồng Văn, Cục trưởng A03 nhận huân chương Quân công hạng nhì</h4></li>
                                    <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4>'Mở cửa' du lịch giữa Ấn Độ và Đà Lạt, Lạc Dương</h4></li>
                                    <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4>Thiếu tướng Vũ Hồng Văn, Cục trưởng A03 nhận huân chương Quân công hạng nhì</h4></li>
                                    <li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><h4>Việt Nam là hình mẫu về phục hồi kinh tế</h4></li>
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
                                        <a href="{{route('category')}}" class="btn-link">Xem thêm</a>
                                    </div>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row" data-ajax-content="inner">
                                        <?php foreach ($tinmoi as $key => $value_tinmoinhat) : ?>
                                        <?php $tacgiatinmoinhat = Taikhoan::where(['id' => $value_tinmoinhat->account_id])->first(); ?>
                                        <?php $slidetinmoinhat = Slide::where(['post_id' => $value_tinmoinhat->id])->first(); ?>
                                        <li class="col-md-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="{{ route('chitietbaiviet', $value_tinmoinhat->slug_post) }}" class="thumb" title="<?=$value_tinmoinhat->title_post?>">
                                                    <?php if ($slidetinmoinhat->img != null) { ?>
                                                    <img src="{{ asset('uploads/posts/'.$slidetinmoinhat->img) }}" alt="<?=$value_tinmoinhat->title_post?>">
                                                    <?php } else { ?>
                                                    <img src="{{ asset('uploads/noimg/nobanner.jpg') }}" alt="<?=$value_tinmoinhat->title_post?>">
                                                    <?php } ?>
                                                    </a>
                                                    <a href="{{ route('chitietbaiviet', $value_tinmoinhat->slug_post) }}" class="cat">Mới</a>
                                                    <a href="{{ route('chitietbaiviet', $value_tinmoinhat->slug_post) }}" class="icon"><i class="fa fa-heart-o"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{ route('chitietbaiviet', $value_tinmoinhat->slug_post) }}" title="<?=$value_tinmoinhat->title_post?>"><?=$tacgiatinmoinhat->fullname?></a></li>
                                                            <?php $time = strtotime($value_tinmoinhat->created_at); ?>
                                                            <?php $timenew = date('d/m/Y', $time); ?>
                                                            <li><a href="{{ route('chitietbaiviet', $value_tinmoinhat->slug_post) }}" title="<?=$value_tinmoinhat->title_post?>"><?=$timenew?></a></li>
                                                        </ul>

                                                        {{-- <div class="title">
                                                            <h3 style="color: #000; "><a href="" class="btn-link">Vì sao mưa lớn khắp TP.HCM chiều nay?</a></h3>
                                                        </div> --}}
                                                        <div class="title">
                                                            <h4 class="h4"><a href="{{ route('chitietbaiviet', $value_tinmoinhat->slug_post) }}" class="btn-link" title="<?=$value_tinmoinhat->title_post?>"><?=$value_tinmoinhat->description?></a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <?php if (++$key == 1) {break;} ?>
                                        <?php endforeach; ?>

                                        <li class="col-md-6">
                                            <ul class="nav row">
                                                <li class="col-xs-12 hidden-md hidden-lg">
                                                    <!-- Divider Start -->
                                                    <hr class="divider">
                                                    <!-- Divider End -->
                                                </li>
                                                <?php foreach ($tinmoi as $key => $value_tinmoi) : ?>
                                                <?php $tacgialistmoi = Taikhoan::where(['id' => $value_tinmoi->account_id])->first(); ?>
                                                <?php $slidetinmoi = Slide::where(['post_id' => $value_tinmoi->id])->first(); ?>
                                                <li class="col-xs-6">
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-2">
                                                        <div class="post--img">
                                                            <a href="{{ route('chitietbaiviet', $value_tinmoi->slug_post) }}" class="thumb" title="<?=$value_tinmoi->title_post?>">
                                                                <?php if ($slidetinmoi->img != null) { ?>
                                                                <img src="{{ asset('uploads/posts/'.$slidetinmoi->img) }}" alt="<?=$value_tinmoi->title_post?>">
                                                                <?php } else { ?>
                                                                <img src="{{ asset('uploads/noimg/nobanner.jpg') }}" alt="<?=$value_tinmoi->title_post?>">
                                                                <?php } ?>
                                                            </a>

                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="{{ route('chitietbaiviet', $value_tinmoi->slug_post) }}" title="<?=$value_tinmoi->title_post?>"><?=$tacgialistmoi->fullname?></a></li>
                                                                    <?php $times = strtotime($value_tinmoi->created_at); ?>
                                                                    <?php $timenews = date('d/m/Y', $times); ?>
                                                                    <li><a href="{{ route('chitietbaiviet', $value_tinmoi->slug_post) }}" title="<?=$value_tinmoi->title_post?>"><?=$timenews?></a></li>
                                                                </ul>

                                                                <div class="title">
                                                                    <h3 class="h4"><a href="{{ route('chitietbaiviet', $value_tinmoi->slug_post) }}" class="btn-link" title="<?=$value_tinmoi->title_post?>"><?=$value_tinmoi->description?></a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                                <?php if ($key == 1) { ?>
                                                <li class="col-xs-12">
                                                    <!-- Divider Start -->
                                                    <hr class="divider">
                                                    <!-- Divider End -->
                                                </li>
                                                <?php } ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        </li>
                                    </ul>
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
                                    <a href="{{route('category')}}" class="btn-link">Xem thêm</a>
                                </div>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-1" data-ajax-content="outer">
                                <ul class="nav row gutter--15" data-ajax-content="inner">
                                    <?php foreach ($tinnoibat as $key => $value_tinnoibatnhat) : ?>
                                    <?php $tacgialistnoibatnhat = Taikhoan::where(['id' => $value_tinnoibatnhat->account_id])->first(); ?>
                                    <li class="col-md-12" title="<?=$value_tinnoibatnhat->title_post?>">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1 post--title-large">
                                            <div class="post--img a">
                                                <style>
                                                    .post--img.a img{
                                                        object-fit: cover;
                                                        width: 770px; 
                                                        height: 256px;
                                                    }
                                                </style>
                                                <a href="" class="thumb"><img src="{{asset('user/img/post-img/black-pinkk.png')}}" alt=""></a>
                                                <a href="#" class="cat">HOT</a>
                                                <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#"><?= $tacgialistnoibatnhat->fullname ?></a></li>
                                                        <?php $timetinnoibatss = strtotime($value_tinnoibatnhat->created_at); ?>
                                                        <?php $timesnoibatnhatss = date('d/m/Y H:i A', $timetinnoibatss); ?>
                                                        <li><a href="#"><?=$timesnoibatnhatss ?></a></li>
                                                    </ul>

                                                    <div class="title text-xxs-ellipsis">
                                                        <h2 class="h4"><a href="" class="btn-link"><?=$value_tinnoibatnhat->title_post?></a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <?php if (++$key == 1) {break;} ?>
                                    <?php endforeach; ?>

                                    <?php foreach ($tinnoibat as $key => $value_tinnoibat) : ?>
                                    <?php $tacgialistnoibat = Taikhoan::where(['id' => $value_tinnoibat->account_id])->first(); ?>
                                    <li class="col-md-4 col-xs-6 col-xxs-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img b">
                                                <style>
                                                    .post--img.b img{
                                                        object-fit: fill;
                                                        width: 370px; 
                                                        height: 200px;
                                                    }
                                                </style>
                                                <a href="{{ route('chitietbaiviet', $value_tinnoibat->slug_post) }}" class="thumb"><img src="{{asset('user/img/post-img/2523523523.jpg')}}"  style="object-fit: fill" alt="<?= $value_tinnoibat->title_post ?>"></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="{{ route('chitietbaiviet', $value_tinnoibat->slug_post) }}"><?=$tacgialistnoibat->fullname?></a></li>
                                                        <?php $timenoibat = strtotime($value_tinnoibat->created_at); ?>
                                                        <?php $timesnoibats = date('d/m/Y H:i A', $timenoibat); ?>
                                                        <li><a href="{{ route('chitietbaiviet', $value_tinnoibat->slug_post) }}"><?=$timesnoibats?></a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="{{ route('chitietbaiviet', $value_tinnoibat->slug_post) }}" class="btn-link"><?=$value_tinnoibat->title_post?></a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <?php if (++$key == 3) {break;} ?>
                                    <?php endforeach; ?>
                                    

                                </ul>
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
                            <div class="widget--title">
                                <h2 class="h4">Quảng cáo</h2>
                                <i class="icon fa fa-bullhorn"></i>
                            </div>
                            <div class="ad--widget">
                                <a href="#">
                                    <img src="{{asset('user/img/ads-img/ads-black-pink-samsung.jpg')}}" alt="">
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
                                        <input type="text" name="" placeholder="Nhập tiêu đề" class="form-control" autocomplete="off" required>
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
                                    <img src="{{asset('user/img/ads-img/black-pink.jpg')}}" alt="">
                                </a>
                            </div>
                            <!-- Ad Widget End -->
                        </div>
                        <!-- Widget End -->
                    </div>
                </div>
                <!-- Main Sidebar End -->
            </div>

            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="row">
                            <!-- Health and fitness Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Thể thao</h2>

                                    <div class="nav">
                                        <a href="{{route('category')}}" class="btn-link">Xem thêm</a>
                                    </div>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="" class="thumb"><img src="{{asset('user/img/post-img/463634634.jpg')}}" alt=""></a>
                                                    <a href="#" class="cat">Thể thao</a>
                                                    <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Bathin</a></li>
                                                            <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="" class="btn-link">Mỗi cầu thủ nhận 700 triệu khi dự World Cup 2023, cao nhất 6,3 tỉ đồng</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="" class="thumb"><img src="{{asset('user/img/post-img/463634634.jpg')}}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Maclaan John</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="" class="btn-link">Mỗi cầu thủ nhận 700 triệu khi dự World Cup 2023, cao nhất 6,3 tỉ đồng</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="" class="thumb"><img src="{{asset('user/img/post-img/463634634.jpg')}}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Maclaan John</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="" class="btn-link">Mỗi cầu thủ nhận 700 triệu khi dự World Cup 2023, cao nhất 6,3 tỉ đồng</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="" class="thumb"><img src="{{asset('user/img/post-img/463634634.jpg')}}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Maclaan John</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="" class="btn-link">Mỗi cầu thủ nhận 700 triệu khi dự World Cup 2023, cao nhất 6,3 tỉ đồng</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="" class="thumb"><img src="{{asset('user/img/post-img/463634634.jpg')}}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Maclaan John</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="" class="btn-link">Mỗi cầu thủ nhận 700 triệu khi dự World Cup 2023, cao nhất 6,3 tỉ đồng</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                       
                                    </ul>
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Health and fitness End -->

                            <!-- Lifestyle Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Công nghệ</h2>

                                    <div class="nav">
                                    <a href="{{route('category')}}" class="btn-link">Xem thêm</a>
                                </div>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <li class="col-xs-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="" class="thumb"><img src="{{asset('user/img/post-img/235235235.jpg')}}" alt=""></a>
                                                    <a href="#" class="cat">Công nghệ</a>
                                                    <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="" class="btn-link">Giá iPhone có thể đã 'xuống đáy'</a></h3>
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
                                                    <a href="" class="thumb"><img src="{{asset('user/img/post-img/235235235.jpg')}}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">17 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="" class="btn-link">Giá iPhone có thể đã 'xuống đáy'</a></h3>
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
                                                    <a href="" class="thumb"><img src="{{asset('user/img/post-img/235235235.jpg')}}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">17 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="" class="btn-link">Giá iPhone có thể đã 'xuống đáy'</a></h3>
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
                                                    <a href="" class="thumb"><img src="{{asset('user/img/post-img/235235235.jpg')}}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">17 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="" class="btn-link">Giá iPhone có thể đã 'xuống đáy'</a></h3>
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
                                                    <a href="" class="thumb"><img src="{{asset('user/img/post-img/235235235.jpg')}}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Astaroth</a></li>
                                                            <li><a href="#">17 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="" class="btn-link">Giá iPhone có thể đã 'xuống đáy'</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                    </ul>
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Lifestyle End -->
                        </div>
                    </div>
                </div>
                <!-- Main Content End -->

                <!-- Main Sidebar Start -->
                <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title" data-ajax="tab">
                                <h2 class="h4">Tin vắng</h2>

                                <div class="nav">
                                    <a href="{{route('category')}}" class="btn-link">Xem thêm</a>
                                </div>
                            </div>

                            <!-- List Widgets Start -->
                            <div class="list--widget list--widget-1" data-ajax-content="outer">
                                <!-- Post Items Start -->
                                <div class="post--items post--items-3">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="" class="thumb"><img src="{{asset('user/img/post-img/252532523.jpg')}}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Ninurta</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="" class="btn-link">Trí tuệ nhân tạo nguy hiểm như thế nào?</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="" class="thumb"><img src="{{asset('user/img/post-img/252532523.jpg')}}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Orcus</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="" class="btn-link">Trí tuệ nhân tạo nguy hiểm như thế nào?</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="" class="thumb"><img src="{{asset('user/img/post-img/252532523.jpg')}}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Orcus</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="" class="btn-link">Trí tuệ nhân tạo nguy hiểm như thế nào?</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="" class="thumb"><img src="{{asset('user/img/post-img/252532523.jpg')}}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="#">Orcus</a></li>
                                                            <li><a href="#">16 April 2017</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="" class="btn-link">Trí tuệ nhân tạo nguy hiểm như thế nào?</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                    </ul>
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- List Widgets End -->
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