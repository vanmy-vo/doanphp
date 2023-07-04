@extends('admin.admin')

@section('title', 'Quản lý cài đặt')

@section('webcontent')
{{-- Edit Form --}}
{{-- <style>
    #FilterContentCenter {
        margin: auto;
        background-color: #fff;
        border-radius: 4px;
        width: 95%;
        min-width: 278px;
        max-width: 450px;
        position: relative;
    }

    .filtergrouptitle {
        margin: 20px 0px 0px 0px;
        padding: 0px;
        font-size: 20px;
    }

        .filtergrouptitle.floatleft {
            margin: 0px 10px 0px 0px;
            padding: 10px;
            line-height: 1;
            border: 1px dotted #ccc;
            border-radius: 5px;
            float: left;
        }

            .filtergrouptitle.floatleft.focus {
                background: #ccc;
            }

    .scroll {
        border: 1px solid #ccc;
        height: 195px;
        overflow-y: scroll;
    }

    .inputtext {
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
        text-align: center;
    }

    .filterpane .row {
        margin: 0px 0px 5px 0px;
        padding: 3px 0px 3px 0px;
        background-color: #eae9e9;
        border-radius: 4px;
    }

        .filterpane .row.selected {
            background-color: var(--secondary);
            color: #fff;
        }

    .lefttitle {
        margin: 10px 0px 0px 0px;
        padding: 0px;
        line-height: 1;
    }
    .input-edit{
        padding-left: 17px;
    }
</style>
<div class="modal fade" id="updateAds" tabindex="-1" role="dialog" aria-labelledby="updateAds" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h3 class="filtergrouptitle modal-title text-white text-uppercase" id="exampleModalPopoversLabel"  style="text-align: center;">SỬA THÔNG TIN Slideshow</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" id="updateAdsForm" method="">
                    <div id="FilterContentCenter">
                        <div class="filterpane" style="margin-bottom:0px;padding-bottom:0px">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Hình ảnh</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="file" class="form-control input-edit" value="" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Địa chỉ</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control input-edit" value=""/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Mô tả</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control input-edit" value="" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Email</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control input-edit" value=""/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Số điện thoại</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control input-edit" value=""/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Facebook</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control input-edit" value=""/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="filerfooter" style="margin-top:20px">
                            <button class="btn btn-success">Lưu</button>
                            <button class="btn btn-dark">Hủy</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}
{{-- End Edit Form --}}

<!-- KHUNG TIỂU ĐỀ -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel" style="padding:15px!important">
            <div class="x_title" style="border-bottom:none;padding-bottom:0px;margin-bottom:0px">
                <h2 style="font-family:Verdana;line-height:normal;color:#000">CÀI ĐẶT WEBSITE</h2>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<!-- Table -->
{{-- <style>
    div.x_panel::-webkit-scrollbar {
        height: 5px;
    }
</style> --}}
<div class="row">
    {{-- <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel" style="padding:15px;overflow:auto">
            <style>
                table.data-table {
                    margin-top: 10px;
                    width: 100%;
                }

                    table.data-table thead tr {
                        color: #fff;
                        background-color: var(--secondary);
                        border: none;
                    }

                    table.data-table th {
                        padding: 5px 10px;
                    }

                    table.data-table td {
                        padding: 10px;
                    }

                    table.data-table th {
                        border: 1px solid var(--secondary);
                    }

                    table.data-table td:first-child {
                        border-left: 1px solid var(--secondary);
                    }

                    table.data-table td {
                        border-right: 1px dotted var(--secondary-light);
                        border-bottom: 1px dotted var(--secondary-light);
                        vertical-align: top;
                    }

                        table.data-table td:last-child {
                            border-right: 1px solid var(--secondary);
                        }

                        table.data-table td p {
                            margin-bottom: 5px;
                        }

                            table.data-table td p.title {
                                font-size: 15px;
                            }

                                table.data-table td p.title input {
                                    width: 100%;
                                    padding: 0;
                                    border: none;
                                    outline: none;
                                    display: none;
                                    font-size: 14px;
                                    border-bottom: 1px dotted #333;
                                }

                        table.data-table td div.references {
                            margin-top: 15px;
                            font-size: 14px;
                        }

                            table.data-table td div.references p {
                                display: inline-block;
                                padding: 0;
                                margin: 5px 15px 0px 0px;
                                border-bottom: 1px dotted #333;
                                cursor: pointer;
                            }

                        table.data-table td p span.properties {
                            display: inline-block;
                            border-radius: 3px;
                            margin: 2px 5px 5px 0px;
                            padding: 2px 5px;
                            width: fit-content;
                            width: --webkit-fit-content
                        }

                            table.data-table td p span.properties.default {
                                border: 1px solid var(--thirdary);
                                color: var(--thirdary)
                            }

                    table.data-table tr:last-child {
                        border-bottom: 1px solid var(--secondary)
                    }
                    table.data-table .tc1 {
                        margin: auto;
                        text-align: left;
                        word-wrap: break-word;
                    }
                    .location-id {
                        display: inline-block
                    }
            </style>
            <table class="data-table">
                <thead>
                    <tr>
                        <th class="col-md-2 tc1">Logo</th>
                        <th class="col-md-2 tc1">Địa chỉ</th>
                        <th class="col-md-2 tc1">Mô tả</th>
                        <th class="col-md-2 tc1">Email</th>
                        <th class="col-md-2 tc1">Số điện thoại</th>
                        <th class="col-md-2 tc1">Facebook</th>
                        <th class="col-md-2 tc1">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
<<<<<<< HEAD
                            <td class="col-md-2 tc1"><img src="{{asset('user/img/ads-img/black-pink.jpg')}}" alt="" width="50" height="50"></td>
                            <td class="col-md-2 tc1">TP.Hồ Chí Minh</td>
                            <td class="col-md-2 tc1">trang web Mô tả trang web Mô tả trang webMô tả trang webMô tả trang web Mô tả trang web...</td>
                            <td class="col-md-2 tc1">demo@gmail.com</td>
                            <td class="col-md-2 tc1">0944 123 123</td>
                            <td class="col-md-2 tc1">http://localhost:8080/doanmonhoc/public/admin/setting</td>
                            <td class="col-md-2 tc1"><a class="btn btn-xs btn-success" data-toggle="modal" data-target="#updateAds"><i class="fa fa-pencil-square-o"></i></a></td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div> --}}
    <style>
        #FilterContentCenter {
            margin: auto;
            background-color: #fff;
            border-radius: 4px;
            width: 95%;
            min-width: 278px;
            max-width: 450px;
            position: relative;
        }

        .filtergrouptitle {
            margin: 20px 0px 0px 0px;
            padding: 0px;
            font-size: 20px;
        }

            .filtergrouptitle.floatleft {
                margin: 0px 10px 0px 0px;
                padding: 10px;
                line-height: 1;
                border: 1px dotted #ccc;
                border-radius: 5px;
                float: left;
            }

                .filtergrouptitle.floatleft.focus {
                    background: #ccc;
                }

        .scroll {
            border: 1px solid #ccc;
            height: 195px;
            overflow-y: scroll;
        }

        .inputtext {
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
            text-align: center;
        }

        .filterpane .row {
            margin: 0px 0px 5px 0px;
            padding: 3px 0px 3px 0px;
            background-color: #eae9e9;
            border-radius: 4px;
        }

            .filterpane .row.selected {
                background-color: var(--secondary);
                color: #fff;
            }

        .lefttitle {
            margin: 10px 0px 0px 0px;
            padding: 0px;
            line-height: 1;
        }
        .input-edit{
            padding-left: 17px;
        }
    </style>
    <div id="updateAds" tabindex="-1" role="dialog" aria-labelledby="updateAds" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h3 class="filtergrouptitle modal-title text-white text-uppercase" style="text-align: center;">Cài đặt website</h3>
                </div>

                <div class="modal-body">
                    <form action="" id="updateAdsForm" method="">
                        <div id="FilterContentCenter">
                            <div class="filterpane" style="margin-bottom:0px;padding-bottom:0px">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <img src="{{asset('user/img/ads-img/black-pink.jpg')}}" alt="" width="100" height="100">                                    
                                    </div>

                                     <div class="col-md-4 col-sm-3 col-xs-12">
                                        <p class="lefttitle">Thay đổi logo mới</p>
                                    </div>

                                    <div class="col-md-8 col-sm-9 col-xs-12">
                                        <input type="file" class="form-control input-edit" />
                                    </div>
                                    <div class="clearfix"></div>
=======
                            <td class="col-md-2 tc1"><img src="{{asset('user/img/ads-img/black-pink.jpg')}}" alt=""
    width="50" height="50"></td>
    <td class="col-md-2 tc1">TP.Hồ Chí Minh</td>
    <td class="col-md-2 tc1">trang web Mô tả trang web Mô tả trang webMô tả trang webMô tả trang web Mô tả trang web...
    </td>
    <td class="col-md-2 tc1">demo@gmail.com</td>
    <td class="col-md-2 tc1">0944 123 123</td>
    <td class="col-md-2 tc1">http://localhost:8080/doanphplaravelmoi/doanphp/public/admin/setting</td>
    <td class="col-md-2 tc1"><a class="btn btn-xs btn-success" data-toggle="modal" data-target="#updateAds"><i
                class="fa fa-pencil-square-o"></i></a></td>
    </tr>
    </tbody>
    </table>
</div>
</div> --}}
<style>
#FilterContentCenter {
    margin: auto;
    background-color: #fff;
    border-radius: 4px;
    width: 95%;
    min-width: 278px;
    max-width: 450px;
    position: relative;
}

.filtergrouptitle {
    margin: 20px 0px 0px 0px;
    padding: 0px;
    font-size: 20px;
}

.filtergrouptitle.floatleft {
    margin: 0px 10px 0px 0px;
    padding: 10px;
    line-height: 1;
    border: 1px dotted #ccc;
    border-radius: 5px;
    float: left;
}

.filtergrouptitle.floatleft.focus {
    background: #ccc;
}

.scroll {
    border: 1px solid #ccc;
    height: 195px;
    overflow-y: scroll;
}

.inputtext {
    margin: 0px 0px 0px 0px;
    padding: 0px 0px 0px 0px;
    text-align: center;
}

.filterpane .row {
    margin: 0px 0px 5px 0px;
    padding: 3px 0px 3px 0px;
    background-color: #eae9e9;
    border-radius: 4px;
}

.filterpane .row.selected {
    background-color: var(--secondary);
    color: #fff;
}

.lefttitle {
    margin: 10px 0px 0px 0px;
    padding: 0px;
    line-height: 1;
}

.input-edit {
    padding-left: 17px;
}
</style>
<div id="updateAds" tabindex="-1" role="dialog" aria-labelledby="updateAds" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h3 class="filtergrouptitle modal-title text-white text-uppercase" style="text-align: center;">Cài đặt
                    website</h3>
            </div>
            <div class="modal-body">
                <form id="updateAdsForm" action="{{ route('post.admim.updatesetting') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div id="FilterContentCenter">
                        <div class="filterpane" style="margin-bottom:0px;padding-bottom:0px">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <!-- <img src="{{asset('user/img/ads-img/black-pink.jpg')}}" alt="" width="100" height="100">         -->
                                    <?php if ($databases[0]->linkimage == '' || $databases[0]->linkimage == null) { ?>
                                    <img id="preview-image-before-upload" src="{{ asset('user/img/ads-img/black-pink.jpg') }}"
                                        alt="preview image" width="100" height="100" value="">
                                    <?php } else { ?>
                                    <img id="preview-image-before-upload" src="<?= $databases[0]->linkimage ?>"
                                     alt="preview image" width="100" height="100" value="">
                                    <?php } ?>
>>>>>>> 2494320075624d136d25d8dc8b0fd5b0139c3146
                                </div>
                                <div class="col-md-4 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Thay đổi logo mới</p>
                                </div>
                                <div class="col-md-8 col-sm-9 col-xs-12">
                                    <input type="file" id="image" name="image" class="form-control input-edit">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Địa chỉ</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input id="address_" type="text" class="form-control input-edit"
                                        value="<?= $databases[0]->address_ ?>" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Mô tả</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input id="describe" type="text" class="form-control input-edit"
                                        value="<?= $databases[0]->describe ?>" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Email</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input id="email" type="email" class="form-control input-edit"
                                        value="<?= $databases[0]->email ?>" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Số điện thoại</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input id="phone" type="text" class="form-control input-edit"
                                        value="<?= $databases[0]->phone ?>" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Facebook</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input id="linkfb" type="text" class="form-control input-edit"
                                        value="<?= $databases[0]->linkfb ?>" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="filerfooter" style="margin-top:10px">
                            <span id="message" style="display:none; color:#029e04; margin-bottom:10px"> Cập nhật thành
                                công </span>
                            <button class="btn btn-success" type="commit">Cập nhật</button>
                        </div>
                    </div>
                </form>

                <script>
                $(document).ready(function() {
                    $('#image').change(function() {
                        let reader = new FileReader();
                        reader.onload = (e) => {
                            $('#preview-image-before-upload').attr('src', e.target
                                .result);
                        }
                        reader.readAsDataURL(this.files[0]);
                    });
                    $('#updateAdsForm').submit(function(e) {
                        var formData = $(this).serialize();
                        e.preventDefault();
                        var address_ = $('#address_').val();
                        var describe = $('#describe').val();
                        var email = $('#email').val();
                        var phone = $('#phone').val();
                        var linkfb = $('#linkfb').val();
                        var image = 'C:\\Users\\ADMIN\\Pictures\\Screenshots\\abc.png';
                        console.log(image);
                        if (image == ""){
                            image = '<?= $databases[0]->linkimage ?>';
                        }
                        if (address_ == "" || describe == "" || email == "" || phone == "" || linkfb == ""){
                            alert("Không được bỏ trống thông tin");
                            return;
                        }
                        $.ajax({
                            url: '{{ route("post.admim.updatesetting") }}',
                            type: 'POST',
                            data: {
                                address_: address_,
                                describe: describe,
                                email: email,
                                phone: phone,
                                linkfb: linkfb,
                                image: image,
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                $('#message').css('display', 'flex')
                            },
                            error: function(response) {
                                alert('Cập nhật thất bại');
                            }
                        });
                    });
                });
                </script>
            </div>
        </div>
    </div>
</div>
</div>
@stop