@extends('admin.admin')

@section('title', 'Category')

@section('webcontent')

<!-- KHUNG TIỂU ĐỀ -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel" style="padding:15px!important">
            <div class="x_title" style="border-bottom:none;padding-bottom:0px;margin-bottom:0px">
                <h2 style="font-family:Verdana;line-height:normal;color:#000">
                    DANH SÁCH DANH MỤC
                </h2>
                <div class="nav navbar-right green">
                    <!-- <a href="/location/add" class="btn btn-success btn-sm">
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        Thêm
                    </a> -->
                    <button type="button" class="btn btn-success btn-sm" onclick="ShowHide(true)">
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        Thêm
                    </button>
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
        <div class="device-search-box">
            <label>Tìm</label>
            <div class="search-box">
                <input placeholder="Nhập tên danh mục..." value="" onchange="SearchLocation(this)">
                <i onclick="SearchLocation(this.previousElementSibling)" class="fa fa-search"></i>
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
                        <tr>
                            <th class="tc1">Tên danh mục</th>
                            <th class="tc2">ngày tạo</th>
                            <!-- <th class="tc3"></th> -->
                            <th class="tc4">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td class="tc1">
                                    <!-- ltlong@gmail.com
                                    <br>
                                    <b>Lê Triệu Long</b> -->
                                    việt nam
                                </td>
                                <td class="tc2">
                                    <!-- <p>Nhân viên</p> -->
                                    <p>31/03/2023</p>
                                </td>
                                <!-- <td class="tc3">
                                    <p>Administrator</p>
                                    <p>31/03/2023</p>
                                </td> -->
                                <td class="tc">      
                                    <!-- <button type="button" class="btn btn-success btn-xs" onclick="listChild(1)">list con</button>
                                    <button type="button" class="btn btn-success btn-xs" onclick="Level(1)">
                                        thêm
                                    </button>   -->                
                                    <!-- <div class="btn btn-xs btn-success"> -->
                                        <!-- <a href="detailAccount.html" style="color: #fff;">
                                            <i class="fa fa-edit"></i> Chi tiết
                                        </a> -->
                                        <button type="button" class="btn btn-success btn-xs" onclick="Level(1)">
                                            <i class="fa fa-edit"></i> Chi tiết
                                        </button>
                                    <!-- </div> -->
                                    <div class="btn btn-xs btn-danger" onclick="Delete('Lê Triệu Long')" style=""><i class="fa fa-remove"></i> Xoá</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tc1">
                                    <!-- ltlong@gmail.com
                                    <br>
                                    <b>Lê Triệu Long</b> -->
                                    châu âu
                                </td>
                                <td class="tc2">
                                    <!-- <p>Nhân viên</p> -->
                                    <p>30/03/2023</p>
                                </td>
                                <!-- <td class="tc3">
                                    <p>Administrator</p>
                                    <p>31/03/2023</p>
                                </td> -->
                                <td class="tc">
                                   <!--  <button type="button" class="btn btn-success btn-xs" onclick="listChild(2)">list con</button>
                                    <button type="button" class="btn btn-success btn-xs" onclick="Level(2)">
                                        thêm
                                    </button>    -->                     
                                    <!-- <div class="btn btn-xs btn-success"> -->
                                        <!-- <a href="detailAccount.html" style="color: #fff;">
                                            <i class="fa fa-edit"></i> Chi tiết
                                        </a> -->
                                        <button type="button" class="btn btn-success btn-xs" onclick="Level(2)">
                                            <i class="fa fa-edit"></i> Chi tiết
                                        </button>
                                    <!-- </div> -->
                                    <div class="btn btn-xs btn-danger" onclick="Delete('Lê Triệu Long')" style=""><i class="fa fa-remove"></i> Xoá</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tc1">
                                    <!-- ltlong@gmail.com
                                    <br>
                                    <b>Lê Triệu Long</b> -->
                                    thế giới
                                </td>
                                <td class="tc2">
                                    <!-- <p>Nhân viên</p> -->
                                    <p>29/03/2023</p>
                                </td>
                                <!-- <td class="tc3">
                                    <p>Administrator</p>
                                    <p>31/03/2023</p>
                                </td> -->
                                <td class="tc">
                                   <!--  <button type="button" class="btn btn-success btn-xs" onclick="listChild(3)">list con</button>
                                    <button type="button" class="btn btn-success btn-xs" onclick="Level(3)">
                                        thêm
                                    </button> -->                        
                                    <!-- <div class="btn btn-xs btn-success"> -->
                                        <!-- <a href="detailAccount.html" style="color: #fff;">
                                            <i class="fa fa-edit"></i> Chi tiết
                                        </a> -->
                                        <button type="button" class="btn btn-success btn-xs" onclick="Level(3)">
                                            <i class="fa fa-edit"></i> Chi tiết
                                        </button>
                                    <!-- </div> -->
                                    <div class="btn btn-xs btn-danger" onclick="Delete('Lê Triệu Long')" style=""><i class="fa fa-remove"></i> Xoá</div>
                                </td>
                            </tr>
                    </tbody>
                </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <style>
            #PageControl {
                margin: 0 auto;
                padding: 0;
            }

            .pageButton {
                display: block;
                margin: 0 5px 0 0;
                padding: 5px 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                cursor: pointer;
                font-size: 13px;
                float: left;
                background: #fff;
            }

                .pageButton:hover {
                    border: 1px solid #333;
                    background: #666;
                    color: #fff;
                }

            #LastPage {
                margin: 0;
            }

            #PageNumber {
                display: block;
                text-align: center;
                margin: 0 5px 0 0;
                padding: 6px 10px !important;
                width: 80px;
                height: unset;
                border-radius: 4px;
                font-size: 13px;
                float: left;
            }

            p.ItemPP {
                float: left;
                margin: 0 0 0 20px;
                padding: 0;
                font-size: 13px;
                line-height: 1;
            }

                p.ItemPP span {
                    display: inline-block;
                }

                p.ItemPP select {
                    display: inline-block;
                    padding: 6px 10px !important;
                    width: 70px;
                    height: unset;
                    border-radius: 4px;
                }
        </style>
            <div id="PageControl">
                <span class="pageButton" id="FirstPage" onclick="GoToPage(1)">
                    <i class="fa fa-step-backward" aria-hidden="true"></i>
                </span>
                <span class="pageButton" id="PreviousPage" onclick="GoToPage(0)">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </span>
                <select id="PageNumber" class="form-control">
                            <option value="1" selected="selected">1</option>
                </select>
                <span class="pageButton" id="NextPage" onclick="GoToPage(2)">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </span>
                <span class="pageButton" id="LastPage" onclick="GoToPage(1)">
                    <i class="fa fa-step-forward" aria-hidden="true"></i>
                </span>
                <p class="ItemPP">
                    <span style="margin-right:5px">
                        Số lượng
                    </span>
                    <select id="ItemPerPage" class="form-control">
                        <option value="20" selected="">20</option>
                        <option value="40">40</option>
                        <option value="80">80</option>
                        <option value="160">160</option>
                    </select>
                    <span style="margin-left:5px">Tài khoản / trang </span>
                </p>
                <div class="clear"></div>
            </div>
    </div>
</div>
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
<div id="FilterContent" style="opacity: 1">
    <div id="FilterContentCenter">
        <h3 class="filtergrouptitle">
            CHỈNH SỬA THÔNG TIN DANH MỤC
        </h3>
        <div class="filterpane" style="margin-bottom:0px;padding-bottom:0px">
            <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                        <p class="lefttitle">
                            Tên danh mục cha
                        </p>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
                        <!-- <input type="text" class="form-control input-edit show-parent" value="" placeholder="Tiêu đề bài viết" /> -->
                        <select class="form-control input-edit parent">
                            <option>Chọn danh mục cha</option>
                            <option value="1">việt nam</option>
                            <option value="2">châu âu</option>
                            <option value="3">thế giới</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
            </div>
            <div class="row child">
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                        <p class="lefttitle">
                            Tên danh mục con
                        </p>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control input-edit show-child" value="" placeholder="Tiêu đề bài viết" />
                    </div>
                    <div class="clearfix"></div>
            </div>        
        </div>
        <div class="clearfix"></div>
        <div class="filerfooter" style="margin-top:20px">
            <div class="btn btn-success" onclick="Update()">Lưu lại</div>
            <div class="btn btn-dark" onclick="ShowHide(false)">Hủy</div>
        </div>
    </div>
</div>
<script type="text/javascript">

    function Delete(name){
        if (confirm('Bạn có chắc muốn xóa "' + name + '"')){
            console.log("ok");
        }
    }

    function Update(){
        location.reload();
    }


    function ShowHide(show) {
        if (!show) {
            $('#FilterBG').stop(true).animate({ opacity: 0 }, 400, function () { $('#FilterBG').css('display', 'none'); });
            $('#FilterContent').stop(true).animate({ opacity: 0 }, 400, function () { $('#FilterContent').css('display', 'none'); });
        } else {
            $('#FilterBG').css('display', 'block').animate({ opacity: '0.8' }, 400);
            $('#FilterContent').css('display', 'block').animate({ opacity: '1' }, 400);
        }
    }

    function Level(id) {
        $('#FilterBG').css('display', 'block').animate({ opacity: '0.8' }, 400);
        $('#FilterContent').css('display', 'block').animate({ opacity: '1' }, 400);
        $('.child').css('display', 'block');
        if (id == 1) {
            $('.parent').val(1);
        } 
        else if (id == 2 ) {
            $('.parent').val(2);
        }
        else {
            $('.parent').val(3);
        }
    }

    // function listChild(id) {
    //     if (id == 1) {

    //     } else
    //     if (id == 2) {

    //     } else {

    //     }
    // }

    
</script>
@stop