
@extends('user.layout')

@section('title','Liên hệ')

@section('web_content')
        <!-- Main Breadcrumb Start -->
        <div class="main--breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    @foreach ($breadcrumb as $key => $bc)
                    <li class="breadcrumb-item{{ $key === count($breadcrumb) - 1 ? ' active' : '' }}">
                        @if ($key === count($breadcrumb))
                            {{ $bc['title'] }}
                        @else
                            <a href="{{ $bc['url'] }}">{{ $bc['title'] }}</a>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- Main Breadcrumb End -->

        <!-- Contact Section Start -->
        <div class="contact--section pd--30-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 ptop--30 pbottom--30">
                        <!-- Contact Info Start -->
                        <div class="contact--info">
                            <ul class="nav">
                                @foreach ($settings as $key => $setting)
                                <li>
                                    <div class="title">
                                        <h3 class="h5"><i class="fa fa-phone-square"></i>Số điện thoại</h3>
                                    </div>

                                    <div class="content">
                                        <p><a href="">{{$setting->phone}}</a></p>
                                    </div>
                                </li>

                                <li>
                                    <div class="title">
                                        <h3 class="h5"><i class="fa fa-envelope-open"></i>Email</h3>
                                    </div>

                                    <div class="content">
                                        <p><a href="">{{$setting->email}}</a></p>
                                    </div>
                                </li>

                                <li>
                                    <div class="title">
                                        <h3 class="h5"><i class="fa fa-map-marker"></i>Địa chỉ</h3>
                                    </div>

                                    <div class="content">
                                        <p><a href="">{{$setting->address_}}</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <h3 class="h5"><i class="fa fa-facebook">acebook: </i><a href="{{$setting->linkfb}}"><u>truy cập tại đây<u></a></h3>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Contact Info End -->
                    </div>

                    <div class="col-md-9 col-sm-8 ptop--30 pbottom--30">
                        <!-- Comment Form Start -->
                        <div class="comment--form">
                            <div class="comment-respond">
                                <form>
                                    <div class="status"></div>
                                    <div class="row">
                                        <div class="col-xs-6 col-xxs-12">
                                            <label>
                                                <span>Họ và tên *</span>
                                                <input type="text" id="fullname" name="fullname" class="form-control" required>
                                            </label>

                                            <label>
                                                <span>Địa chỉ Email *</span>
                                                <input type="email" id="email" name="email" class="form-control" required>
                                            </label>

                                            <label>
                                                <span>Tiêu đề</span>
                                                <input type="text" id="title_contact" name="title_contact" class="form-control">
                                            </label>
                                        </div>

                                        <div class="col-xs-6 col-xxs-12">
                                            <label>
                                                <span>Nội dung *</span>
                                                <textarea id="content_contact" name="content_contact" class="form-control" required></textarea>
                                            </label>
                                        </div>

                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary btn-message">Gửi tin nhắn</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Comment Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->
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