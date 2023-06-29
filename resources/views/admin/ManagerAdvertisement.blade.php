@extends('admin.admin')

@section('title', 'Quản lý quản cáo')

@section('webcontent')
{{-- View Form --}}
<style>
    #FilterContentCenter {
        margin: auto;
        background-color: #fff;
        border-radius: 5px;
        width: 95%;
        min-width: 278px;
        max-width: 450px;
        position: relative;
    }

    /* .filtergrouptitle {
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
            } */

    .scroll {
        border: 1px solid #ccc;
        height: 195px;
        overflow-y: scroll;
    }

    .filterpane .row {
        /* margin: 20px 0px 5px 0px; */
        /* margin-top: 15px; */
        background-color: #eae9e9;
        border-radius: 5px;
    }

    .input-edit{
        padding-left: 17px;
    }
</style>
<div class="modal fade" id="viewAds" tabindex="-1" role="dialog" aria-labelledby="viewAds" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h3 class="modal-title text-white text-uppercase" id="exampleModalPopoversLabel" style="text-align: center;">Thông tin slideshow</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <div id="FilterContentCenter">
                    <div class="filterpane">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label class="col-md-6">Tiêu đề:</label>
                                <p class="col-md-6">Quảng cáo Samsung</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label class="col-md-6">Hình ảnh:</label>
                                <img src="{{asset('user/img/ads-img/black-pink.jpg')}}" alt="" width="200" height="200" style="margin-top: 15px; object-fit:fill">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label class="col-md-6">Tên đường dẫn: </label>
                                <p class="col-md-6">Samsungabc.com</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <label class="col-md-6">Liên kết: </label>
                                <p class="col-md-6" style="word-wrap: break-word;">http://localhost:8080/doanphplaravelmoi/doanphp/public/admin/ads</p>
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
<div class="modal fade" id="addAds" tabindex="-1" role="dialog" aria-labelledby="addAds" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h3 class="filtergrouptitle modal-title text-white text-uppercase" id="exampleModalPopoversLLabel"  style="text-align: center;">Thêm Slideshow</h3>
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
                                    <p class="lefttitle">Tiêu đề</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control input-edit" value=""/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
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
                                    <p class="lefttitle">Tên đường dẫn</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control input-edit" value="" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Liên kết</p>
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
                                    <p class="lefttitle">Tiêu đề</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control input-edit" value=""/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
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
                                    <p class="lefttitle">Tên đường dẫn</p>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control input-edit" value="" />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <p class="lefttitle">Liên kết</p>
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
                <h2 style="font-family:Verdana;line-height:normal;color:#000">DANH SÁCH QUẢNG CÁO</h2>
                <div class="nav navbar-right green">
                    <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addAds"><i class="fa fa-plus-square" aria-hidden="true"></i> Thêm</a>
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
            <label>Tìm kiếm</label>
            <div class="search-box">
                <input placeholder="Nhập..." value="" onchange="SearchLocation(this)">
                <i onclick="SearchLocation(this.previousElementSibling)" class="fa fa-search"></i>
            </div>
        </div>
    </div>
</div>

<!-- Table -->
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
                    table.data-table .tc1, table.data-table .tc2, table.data-table .tc4, table.data-table .tc3 {
                        margin: auto;
                        text-align: center;
                    }
                    .location-id {
                        display: inline-block
                    }
            </style>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th class="tc1">Tiêu đề</th>
                        <th class="tc2">Hình ảnh</th>
                        <th class="tc3">Tên đường dẫn</th>
                        <th class="tc4">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>1</td>
                            <td class="tc1">Quảng cáo samsung</td>
                            <td class="tc2"><img src="{{asset('user/img/ads-img/black-pink.jpg')}}" alt="" width="50" height="50"></td>
                            <td class="tc3"><a href="http://localhost:8080/doanphplaravelmoi/doanphp/public/admin/ads" target="_blank">samsungabvcd.com</a></td>
                            <td class="tc">                        
                                <a class="btn btn-xs btn-success" data-toggle="modal" data-target="#viewAds"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-xs btn-success" data-toggle="modal" data-target="#updateAds"><i class="fa fa-pencil-square-o"></i></a>
                                <a class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- Pagination --}}
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
@stop