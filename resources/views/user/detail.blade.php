@extends('user.layout')
@section('title','Chi tiết bài viết')

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
                <div class="main--content col-md-8" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <!-- Post Item Start -->
                        <div class="post--item post--single post--title-largest pd--30-0">
                            <div class="post--img">
                                <a href="#" class="thumb"><img src="user/img/post-img/u-16877448070331006424667.jpg" alt=""></a>
                                <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>

                                <div class="post--map">
                                    <div class="map--wrapper">
                                        <div data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="6" data-map-marker="[[23.790546, 90.375583]]"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="post--cats">
                                <ul class="nav">
                                    <li><span><i class="fa fa-folder-open-o"></i></span></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Fitness</a></li>
                                    <li><a href="#">Music</a></li>
                                </ul>
                            </div>

                            <div class="post--info">
                                <ul class="nav meta">
                                    <li><a href="#">Norma R. Hogan</a></li>
                                    <li><a href="#">20 April 2017</a></li>
                                    <li><span><i class="fa fm fa-eye"></i>45k</span></li>
                                    <li><a href="#"><i class="fa fm fa-comments-o"></i>02</a></li>
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
                
                        <!-- Advertisement Start -->
                        <div class="ad--space pd--20-0-40">
                            <a href="#">
                                <img src="img/ads-img/ad-728x90-02.jpg" alt="" class="center-block">
                            </a>
                        </div>
                        <!-- Advertisement End -->

                        <!-- Post Tags Start -->
                        <div class="post--tags">
                            <ul class="nav">
                                <li><span><i class="fa fa-tags"></i></span></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Image</a></li>
                                <li><a href="#">Music</a></li>
                                <li><a href="#">Video</a></li>
                                <li><a href="#">Audio</a></li>
                                <li><a href="#">Latest</a></li>
                                <li><a href="#">Trendy</a></li>
                                <li><a href="#">Special</a></li>
                                <li><a href="#">Recipe</a></li>
                            </ul>
                        </div>
                        <!-- Post Tags End -->

                        <!-- Post Related Start -->
                        <div class="post--related ptop--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">You Might Also Like</h2>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav row" data-ajax-content="inner">
                                    <li class="col-sm-6 pbottom--30">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="#" class="thumb"><img src="user/img/post-img/3525235253.jpg" alt=""></a>
                                                <a href="#" class="cat">Du lịch</a>
                                                <a href="#" class="icon"><i class="fa fa-flash"></i></a>

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
                                                <a href="#">Continue Reading... </a>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>

                                    <li class="col-sm-6 hidden-xs pbottom--30">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="#" class="thumb"><img src="user/img/post-img/3525235253.jpg" alt=""></a>
                                                <a href="#" class="cat">Giải trí</a>
                                                <a href="#" class="icon"><i class="fa fa-flash"></i></a>

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
                                                <a href="#">Continue Reading... </a>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
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

                                                <a href="javascript:void(0)" class="reply" onclick="showReply(<?=$binhluan->id?>)"><i class="fa fa-mail-reply"></i></a>
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

                                <li class="hidden">
                                    <!-- Comment Item Start -->
                                    <div class="comment--item clearfix">
                                        <div class="comment--img float--left">
                                            <img src="user/img/avatar.jpg" alt="">
                                        </div>

                                        <div class="comment--info">
                                            <div class="comment--header clearfix">
                                                <p class="name">M Shyamalan</p>
                                                <p class="date">12 May 2017 at 05:28 pm</p>

                                                <a href="#" class="reply"><i class="fa fa-mail-reply"></i></a>
                                            </div>

                                            <div class="comment--content">
                                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Item End -->

                                    <ul class="comment--items nav hidden">
                                        <li>
                                            <!-- Comment Item Start -->
                                            <div class="comment--item clearfix">
                                                <div class="comment--img float--left">
                                                    <img src="user/img/avatar.jpg" alt="">
                                                </div>

                                                <div class="comment--info">
                                                    <div class="comment--header clearfix">
                                                        <p class="name">Liz Montano</p>
                                                        <p class="date">12 May 2017 at 05:28 pm</p>

                                                        <a href="#" class="reply"><i class="fa fa-mail-reply"></i></a>
                                                    </div>

                                                    <div class="comment--content">
                                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Comment Item End -->
                                        </li>
                                    </ul>
                                </li>
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
                                            <button type="button" class="btn btn-primary" onclick="upComment()">Đăng bình luận</button>
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
                            <div class="widget--title">
                                <h2 class="h4">Danh mục</h2>
                                <i class="icon fa fa-folder-open-o"></i>
                            </div>

                            <!-- Nav Widget Start -->
                            <div class="nav--widget">
                                <ul class="nav">
                                    <li><a href="#"><span>Giáo dục</span><span>(22)</span></a></li>
                                    <li><a href="#"><span>Du lịch</span><span>(16)</span></a></li>
                                </ul>
                            </div>
                            <!-- Nav Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <div class="widget--title">
                                <h2 class="h4">Tags</h2>
                                <i class="icon fa fa-tags"></i>
                            </div>

                            <!-- Tags Widget Start -->
                            <div class="tags--widget style--1">
                                <ul class="nav">
                                    <li><a href="#">Mới</a></li>
                                    <li><a href="#">Hot</a></li>
                                    <li><a href="#">Tin Nóng</a></li>
                                    <li><a href="#">Game</a></li>
                                </ul>
                            </div>
                            <!-- Tags Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
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
                success:function(data) {
                    // alert(data);
                    $('.totalbinhluan').html(data);
                    $('#binhluanbaiviet').append('<li><div class="comment--item clearfix"><div class="comment--img float--left"><img src="user/img/avatar.jpg" alt=""></div><div class="comment--info"><div class="comment--header clearfix"><p class="name">'+valueName+'</p><p class="date">'+timeComment+'</p><a href="#" class="reply"><i class="fa fa-mail-reply"></i></a></div><div class="comment--content"><p>'+valueComment+'</p></div></div></div></li>');
                },
                error:function(error) {

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
                $('show-id-'+show).css('display', 'block');
                alert('true');

            } else {
                alert('false');
            }
        }
    </script>
@endsection
