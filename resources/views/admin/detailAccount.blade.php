@extends('admin.admin')

@section('title', 'Category')

@section('webcontent')
    <!-- Khu nội dung -->
    <div class="right_col" role="main" style="min-height: 673.8px;">
        <!-- KHUNG TIỂU ĐỀ -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel" style="padding:15px!important">
                <div class="x_title" style="border-bottom:none;padding-bottom:0px;margin-bottom:0px">
                    <h2 style="font-family:Verdana;line-height:normal;color:#000">
                        CHỈNH SỬA THÔNG TIN TÀI KHOẢN
                    </h2>
                    <div class="nav navbar-right green">
                        <a href="./settingInfo.html" class="btn btn-success btn-sm">
                            <i class="fa fa-history" aria-hidden="true"></i>
                            Trở lại
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- KHU NỘI DUNG -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row" style="margin-left:0;padding-left:0">
                        <form class="form-horizontal form-label-left">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <style>
                                    .filterpane .search-box {
                                        position: relative;
                                        padding: 5px 10px;
                                        background: #fff;
                                    }

                                        .filterpane .search-box input {
                                            width: calc(100% - 22px);
                                            background: transparent;
                                            border: none;
                                        }

                                        .filterpane .search-box i {
                                            position: absolute;
                                            right: 10px;
                                            top: 8px;
                                            opacity: 0.8;
                                            cursor: pointer;
                                        }

                                        .filterpane .search-box .search-result {
                                            display: none;
                                            position: absolute;
                                            width: 100%;
                                            max-height: 200px;
                                            overflow-x: hidden;
                                            overflow-y: auto;
                                            top: 100%;
                                            left: 0;
                                            background: #fff;
                                            border: 1px solid #ccc;
                                            cursor: pointer;
                                            z-index: 2;
                                        }

                                            .filterpane .search-box .search-result .search-result-item {
                                                margin: 0;
                                                padding: 5px;
                                                border-bottom: 1px dotted #dadada;
                                            }

                                                .filterpane .search-box .search-result .search-result-item:last-child {
                                                    border-bottom: none;
                                                }

                                    .filterpane .single-selected-box {
                                        position: absolute;
                                        top: 1px;
                                        left: 1px;
                                        border-radius: 3px;
                                        background: #fff;
                                        width: calc(100% - 2px);
                                    }

                                        .filterpane .single-selected-box .selected-item {
                                            position: relative;
                                            padding: 5px 10px;
                                        }

                                            .filterpane .single-selected-box .selected-item p.name {
                                                margin: 0;
                                            }

                                            .filterpane .single-selected-box .selected-item i {
                                                position: absolute;
                                                right: 10px;
                                                top: 8px;
                                                opacity: 0.8;
                                                cursor: pointer;
                                            }
                                </style>
                                <div class="form-group" style="display:flex; flex-direction: column">
                                    <label>
                                        Tên<span class="required">*</span>
                                    </label>
                                    <div>
                                        <div class="filterpane" id="branchSelectControl" style="max-width:500px">
                                            <div class="search-box form-control">
                                                <input value="Lê Triệu Long" />
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="form-group" style="display:flex; flex-direction: column">
                                    <label>
                                        Tên tài khoản<span class="required">*</span>
                                    </label>
                                    <div>
                                        <div class="filterpane" id="branchSelectControl" style="max-width:500px">
                                            <div class="search-box form-control" style="background: #ccc;">
                                                <input value="Lê Triệu Long" disabled/>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="form-group" style="display:flex; flex-direction: column">
                                    <label>
                                        Mật khẩu <span class="required">*</span>
                                    </label>
                                    <div>
                                        <input type="password" id="txtName" value="@Model.DisplayName" placeholder="Nhập tên khu vực" class="form-control" style="max-width:500px" />
                                    </div>
                                </div>
                                <div class="form-group" style="display:flex; flex-direction: column">
                                    <label>
                                        Nhập lại mật khẩu <span class="required">*</span>
                                    </label>
                                    <div>
                                        <input type="password" id="txtName" value="@Model.DisplayName" placeholder="Nhập tên khu vực" class="form-control" style="max-width:500px" />
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div id="btb-save" style="margin: 5px 0 5px 0px;" class="btn btn-success">
                                <a href="javascript:Update()" style="color:#fff">
                                    <i class="fa fa-save"></i> Lưu lại
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop