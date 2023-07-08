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
                                    @foreach($slideshows as $key => $slideshow)
                                    <div class="item{{ $key === 0 ? ' active' : '' }}">
                                        <img src="{{ asset('uploads/posts/' . $slideshow->post_image->img) }}" width="400" height="350">
                                        <div class="carousel-caption" style="overflow: hidden;">
                                            <h3><a href="{{ route('chitietbaiviet', $slideshow->slug_post) }}">{{ $slideshow->description }}</a></h3>
                                            <p><a class="label label-primary" href="#" target="_blank"></a></p>
                                        </div>
                                    </div><!-- End Item -->
                                    @endforeach
                                </div><!-- End Carousel Inner -->
                                <ul class="list-group col-sm-4">
                                    @foreach($slideshows as $key => $slideshow)
                                    <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="list-group-item{{ $key === 0 ? ' active' : '' }}">
                                        <h4>{{ $slideshow->title_post }}</h4>
                                    </li>
                                    @endforeach
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
                                    <li class="col-md-6" title="<?=$value_tinmoinhat->title_post?>">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="{{ route('chitietbaiviet', $value_tinmoinhat->slug_post) }}"
                                                    class="thumb">
                                                    <?php if ($slidetinmoinhat->img != null) { ?>
                                                    <img src="{{ asset('uploads/posts/'.$slidetinmoinhat->img) }}"
                                                        alt="<?=$value_tinmoinhat->title_post?>">
                                                    <?php } else { ?>
                                                    <img src="{{ asset('uploads/noimg/nobanner.jpg') }}"
                                                        alt="<?=$value_tinmoinhat->title_post?>">
                                                    <?php } ?>
                                                </a>
                                                <a href="{{ route('chitietbaiviet', $value_tinmoinhat->slug_post) }}"
                                                    class="cat">Mới</a>
                                                <a href="{{ route('chitietbaiviet', $value_tinmoinhat->slug_post) }}"
                                                    class="icon"><i class="fa fa-heart-o"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a
                                                                href="{{ route('chitietbaiviet', $value_tinmoinhat->slug_post) }}"><?=$tacgiatinmoinhat->fullname?></a>
                                                        </li>
                                                        <?php $time = strtotime($value_tinmoinhat->created_at); ?>
                                                        <?php $timenew = date('d/m/Y', $time); ?>
                                                        <li><a
                                                                href="{{ route('chitietbaiviet', $value_tinmoinhat->slug_post) }}"><?=$timenew?></a>
                                                        </li>
                                                    </ul>

                                                    {{-- <div class="title">
                                                            <h3 style="color: #000; "><a href="" class="btn-link">Vì sao mưa lớn khắp TP.HCM chiều nay?</a></h3>
                                                        </div> --}}
                                                    <div class="title">
                                                        <h4 class="h4"><a
                                                                href="{{ route('chitietbaiviet', $value_tinmoinhat->slug_post) }}"
                                                                class="btn-link"><?=$value_tinmoinhat->description?></a>
                                                        </h4>
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
                                            <li class="col-xs-6" title="<?=$value_tinmoi->title_post?>">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="{{ route('chitietbaiviet', $value_tinmoi->slug_post) }}"
                                                            class="thumb">
                                                            <?php if ($slidetinmoi->img != null) { ?>
                                                            <img src="{{ asset('uploads/posts/'.$slidetinmoi->img) }}"
                                                                alt="<?=$value_tinmoi->title_post?>">
                                                            <?php } else { ?>
                                                            <img src="{{ asset('uploads/noimg/nobanner.jpg') }}"
                                                                alt="<?=$value_tinmoi->title_post?>">
                                                            <?php } ?>
                                                        </a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a
                                                                        href="{{ route('chitietbaiviet', $value_tinmoi->slug_post) }}"><?=$tacgialistmoi->fullname?></a>
                                                                </li>
                                                                <?php $times = strtotime($value_tinmoi->created_at); ?>
                                                                <?php $timenews = date('d/m/Y', $times); ?>
                                                                <li><a
                                                                        href="{{ route('chitietbaiviet', $value_tinmoi->slug_post) }}"><?=$timenews?></a>
                                                                </li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a
                                                                        href="{{ route('chitietbaiviet', $value_tinmoi->slug_post) }}"
                                                                        class="btn-link"><?=$value_tinmoi->description?></a>
                                                                </h3>
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
                                    <a href="{{ route('category') }}" class="btn-link">Xem thêm</a>
                                </div>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-1" data-ajax-content="outer">
                                <ul class="nav row gutter--15" data-ajax-content="inner">
                                    <?php foreach ($tinnoibat as $key => $value_tinnoibatnhat) : ?>
                                    <?php $tacgialistnoibatnhat = Taikhoan::where(['id' => $value_tinnoibatnhat->account_id])->first(); ?>
                                    <?php $slidetinnoibatnhat = Slide::where(['post_id' => $value_tinnoibatnhat->id])->first(); ?>
                                    <li class="col-md-12" title="<?=$value_tinnoibatnhat->title_post?>">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1 post--title-large">
                                            <div class="post--img a">
                                                <style>
                                                .post--img.a img {
                                                    object-fit: cover;
                                                    width: 770px;
                                                    height: 256px;
                                                }
                                                </style>
                                                <a href="{{ route('chitietbaiviet', $value_tinnoibatnhat->slug_post) }}"
                                                    class="thumb">
                                                    <?php if ($slidetinnoibatnhat->img != null) { ?>
                                                    <img src="{{ asset('uploads/posts/'.$slidetinnoibatnhat->img) }}"
                                                        alt="<?=$value_tinnoibatnhat->title_post?>">
                                                    <?php } else { ?>
                                                    <img src="{{ asset('uploads/noimg/nobanner.jpg') }}"
                                                        alt="<?=$value_tinnoibatnhat->title_post?>">
                                                    <?php } ?>
                                                </a>
                                                <a href="#" class="cat">HOT</a>
                                                <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a
                                                                href="{{ route('chitietbaiviet', $value_tinnoibatnhat->slug_post) }}"><?= $tacgialistnoibatnhat->fullname ?></a>
                                                        </li>
                                                        <?php $timetinnoibatss = strtotime($value_tinnoibatnhat->created_at); ?>
                                                        <?php $timesnoibatnhatss = date('d/m/Y H:i A', $timetinnoibatss); ?>
                                                        <li><a
                                                                href="{{ route('chitietbaiviet', $value_tinnoibatnhat->slug_post) }}"><?=$timesnoibatnhatss ?></a>
                                                        </li>
                                                    </ul>

                                                    <div class="title text-xxs-ellipsis">
                                                        <h2 class="h4"><a
                                                                href="{{ route('chitietbaiviet', $value_tinnoibatnhat->slug_post) }}"
                                                                class="btn-link"><?=$value_tinnoibatnhat->title_post?></a>
                                                        </h2>
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
                                    <?php $slidetinnoibat = Slide::where(['post_id' => $value_tinnoibat->id])->first(); ?>
                                    <li class="col-md-4 col-xs-6 col-xxs-12"
                                        title="<?= $value_tinnoibat->title_post ?>">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img b">
                                                <style>
                                                .post--img.b img {
                                                    object-fit: fill;
                                                    width: 370px;
                                                    height: 200px;
                                                }
                                                </style>
                                                <a href="{{ route('chitietbaiviet', $value_tinnoibat->slug_post) }}"
                                                    class="thumb">
                                                    <?php if ($slidetinnoibat->img != null) { ?>
                                                    <img src="{{ asset('uploads/posts/'.$slidetinnoibat->img) }}"
                                                        style="object-fit: fill"
                                                        alt="<?= $value_tinnoibat->title_post ?>">
                                                    <?php } else { ?>
                                                    <img src="{{ asset('uploads/noimg/nobanner.jpg') }}"
                                                        style="object-fit: fill"
                                                        alt="<?= $value_tinnoibat->title_post ?>">
                                                    <?php } ?>
                                                </a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a
                                                                href="{{ route('chitietbaiviet', $value_tinnoibat->slug_post) }}"><?=$tacgialistnoibat->fullname?></a>
                                                        </li>
                                                        <?php $timenoibat = strtotime($value_tinnoibat->created_at); ?>
                                                        <?php $timesnoibats = date('d/m/Y H:i A', $timenoibat); ?>
                                                        <li><a
                                                                href="{{ route('chitietbaiviet', $value_tinnoibat->slug_post) }}"><?=$timesnoibats?></a>
                                                        </li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a
                                                                href="{{ route('chitietbaiviet', $value_tinnoibat->slug_post) }}"
                                                                class="btn-link"><?=$value_tinnoibat->title_post?></a>
                                                        </h2>
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
                    <!-- QUẢNG CÁO -->
                    <style>
                    .slider {
                        margin: 20px auto;
                    }

                    #img {
                        width: 100%;
                        height: 100%;
                        object-fit: contain;
                    }
                    </style>
                    <div class="widget">
                        <div class="widget--title">
                            <h2 class="h4">Quảng cáo</h2>
                            <i class="icon fa fa-bullhorn"></i>
                        </div>
                        <!-- Ad Widget End -->
                    </div>
                    <div class="slider ad--widget" id="img">
                        <a href="<?= $databases[0]->link_name ?>" target="_blank"><img
                                src="{{ asset('uploads/posts/'.$databases[0]->image_ads) }}"> </a>
                    </div>
                    <script>
                    var img = document.getElementById('img');
                    var slides = [];
                    var link_slides = [];
                    <?php foreach($databases as $row) : ?>

                    slides.push('{{ asset('uploads/posts/'.$row->image_ads) }}');
                    link_slides.push('<?= $row->link_name ?>');

                    <?php endforeach; ?>

                    var Start = 0;

                    function slider() {
                        if (Start < slides.length) {
                            Start = Start + 1;
                        } else {
                            Start = 1;
                        }

                        img.innerHTML = "<a href=" + link_slides[Start - 1] + " + target='_blank'> <img src=" + slides[
                                Start - 1] +
                            "> </a>";

                    }
                    setInterval(slider, 1000);
                    </script>

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

                            <form name="mc-embedded-subscribe-form" target="_blank">
                                <div class="input-group">
                                    <input type="text" id="fullname" name="fullname" placeholder="Nhập Tên" class="form-control" autocomplete="off" required>
                                    <input type="email" id="email" name="email" placeholder="Nhập Email" class="form-control" autocomplete="off" required>
                                    <input type="text" id="title_contact" name="title_contact" placeholder="Nhập tiêu đề" class="form-control" autocomplete="off" required>
                                    <textarea type="text" id="content_contact" name="content_contact" placeholder="Nhập nội dung" class="form-control" autocomplete="off" required></textarea>
                                    <button type="submit" class="btn btn-lg btn-default active btn-message"><i class="fa fa-paper-plane-o"></i></button>
                                </div>
                                {{-- <div class="status"></div> --}}
                            </form>
                        </div>
                        {{-- </div> --}}
                        <!-- Subscribe Widget End -->
                    </div>
                    <!-- Widget End -->

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
                                    <?php foreach ($tinthethao as $key => $value_tinthethao) : ?>
                                    <?php $slidetinthethao = Slide::where(['post_id' => $value_tinthethao->id])->first(); ?>
                                    <?php $tacgiatinthethao = Taikhoan::where(['id' => $value_tinthethao->account_id])->first(); ?>
                                    <li title="<?=$value_tinthethao->title_post?>">
                                        <!-- Post Item Start -->
                                        <?php if (++$key == 1) { ?>
                                        <div class="post--item post--layout-1">
                                            <?php } else { ?>
                                            <div class="post--item post--layout-3">
                                                <?php } ?>
                                                <div class="post--img">
                                                    <a href="{{ route('chitietbaiviet', $value_tinthethao->slug_post) }}"
                                                        class="thumb">
                                                        <?php if ($slidetinthethao->img != null) { ?>
                                                        <img src="{{asset('uploads/posts/'.$slidetinthethao->img)}}"
                                                            alt="<?=$value_tinthethao->title_post?>">
                                                        <?php } else { ?>
                                                        <img src="{{ asset('uploads/noimg/nobanner.jpg') }}"
                                                            alt="<?=$value_tinthethao->title_post?>">

                                                        <?php } ?>
                                                    </a>
                                                    <?php if ($key++ == 1) { ?>
                                                    <a href="{{ route('chitietbaiviet', $value_tinthethao->slug_post) }}"
                                                        class="cat">Thể thao</a>
                                                    <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>
                                                    <?php } ?>


                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a
                                                                    href="{{ route('chitietbaiviet', $value_tinthethao->slug_post) }}"><?=$tacgiatinthethao->fullname?></a>
                                                            </li>
                                                            <?php $timestinthethao = strtotime($value_tinthethao->created_at); ?>
                                                            <?php $timestinthethaos = date('d/m/Y H:i A', $timestinthethao); ?>
                                                            <li><a
                                                                    href="{{ route('chitietbaiviet', $value_tinthethao->slug_post) }}"><?=$timestinthethaos?></a>
                                                            </li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a
                                                                    href="{{ route('chitietbaiviet', $value_tinthethao->slug_post) }}"
                                                                    class="btn-link"><?=$value_tinthethao->title_post?></a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                    </li>
                                    <?php endforeach; ?>


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
                                    <?php foreach ($tincongnghe as $key => $value_tincongnghe) : ?>
                                    <?php $tacgiatincongnghe = Taikhoan::where(['id' => $value_tincongnghe->account_id])->first(); ?>
                                    <?php $slidetincongnghe = Slide::where(['post_id' => $value_tincongnghe->id])->first(); ?>
                                    <?php if ($key++ == 0) { ?>
                                    <li class="col-xs-12" title="<?=$value_tincongnghe->title_post?>">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <?php } else { ?>
                                    <li class="col-xs-6" title="<?=$value_tincongnghe->title_post?>">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-2">
                                            <?php } ?>
                                            <div class="post--img">
                                                <a href="{{ route('chitietbaiviet', $value_tincongnghe->slug_post) }}"
                                                    class="thumb">
                                                    <?php if ($slidetincongnghe->img != null) { ?>
                                                    <img src="{{asset('uploads/posts/'. $slidetincongnghe->img)}}"
                                                        alt="<?=$value_tincongnghe->title_post?>">
                                                    <?php } else { ?>
                                                    <img src="{{asset('uploads/noimg/nobanner.jpg')}}"
                                                        alt="<?=$value_tincongnghe->title_post?>">
                                                    <?php } ?>
                                                </a>
                                                <?php if ($key++ == 0) { ?>
                                                <a href="{{ route('chitietbaiviet', $value_tincongnghe->slug_post) }}"
                                                    class="cat">Công nghệ</a>
                                                <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>
                                                <?php } ?>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a
                                                                href="{{ route('chitietbaiviet', $value_tincongnghe->slug_post) }}"><?=$tacgiatincongnghe->fullname?></a>
                                                        </li>
                                                        <?php $timetincongnghe = strtotime($value_tincongnghe->created_at); ?>
                                                        <?php $timetincongnghes = date('d/m/Y H:i A', $timetincongnghe); ?>
                                                        <li><a
                                                                href="{{ route('chitietbaiviet', $value_tincongnghe->slug_post) }}"><?=$timetincongnghes?></a>
                                                        </li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a
                                                                href="{{ route('chitietbaiviet', $value_tincongnghe->slug_post) }}"
                                                                class="btn-link"><?=$value_tincongnghe->title_post?></a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <?php if ($key++ == 2 || $key++ == 5) { ?>
                                    <li class="col-xs-12">
                                        <!-- Divider Start -->
                                        <hr class="divider">
                                        <!-- Divider End -->
                                    </li>
                                    <?php } ?>
                                    <?php endforeach; ?>
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
                                    <?php foreach ($tinvang as $key => $value_tinvang) : ?>
                                    <?php $tacgiatinvang = Taikhoan::where(['id' => $value_tinvang->account_id])->first(); ?>
                                    <?php $slidetinvang = Slide::where(['post_id' => $value_tinvang->id])->first(); ?>
                                    <li title="<?=$value_tinvang->title_post?>">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-3">
                                            <div class="post--img">
                                                <a href="{{ route('chitietbaiviet', $value_tinvang->slug_post) }}"
                                                    class="thumb">
                                                    <?php if ($slidetinvang->img != null) { ?>
                                                    <img src="{{ asset('uploads/posts/'.$slidetinvang->img) }}"
                                                        alt="<?=$value_tinvang->title_post?>">
                                                    <?php } else { ?>
                                                    <img src="{{ asset('uploads/noimg/nobanner.jpg') }}"
                                                        alt="<?=$value_tinvang->title_post?>">
                                                    <?php } ?>
                                                </a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a
                                                                href="{{ route('chitietbaiviet', $value_tinvang->slug_post) }}"><?=$tacgiatinvang->fullname;?></a>
                                                        </li>
                                                        <?php $timetinvang = strtotime($value_tinvang->created_at); ?>
                                                        <?php $timetinvangs = date('d/m/Y H:i A', $timetinvang); ?>
                                                        <li><a
                                                                href="{{ route('chitietbaiviet', $value_tinvang->slug_post) }}"><?=$timetinvangs?></a>
                                                        </li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a
                                                                href="{{ route('chitietbaiviet', $value_tinvang->slug_post) }}"
                                                                class="btn-link"><?=$value_tinvang->title_post?></a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    <?php endforeach; ?>
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

@section('js')
    <script>
        toastr.options = {
            positionClass: 'toast-bottom-right'
        };

        function isValidEmail(email) {
            // Regular expression to check email format
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }
        
        $('.btn-message').on('click',function(e){
            e.preventDefault();
            $fullname = $('#fullname').val();
            $email = $('#email').val();
            $title_contact = $('#title_contact').val();
            $content_contact = $('#content_contact').val();

            if (!isValidEmail($email)) {
                toastr.error('Địa chỉ Email không hợp lệ');
                return;
            }

            $.ajax({
                type: 'POST',
                url: 'http://127.0.0.1:8000/api/contacts/save-contact',
                data: {
                    fullname : $fullname,
                    email : $email,
                    title_contact : $title_contact,
                    content_contact : $content_contact,
                },  
                dataType: 'json',
                success: function(data){
                    if(data.data){
                        $('#fullname').val('');
                        $('#email').val('');
                        $('#title_contact').val('');
                        $('#content_contact').val('');
                        toastr.success('Đã gửi');
                    }
                }
            });
        });
    </script>
@endsection