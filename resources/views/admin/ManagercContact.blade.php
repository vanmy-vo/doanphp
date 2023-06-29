@extends('admin.admin')

@section('title', 'Category')

@section('webcontent')
{{-- View Form --}}
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
<div class="modal fade" id="viewContact" tabindex="-1" role="dialog" aria-labelledby="viewContact" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h3 class="filtergrouptitle modal-title text-white text-uppercase" id="exampleModalPopoversLabel" style="text-align: center;">THÔNG TIN LIÊN HỆ</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <div id="FilterContentCenter">
                    <div class="filterpane" style="margin-bottom:0px;padding-bottom:0px">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <p class="lefttitle">Email</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <p class="lefttitle">Tên</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <p class="lefttitle">Tiêu đề</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <p class="lefttitle">Nội dung</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="filerfooter" style="margin-top:20px">
                        <button class="btn btn-dark">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End View Form --}}

{{-- Add Form --}}
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
<div class="modal fade" id="addContact" tabindex="-1" role="dialog" aria-labelledby="addContact" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h3 class="filtergrouptitle modal-title text-white text-uppercase" id="exampleModalPopoversLabel"  style="text-align: center;">THÊM THÔNG TIN LIÊN HỆ</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" id="updateContactForm" method="">
                    <div id="FilterContentCenter">
                        <div class="filterpane" style="margin-bottom:0px;padding-bottom:0px">
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
                                    <p class="lefttitle">Tên</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control input-edit" value="" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Tiêu đề</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control input-edit" value="" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Nội dung</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea type="text" class="form-control input-edit" value="" ></textarea>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="filerfooter" style="margin-top:20px">
                            <button class="btn btn-success">Thêm</button>
                            <button class="btn btn-dark">Hủy</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- End Add Form --}}

{{-- Edit Form --}}
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
<div class="modal fade" id="updateContact" tabindex="-1" role="dialog" aria-labelledby="updateContact" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h3 class="filtergrouptitle modal-title text-white text-uppercase" id="exampleModalPopoversLabel"  style="text-align: center;">SỬA THÔNG TIN LIÊN HỆ</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="" id="updateContactForm" method="">
                    <div id="FilterContentCenter">
                        <div class="filterpane" style="margin-bottom:0px;padding-bottom:0px">
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
                                    <p class="lefttitle">Tên</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control input-edit" value="" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Tiêu đề</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control input-edit" value="" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Nội dung</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea type="text" class="form-control input-edit" value="" ></textarea>
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
</div>
{{-- End Edit Form --}}

<!-- KHUNG TIỂU ĐỀ -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel" style="padding:15px!important">
            <div class="x_title" style="border-bottom:none;padding-bottom:0px;margin-bottom:0px">
                <h2 style="font-family:Verdana;line-height:normal;color:#000">DANH SÁCH LIÊN HỆ</h2>
                <div class="nav navbar-right green">
                    <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addContact"><i class="fa fa-plus-square" aria-hidden="true"></i> Thêm</a>
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
                <input placeholder="Nhập tên liên h..." value="" onchange="SearchLocation(this)">
                <i onclick="SearchLocation(this.previousElementSibling)" class="fa fa-search"></i>
            </div>
        </div>
    </div>
</div>

<!-- Display Table -->
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
                        <th class="tc1">Họ tên</th>
                        <th class="tc1">Email</th>
                        <th class="tc2">Tiêu đề</th>
                        <th class="tc3">Nội dung</th>
                        <th class="tc5">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tc1">Nguyễn Văn A</td>
                        <td class="tc1">demo@gmail.com</td>
                        <td class="tc2">Game công nghệ</td>
                        <td class="tc3">Mùa thu lá vàng rơi rơi rơi rơi...</td>
                        <td class="tc">
                            <a class="btn btn-xs btn-success" data-toggle="modal" data-target="#viewContact"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-xs btn-success" data-toggle="modal" data-target="#updateContact"><i class="fa fa-pencil-square-o"></i></a>
                            <a class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- Panigation --}}
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
                <span style="margin-right:5px">Số lượng</span>
                <select id="ItemPerPage" class="form-control">
                    <option value="20" selected="">20</option>
                    <option value="40">40</option>
                    <option value="80">80</option>
                    <option value="160">160</option>
                </select>
                <span style="margin-left:5px">Liên hệ / trang </span>
            </p>
            <div class="clear"></div>
        </div>
    </div>
</div>

<script>
    // function Delete(name){
    //     if (confirm('Bạn có chắc muốn xóa "' + name + '"')){
    //         console.log("ok");
    //     }
    // }

    // function Update(){
    //     location.reload();
    // }


     // Hiển thị / Tắt popup bộ lọ
    // function ShowHide(show) {
    //     if (!show) {
    //         $('#FilterBG').stop(true).animate({ opacity: 0 }, 400, function () { $('#FilterBG').css('display', 'none'); });
    //         $('#FilterContent').stop(true).animate({ opacity: 0 }, 400, function () { $('#FilterContent').css('display', 'none'); });
    //     } else {
    //         $('#FilterBG').css('display', 'block').animate({ opacity: '0.8' }, 400);
    //         $('#FilterContent').css('display', 'block').animate({ opacity: '1' }, 400);
    //     }
    // }

 
</script>
@stop