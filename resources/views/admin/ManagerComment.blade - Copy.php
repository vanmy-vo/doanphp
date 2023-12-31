@extends('admin.admin')

@section('title', 'Bài viết')

@section('webcontent')
<?php

use App\Models\Taikhoan;
use App\Models\Slide;
use Illuminate\Support\Request;


?>
<!-- KHUNG TIỂU ĐỀ -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel" style="padding:15px!important">
            <div class="x_title" style="border-bottom:none;padding-bottom:0px;margin-bottom:0px">
                <h2 style="font-family:Verdana;line-height:normal;color:#000">
                    DANH SÁCH BÀI VIẾT
                </h2>
                <div class="nav navbar-right green">
                    <button type="button" class="btn btn-success btn-sm" onclick="addPost(true, 'create')">
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        Thêm
                    </button>
                    <!-- <a href="/location/add" class="btn btn-success btn-sm">
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        Thêm
                    </a> -->
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<!-- Search bar -->
<style>
    .device-search-box {
        display: inline-block;
        width: fit-content;
        width: -webkit-fit-content;
        margin-right: 15px;
        padding: 3px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

        .device-search-box label {
            margin: 0 5px;
            font-weight: normal;
        }

        .device-search-box .search-box {
            position: relative;
            display: inline-block;
            padding: 5px 25px 5px 10px;
            box-sizing: content-box;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #fff;
        }

    .search-box input {
        background-color: transparent;
        width: 100%;
        max-width: 250px;
        border: none;
        outline: none;
    }

    .search-box i.fa.fa-search {
        position: absolute;
        top: 8px;
        right: 10px;
        cursor: pointer
    }
</style>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 10px">
        <div class="device-search-box col-lg-12 col-md-12" style="display: flex;width: 100%;">
            <label for="c">Tìm</label>
            <div class="search-box">
                <!-- <input placeholder="Nhập tên tài khoản..." value="" onchange="SearchLocation(this)">
                <i onclick="SearchLocation(this.previousElementSibling)" class="fa fa-search"></i> -->
                <input id="search" placeholder="Nhập tên bài viết..." name="searchpost" value="">
            </div>
            <div class="col-md-2" style="margin-left: 1%;">
                <select class="form-control input-edit" name="danhmucsearch" id="timkeimdanhmuc" onchange="changeLoai()">
                    <option value="">Chọn danh mục</option>
                    <?php foreach ($category as $value_category_filter) : ?>
                    <option value="<?= $value_category_filter->id ?>"><?= $value_category_filter->category_name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-2" style="margin-left: 1%;">
                <select class="form-control input-edit" name="loaibaivietsearch">
                    <option value="">Chọn loại bài viết</option>
                    <?php foreach ($type as $value_type_filter) : ?>
                    <option value="<?= $value_type_filter->id ?>"><?= $value_type_filter->type_name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-1" style="margin-left: 1%;display: flex;flex-direction: row-reverse;">
                <label for="a" style="padding-top: 10px;">ẩn/hiện</label>
                <input type="checkbox" name="statussearch" value="0">
            </div>
            <div class="col-md-1" style="margin-left: 1%;display: flex;flex-direction: row-reverse;">
                <label for="n" style="padding-top: 10px;">slideshow</label>
                <input type="checkbox" name="slidesreach" value="0">
            </div>
            <div style="margin-left: 1%;">
                <i onclick="searchPost()" class="fa fa-search btn btn-success"></i>        
            </div>
        </div>
    </div>
</div>

<!-- Danh sách kịch bản (nếu có) -->
<style>
    div.x_panel::-webkit-scrollbar {
        height: 5px;
    }
</style>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
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

                        table.data-table .tc1, table.data-table .tc2, table.data-table .tc3 {
                            text-align: left
                        }
                        table.data-table .tc1, table.data-table .tc2 {
                            min-width: 250px
                        }
                        table.data-table .tc3, table.data-table .tc4 {
                            min-width: 200px;
                        }
                        table.data-table .tc5 {
                            text-align: left;
                            width: 152px
                        }
                        .location-id {
                            display: inline-block
                        }
                </style>
                <table class="data-table">
                    <thead>
                        <tr style="text-transform: capitalize;">
                            <th class="tc1">hình đại diện</th>
                            <th class="tc2">tiêu đề</th>
                            <th class="tc3">Người tạo</th>
                            <th class="tc4">ngày đăng</th>
                            <th class="tc4">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody id="abc">
                        <?php foreach ($list as $value) : ?>
                            <tr data-key="<?= $value->id ?>">
                                <td class="tc1">
                                    <?php $image = Slide::where(['post_id' => $value->id])->first(); ?>
                                    <?php if ($image) { ?>
                                        <?php if ($image->img) { ?>
                                            <?php if (is_file('uploads/posts/'.$image->img)) : ?>
                                            <img src="{{ asset('uploads/posts/' . $image->img) }}" alt="<?= $value->title_post ?>" width="200" title="<?= $value->title_post ?>">
                                            <?php else : ?>
                                            <img src="{{ asset('uploads/noimg/nobanner.jpg') }}" alt="<?= $value->title_post ?>" width="200" title="<?= $value->title_post ?>">
                                            <?php endif; ?>
                                        <?php } else { ?>
                                        <img src="{{ asset('uploads/noimg/nobanner.jpg') }}" alt="<?= $value->title_post ?>" width="200" title="<?= $value->title_post ?>">
                                        <?php } ?>
                                    <?php } else { ?>
                                    <img src="{{ asset('uploads/noimg/nobanner.jpg') }}" alt="<?= $value->title_post ?>" width="200" title="<?= $value->title_post ?>">
                                    <?php } ?>
                                </td>
                                <td class="tc2">
                                    <p><?= $value->title_post ?></p>
                                </td>
                                <td class="tc3">
                                    <?php $taikhoan = Taikhoan::where(['id' => $value->account_id])->first(); ?>
                                    <p><?= $taikhoan->fullname ?></p>
                                </td>
                                <td>
                                    <?php $time = strtotime($value->created_at) ?>
                                    <p><?= date('d-m-Y H:i:s', $time) ?></p>
                                </td>
                                <td class="tc" style="text-transform: capitalize;">                        
                                    <!-- <div class="btn btn-xs btn-success">
                                        <a href="#" style="color: #fff;">
                                            <i class="fa fa-edit"></i> edit
                                        </a>
                                    </div> -->
                                    <button type="button" class="btn btn-xs btn-success" onclick="addPost(true, <?= $value->id ?>)" style="text-transform: inherit;">
                                        <i class="fa fa-edit"></i> edit
                                    </button>
                                    <div class="btn btn-xs btn-danger" onclick="Delete('<?= $value->title_post ?>', '<?= $value->id ?>')" style=""><i class="fa fa-remove"></i> Xoá</div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>
{{ $list->links('admin.pagination-page', ['list' => $list]) }}


<!-- Modal Bộ lọc -->
<style>
    #FilterBG {
        margin: 0;
        padding: 0;
        width: 100vw;
        height: 100vh;
        position: fixed;
        z-index: 998;
        background-color: #000;
        opacity: 0;
        top: 0px;
        left: 0px;
        display: none;
    }

    #FilterContent {
        margin: 0;
        padding: 0;
        width: 100%;
        min-height: 100%;
        position: absolute;
        top: 0px;
        left: 0px;
        z-index: 999;
        display: none;
        opacity: 0;
    }

    #FilterContentCenter {
        margin: 0 auto;
        padding: 20px;
        margin-top: 60px;
        background-color: #fff;
        border-radius: 4px;
        border: 1px solid #ccc;
        width: 95%;
        min-width: 278px;
        max-width: 80%;
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

    .filterpane {
        margin: 5px 0px 0px;
        padding: 10px 0px;
        width: 100%;
    }

        .filterpane.locate {
            margin: 0px 0px 20px 0px;
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
<div id="FilterBG" style="opacity: 0.8"></div>
<div id="FilterContent" style="opacity: 1;text-transform: capitalize;">
    <div id="FilterContentCenter">
        <!-- start from -->
        <form id="addpost" action="{{ route('post.admin.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h3 class="filtergrouptitle">
                CHỈNH SỬA THÔNG TIN BÀI VIẾT
            </h3>
            <div class="filterpane" style="margin-bottom:0px;padding-bottom:0px">
                <div class="row">
                        <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12">
                            <p class="lefttitle">
                                Tiêu đề
                            </p>
                        </div>
                        <div class="col-lg-11 col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control input-edit" value="" placeholder="Tiêu đề bài viết" name="title" />
                        </div>
                        <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12">
                        <p class="lefttitle">
                            slug
                        </p>
                    </div>
                    <div class="col-lg-11 col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control input-edit" value="" placeholder="Slug" disabled name="slugbaiviet" />
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12">
                        <p class="lefttitle">
                            Hình đại diện
                        </p>
                    </div>
                    <div class="col-lg-11 col-md-9 col-sm-9 col-xs-12">
                        <!-- <input type="text" class="form-control input-edit" value="" placeholder="hình đại diện bài viết" /> -->
                        <input type="file" name="imageupload" class="form-control" value="">
                        <img class="imageload" src="{{ asset('image/noimage.jpg') }}" alt="Hình đại diện bài viết">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12">
                        <p class="lefttitle">
                            Mô tả ngắn
                        </p>
                    </div>
                    <div class="col-lg-11 col-md-9 col-sm-9 col-xs-12">
                        <textarea class="form-control input-edit" value="" placeholder="Mô tả ngắn bài viết" name="descriptionshort" /></textarea>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12">
                        <p class="lefttitle">
                            Nội dung
                        </p>
                    </div>
                    <div class="col-lg-11 col-md-9 col-sm-9 col-xs-12">
                        <!-- <textarea type="text" class="form-control input-edit" value="Đây là nội dung" ></textarea> -->
                        <textarea class="form-control editor" name="noidungbaiviet" placeholder="Nội dung bài viết..."></textarea>
                        <!-- <main data-editor="ClassicEditor" data-collaboration="false" data-revision-history="false">
                            <div class="centered">
                                <div class="row row-editor">
                                    <div class="editor-container">
                                        <div class="editor"></div>
                                    </div>
                                </div>
                            </div>
                        </main> -->
                        <script src="{{ asset('ckeditor5/build/ckeditor.js') }}"></script>
                        <?php  ?>
                        <script>ClassicEditor
                            .create( document.querySelector( '.editor' ), {
                                licenseKey: '',
                            } )
                            .then( editor => {
                                console.log(editor);
                                window.editor = editor;
                            } )
                            .catch( error => {
                                console.error( 'Oops, something went wrong!' );
                                console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
                                console.warn( 'Build id: 8fpqy8djw5cr-ww0lbr6vjhkj' );
                                console.error( error );
                            } );
                        </script>
                        <script>
                            // CKEDITOR.replace('editor', {
                            //   filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
                            //   filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
                            //   filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
                            //   filebrowserUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
                            //   filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
                            //   filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
                            // });
                        </script>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12">
                        <p class="lefttitle">
                            danh mục
                        </p>
                    </div>
                    <div class="col-lg-11 col-md-9 col-sm-9 col-xs-12">
                        <!-- <input type="text" class="form-control input-edit" value="" placeholder="" /> -->
                        <select class="form-control input-edit" name="danhmuc">
                            <option value="">--->>>>Chọn danh mục<<<<---</option>
                            <?php foreach ($category as $value_category) : ?>
                            <option value="<?= $value_category->id ?>"><?= $value_category->category_name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12">
                        <p class="lefttitle">
                            tác giả
                        </p>
                    </div>
                    <div class="col-lg-11 col-md-9 col-sm-9 col-xs-12">
                        <!-- <input type="text" class="form-control input-edit" value="" placeholder="" /> -->
                        <select class="form-control input-edit" name="tacgia">
                            <option value="">--->>>>Chọn tác giả<<<<---</option>
                            <?php foreach ($tacgia as $value_tacgia) : ?>
                            <option value="<?= $value_tacgia->id ?>"><?= $value_tacgia->fullname ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12">
                        <p class="lefttitle">
                            loại
                        </p>
                    </div>
                    <div class="col-lg-11 col-md-9 col-sm-9 col-xs-12">
                        <!-- <input type="text" class="form-control input-edit" value="" placeholder="" /> -->
                        <select class="form-control input-edit" name="loaibaiviet">
                            <option value="">--->>>>Chọn loại bài viết<<<<---</option>
                            <?php foreach ($type as $value_type) : ?>
                            <option value="<?= $value_type->id ?>"><?= $value_type->type_name ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            

            <div class="clearfix"></div>
            <div class="filerfooter" style="margin-top:20px">
                <!-- <div class="btn btn-success" onclick="Update()">Lưu lại</div> -->
                <button type="submit" class="btn btn-success" style="text-transform: inherit;">Lưu lại</button>
                <!-- <div class="btn btn-dark" onclick="addPost(false)">Hủy</div> -->
                <button type="button" class="btn btn-dark" onclick="addPost(false)">Hủy</button>
            </div>
        </form>
        <!-- end form -->
    </div>
</div>

<script type="text/javascript">

    function Delete(name, id){
        if (confirm('Bạn có chắc muốn xóa "' + name + '"')){
            // console.log("ok");
            $.ajax({
                url: '{{ route("post.admin.delete") }}',
                type: 'POST',
                data: {
                    id: id,
                    _token: $('input[name="_token"]').val(),
                },
                success:function(data) {
                    alert(data);
                    $('tr[data-key="'+id+'"]').remove();
                },
                error:function(error) {

                }
            });
        }
    }

    function Update(){
        location.reload();
    }


    function addPost(show, action) {
        // alert(ClassicEditor);
        if (!show) {
            $('#FilterBG').stop(true).animate({ opacity: 0 }, 400, function () { $('#FilterBG').css('display', 'none'); });
            $('#FilterContent').stop(true).animate({ opacity: 0 }, 400, function () { $('#FilterContent').css('display', 'none'); });
        } else {
            $('#FilterBG').css('display', 'block').animate({ opacity: '0.8' }, 400);
            $('#FilterContent').css('display', 'block').animate({ opacity: '1' }, 400);
        }
        $('.ck-placeholder').css('text-transform', 'none');
        var idPost = action;
        if (action == 'create') {
            $('.filtergrouptitle').html('THÊM BÀI VIẾT MỚI');
            $('#addpost').attr('action', '{{ route("post.admin.store") }}');
            $('input[name="title"]').val('');
            $('input[name="slugbaiviet"]').val('');
            $('textarea[name="descriptionshort"]').val('');
            $('.imageload').attr('src', '<?=SITE_PATH?>/image/noimage.jpg').css('box-shadow', '1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000, -1px -1px 1px #000');
            $('select[name="danhmuc"]').val('');
            $('select[name="tacgia"]').val(<?=session('user')['userid']?>);
            $('select[name="loaibaiviet"]').val('');
            $('input[name="postid"]').remove();
        } else {
            // alert(idPost);
            $('.filtergrouptitle').html('CẬP NHẬT THÔNG TIN BÀI VIẾT');
            $.ajax({
                url: '{{ route("post.admin.update") }}',
                type: 'POST',
                data: {
                    idPost: idPost,
                    _token: $('input[name="_token"]').val(),
                },
                success:function(data) {
                    // console.log(data['id']);
                    // var value = data.split(',');
                    // console.log(value[id]);
                    $('#addpost').attr('action', '{{ route("post.admin.edit") }}');
                    $('input[name="title"]').val(data['title_post']);
                    $('input[name="slugbaiviet"]').val(data['slug_post']);
                    $('textarea[name="descriptionshort"]').val(data['description']);
                    // $('textarea[name="noidungbaiviet"]').attr('data-placeholder', data['content_post']);
                    // $('.ck-placeholder').attr('data-placeholder', data['content_post']).html(data['content_post']);
                    // $('.ck-content').html(data['content_post']);
                    $('select[name="danhmuc"]').val(data['category_id']);
                    if (data['imageload']) {
                        if (data['imageload'] == 'khongtontai') {
                            $('.imageload').attr('src', '<?=SITE_PATH?>/image/noimage.jpg').css('box-shadow', '1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000, -1px -1px 1px #000');
                        } else {
                            $('.imageload').attr('src', '<?=SITE_PATH?>/uploads/posts/'+data['imageload']).css('box-shadow', '1px 1px 1px #000, -1px 1px 1px    #000, 1px -1px 1px #000, -1px -1px 1px #000').css('width', '100%');
                        }
                    } else {
                        $('.imageload').attr('src', '<?=SITE_PATH?>/image/noimage.jpg').css('box-shadow', '1px 1px 1px #000, -1px 1px 1px #000, 1px -1px 1px #000, -1px -1px 1px #000');
                    }
                    // $('input[name="imageupload"]').val(data['imageload']);
                    $('select[name="tacgia"]').val(data['account_id']);
                    $('select[name="loaibaiviet"]').val(data['type_id']);
                    $('#addpost').append('<input type="hidden" class="form-control input-edit" value="'+data['id']+'" placeholder="Tiêu đề bài viết" name="postid" />')
                },
                error:function(error) {

                },
            });
        }
    }
   
    function searchPost() {
        var tenbaiviet = $('#search').val();
        var danhmuc = $('select[name="danhmucsearch"]').val();
        var loaibaiviet = $('select[name="loaibaivietsearch"]').val();
        var status = $('input[name="statussearch"]').val();
        var slide = $('input[name="slidesreach"]').val();
        // console.log(tenbaiviet);

        // let arr = document.querySelectorAll('tr');
        // var txt1 = arr[1].querySelectorAll('td')[1].querySelector('p').textContent;
        // var txt2 = arr[2].querySelectorAll('td')[1].querySelector('p').textContent;
        // var txt3 = arr[3].querySelectorAll('td')[1].querySelector('p').textContent;
        // const array = [txt1, txt2, txt3];
        // window.sessionStorage.setItem("items", JSON.stringify(array));
        // var storedArray = JSON.parse(sessionStorage.getItem("items"));//no brackets
        // var i;
        // if (storedArray.includes(value)) {
        //     var position = storedArray.indexOf(value) + 1;
        //     $('#abc').html(arr[position]);
        // } else {
        //     alert('not found');
        // }

        $.ajax({
            url: '{{ route("tim") }}',
            type: 'POST',
            data: {
                tenbaiviet: tenbaiviet,
                danhmuc: danhmuc,
                loaibaiviet: loaibaiviet,
                status: status,
                slide: slide,
                _token: $('input[name="_token"]').val(),
            },
            success:function(data) {
                // console.log(data);
                // alert(data);
                // return;
                if (data == 'rong') {
                    alert('Vui lòng nhập thông tin tìm kiếm');
                } else {
                    $('#abc').html(data);
                }
            },
            error:function(error) {

            }
        });
    }

    function changeLoai() {
        var vlauefilter = $('#timkeimdanhmuc').val();
        $.ajax({

            url: '{{ route("filterloai") }}',
            type: 'POST',
            data: {
                vlauefilter: vlauefilter,
                _token: $('input[name="_token"]').val(),
            },
            success:function(data) {
                // alert(data)
                $('select[name="loaibaivietsearch"]').html(data);
            },
            error:function(error) {

            }
        })

    }
</script>
@stop