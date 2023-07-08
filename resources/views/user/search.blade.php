@extends('user.layout')
@section('title','Trang tìm kiếm')

@section('web_content')
    <!-- Main Content Section Start -->
    <div class="main-content--section pbottom--30">
        <div class="container">
            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <!-- Search Widget Start -->
                        <div class="search--widget ptop--30">
                            <form action="{{route('search')}}" data-form="validate" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" placeholder="Tìm kiếm..." class="form-control" required>

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn-link"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Search Widget End -->

                        <!-- Page Title Start -->
                        <div class="page--title ptop--30">
                            <h2 class="h2">Kết quả: {{$keyword}}<span></span></h2>
                        </div>
                        <!-- Page Title End -->

                        <!-- Post Items Start -->
                        @if($results != [])
                        <div class="post--items post--items-5 pd--30-0">
                            <ul class="nav">
                                @foreach ($results as $key => $result)
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--title-larger">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 col-xs-4 col-xxs-12">
                                                <div class="post--img">
                                                    
                                                    @if(!$result->post_image)
                                                        <a href="" class="thumb"><img src="" alt="Image not found!"></a>
                                                    @else
                                                        <a href="" class="thumb"><img src="{{ asset('uploads/posts/' . $result->post_image->img) }}"></a>
                                                    @endif

                                                    <a href="" class="cat">{{$result->type->type_name}}</a>
                                                </div>
                                            </div>

                                            <div class="col-md-8 col-sm-12 col-xs-8 col-xxs-12">
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="">{{$result->account->fullname}}</a></li>
                                                        <li><a href="">{{$result->created_at}}</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="{{ route('chitietbaiviet', $result->slug_post) }}" class="btn-link">{{$result->title_post}}</a></h3>
                                                    </div>
                                                </div>

                                                <div class="post--content">
                                                    <p>{{$result->description}}</p>
                                                </div>

                                                <div class="post--action">
                                                    <a href="">Đọc tiếp...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @else
                        <p>Khong co ket qua</p>
                        @endif
                        <!-- Post Items End -->

                        <!-- Pagination Start -->
                        <div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30">
                            <p class="pagination-hint float--left">Trang {{$results->currentPage()}} / {{$results->lastPage()}}</p>
                        
                            <ul class="pagination float--right">
                                @if ($results->currentPage() > 1)
                                    <li><a href="{{$results->previousPageUrl()}}"><i class="fa fa-long-arrow-left"></i></a></li>
                                @else
                                    <li class="disabled"><span><i class="fa fa-long-arrow-left"></i></span></li>
                                @endif
                        
                                @foreach ($results->getUrlRange(max($results->currentPage() - 2, 1), min($results->currentPage() + 2, $results->lastPage())) as $page => $url)
                                    @if ($page == $results->currentPage())
                                        <li class="active"><span>{{$page}}</span></li>
                                    @else
                                        <li><a href="{{$url}}">{{$page}}</a></li>
                                    @endif
                                @endforeach
                        
                                @if ($results->currentPage() < $results->lastPage())
                                    <li><a href="{{$results->nextPageUrl()}}"><i class="fa fa-long-arrow-right"></i></a></li>
                                @else
                                    <li class="disabled"><span><i class="fa fa-long-arrow-right"></i></span></li>
                                @endif
                            </ul>
                        </div>
                        
                        <!-- Pagination End -->
                    </div>
                </div>
                <!-- Main Content End -->

                <!-- Main Sidebar Start -->
                <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <!-- Widget Start -->
                        {{-- <div class="widget">
                            <!-- Search Widget Start -->
                            <div class="search--widget">
                                <form action="#" data-form="validate">
                                    <div class="input-group">
                                        <input type="search" name="search" placeholder="Search..." class="form-control" required>

                                        <div class="input-group-btn">
                                            <button type="submit" class="btn-link"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Search Widget End -->
                        </div> --}}
                        <!-- Widget End -->

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
@endsection
