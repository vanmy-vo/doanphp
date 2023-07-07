@extends('user.layout')
@section('title','Chi tiết bài viết')

@section('web_content')
<?php
use App\Models\Taikhoan;
use App\Models\Slide;

?>
<!-- Main Breadcrumb Start -->
<div class="main--breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{asset('/home')}}" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
            <?php $loaiIndex = DB::table('type')->where(['id' => $chitiet->type_id])->first(); ?>
            <li class="active"><span><?= $loaiIndex->type_name ?></span></li>
        </ul>
    </div>
</div>
<!-- Main Breadcrumb End -->

<!-- Main Content Section Start -->
<div class="main-content--section pbottom--30">
    <div class="container">
        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content col-md-8" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <!-- Post Item Start -->
                    <div class="post--item post--single post--title-largest pd--30-0">
                        <div class="post--info">
                            <ul class="nav meta">
                                <?php $tacgia = Taikhoan::where(['id' => $chitiet->account_id])->first(); ?>

                                <li><a href="#"><?=$tacgia->fullname?></a></li>
                                <li><a href="#"> {!! $chitiet->created_at !!}</a></li>
                            </ul>

                            <div class="title">
                                <h2 class="h4"><?=$chitiet->title_post?></h2>
                            </div>
                        </div>

                        <div class="post--content">
                            {!! $chitiet->content_post !!}
                        </div>
                    </div>
                    <!-- Post Item End -->
                    <!-- Post Related Start -->
                    <div class="post--related ptop--30">
                        <!-- Post Items Title Start -->
                        <div class="post--items-title" data-ajax="tab">
                            <h2 class="h4">Tin tức liên quan</h2>
                        </div>
                        <!-- Post Items Title End -->

                        <!-- Post Items Start -->
                        <div class="post--items post--items-2" data-ajax-content="outer">
                            <ul class="nav row" data-ajax-content="inner">
                                <?php foreach ($tinlienquan as $value_tinlienquan) : ?>
                                <?php $loai = DB::table('type')->where(['id' => $value_tinlienquan->type_id])->first(); ?>
                                <?php $tacgial_post_lienquan = Taikhoan::where(['id' => $value_tinlienquan->account_id])->first(); ?>
                                <?php if ($value_tinlienquan->type_id == $chitiet->type_id && $value_tinlienquan->id != $chitiet->id) { ?>

                                <?php foreach ($imagetinlienquan as $value_image) : ?>
                                <?php if ($value_image->post_id == $value_tinlienquan->id) { ?>
                                <?php?>

                                <li class="col-sm-6 pbottom--30">
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-1">
                                        <div class="post--img">
                                            <a href="{{ route('chitietbaiviet',$value_tinlienquan->slug_post) }}"
                                                class="thumb"><img
                                                    src="{{ asset('uploads/posts/'.$value_image->img) }}"
                                                    alt=""></a>
                                            <a href="#" class="cat"><?= $loai->type_name ?></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#"><?= $tacgial_post_lienquan->fullname ?></a></li>
                                                    <li><a href="#"><?= $value_tinlienquan->created_at ?></a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a
                                                            href="{{ route('chitietbaiviet',$value_tinlienquan->slug_post) }}"
                                                            class="btn-link"><?= $value_tinlienquan->title_post ?></a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post--content">
                                            <p><?= $value_tinlienquan->description?>
                                            </p>
                                        </div>

                                        <div class="post--action">
                                            <a href="{{ route('chitietbaiviet',$value_tinlienquan->slug_post) }}">Xem
                                                thêm... </a>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>

                                <?php } ?>
                                <?php endforeach; ?>
                                <?php?>
                                <?php } ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <!-- Post Items End -->
                    </div>
                    <!-- Post Related End -->

                    <!-- Comment List Start -->
                    <div class="comment--list pd--30-0">
                        <!-- Post Items Title Start -->
                        <div class="post--items-title">
                            <h2 class="h4"><span class="totalbinhluan"><?=count($tongbinhluan)?></span> bình luận</h2>

                            <i class="icon fa fa-comments-o"></i>
                        </div>
                        <!-- Post Items Title End -->

                        <ul class="comment--items nav" id="binhluanbaiviet">
                            <?php foreach($tongbinhluan as $key => $binhluan) : ?>
                            <li>
                                <!-- Comment Item Start -->
                                <div class="comment--item clearfix">
                                    <div class="comment--img float--left">
                                        <img src="user/img/avatar.jpg" alt="">
                                    </div>

                                    <div class="comment--info">
                                        <div class="comment--header clearfix">
                                            <p class="name"><?=$binhluan->fullname?></p>
                                            <p class="date"><?=$binhluan->created_at?></p>

                                            <a href="javascript:void(0)" class="reply"
                                                onclick="showReply(<?=$binhluan->id?>)"><i
                                                    class="fa fa-mail-reply"></i></a>
                                            <div class="show-id-<?=$binhluan->id?>" style="
    right: 30px;
    position: absolute;
    font-size: 100px;
    background-color: blue;
    width: 100px;
    height: 100px;
    z-index: 1;
    box-shadow: 1px 1px 3px #000, -1px 1px 3px #000, 1px -1px 3px #000, -1px -1px 3px #000;
    top: 30px;
    display: none;
/*    opacity: 0;*/
">1</div>
                                        </div>

                                        <div class="comment--content">
                                            <p><?=$binhluan->content_comment?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Item End -->
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="comment--form pd--30-0">
                        <!-- Post Items Title Start -->
                        <div class="post--items-title">
                            <h2 class="h4">Gửi bình luận</h2>

                            <i class="icon fa fa-pencil-square-o"></i>
                        </div>
                        <!-- Post Items Title End -->

                        <div class="comment-respond">
                            <form action="#" method="POST" data-form="validate">
                                <p>Đừng lo, Email của bạn sẽ được bảo mật. Hãy diền đầy đủ thông tin (*)</p>
                                @csrf
                                <input type="hidden" name="idpost" value="<?=$chitiet->id?>">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>
                                            <span>Bình luận *</span>
                                            <textarea name="comment" class="form-control" required></textarea>
                                        </label>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>
                                            <span>Họ tên *</span>
                                            <input type="text" name="name" class="form-control" required>
                                        </label>

                                        <label>
                                            <span>Địa chỉ Email *</span>
                                            <input type="email" name="email" class="form-control" required>
                                        </label>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-primary" onclick="upComment()">Đăng bình
                                            luận</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Comment Form End -->
                </div>
            </div>
            <!-- Main Content End -->

            <!-- Main Sidebar Start -->
            <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <!-- Widget Start -->
                    <div class="widget">
                        <div class="widget--title" style="border-top:none">
                            <h2 class="h4">Tags</h2>
                            <i class="icon fa fa-tags"></i>
                        </div>

                        <!-- Tags Widget Start -->
                        <div class="tags--widget style--1">
                            <ul class="nav">
                                <li><a href="{{route('category')}}"><?= $type[0]->type_name ?></a></li>
                                <li><a href="{{route('category')}}"><?= $type[1]->type_name ?></a></li>
                                <li><a href="{{route('category')}}"><?= $type[2]->type_name ?></a></li>
                            </ul>
                        </div>
                        <!-- Tags Widget End -->
                    </div>
                    <!-- Widget End -->

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
                    <!-- Widget End -->
                </div>
            </div>
            <!-- Main Sidebar End -->
        </div>
    </div>
</div>
<!-- Main Content Section End -->

<script type="text/javascript">
function upComment() {
    var valueName = $('input[name="name"]').val();
    var valueEmail = $('input[name="email"]').val();
    var valueComment = $('textarea[name="comment"]').val();
    var valueToken = $('input[name="_token"]').val();
    var dateUp = new Date();
    var timeComment = [
        dateUp.getFullYear(),
        '-',
        dateUp.getMonth() + 1,
        '-',
        dateUp.getDate(),
        ' ',
        dateUp.getHours(),
        ':',
        dateUp.getMinutes(),
        ':',
        dateUp.getSeconds()
    ].join('');
    if (valueName == '' || valueEmail == '' || valueComment == '') {
        alert('Vui lòng nhập đầy đủ thông tin!');
        return;
    }
    var checkMail = ValidateEmail(valueEmail);
    if (checkMail == false) {
        alert('Địa chỉ email không hợp lệ.');
        return;
    }
    $.ajax({
        url: '{{ route("binhluanpost") }}',
        type: 'POST',
        data: {
            fullname: valueName,
            email: valueEmail,
            comment: valueComment,
            idpost: $('input[name="idpost"]').val(),
            _token: valueToken,
        },
        success: function(data) {
            // alert(data);
            $('.totalbinhluan').html(data);
            $('#binhluanbaiviet').append(
                '<li><div class="comment--item clearfix"><div class="comment--img float--left"><img src="user/img/avatar.jpg" alt=""></div><div class="comment--info"><div class="comment--header clearfix"><p class="name">' +
                valueName + '</p><p class="date">' + timeComment +
                '</p><a href="#" class="reply"><i class="fa fa-mail-reply"></i></a></div><div class="comment--content"><p>' +
                valueComment + '</p></div></div></div></li>');
        },
        error: function(error) {

        }
    });
}

function ValidateEmail(mail) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
        return (true);
    }
    // alert("You have entered an invalid email address!");
    return (false);
}

function showReply(show) {
    if (show != 0) {
        $('show-id-' + show).css('display', 'block');
        alert('true');

    } else {
        alert('false');
    }
}
</script>
@endsection