<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>QR Ticket 1.0 - City Games</title>
    <link id="favicon" rel="icon" type="image/x-icon" href="../Lib/cccd.png" />
    <link rel="apple-touch-icon" href="@URL/favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="@URL/favicon-270x270.png" />
    <link href="../../Lib/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Lib/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../Lib/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="../../Lib/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="../../Lib/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <link href="../../Lib/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="../../Lib/vendors/custom.css" rel="stylesheet">
    <script src="../../Lib/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../../Lib/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="../../Lib/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <script src="../../Lib/ckeditor/ckeditor.js"></script>
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 8px;
        }

        div::-webkit-scrollbar {
            width: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background-color: #cccccc;
            opacity: 0.5;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            border-radius: 5px;
            background-color: #333333;
            opacity: 0.5;
        }

        #Loading {
            margin: 0;
            padding: 0;
            background: url(/StaticData/SystemImages/dark70.png);
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0px;
            left: 0px;
            z-index: 9999;
            display: none;
        }

        .ui-timepicker-container {
            position: absolute;
            overflow: hidden;
            box-sizing: border-box;
        }

        .ui-timepicker, .ui-timepicker-viewport {
            box-sizing: content-box;
            height: 205px;
            display: block;
            margin: 0;
        }

        .ui-timepicker {
            list-style: none;
            padding: 0 1px;
            text-align: center;
        }

        .ui-timepicker-viewport {
            padding: 0;
            overflow: auto;
            overflow-x: hidden;
        }

        .ui-timepicker-standard {
            font-family: Verdana,Arial,sans-serif;
            font-size: 1.1em;
            background-color: #FFF;
            border: 1px solid #AAA;
            color: #222;
            margin: 0;
            padding: 2px;
        }

            .ui-timepicker-standard a {
                border: 1px solid transparent;
                color: #222;
                display: block;
                padding: .2em .4em;
                text-decoration: none;
            }

            .ui-timepicker-standard .ui-state-hover {
                background-color: #DADADA;
                border: 1px solid #999;
                font-weight: 400;
                color: #212121;
            }

            .ui-timepicker-standard .ui-menu-item {
                margin: 0;
                padding: 0;
            }

        .ui-timepicker-corners, .ui-timepicker-corners .ui-corner-all {
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
        }

        .ui-timepicker-hidden {
            display: none;
        }

        .ui-timepicker-no-scrollbar .ui-timepicker {
            border: none;
        }

        sup.countlink i {
            color: #E74C3C;
            font-size: 10px !important;
        }

        .dropdown-menu > li > a {
            font-family: Arial !important;
        }

        ul.msg_list li a .message {
            margin-top: 5px;
            color: #333;
            font-size: 12px;
        }

        ul.msg_list li.read {
            background-color: #fff;
        }

        .dropdown-menu > li.read > a {
            color: #999898;
        }

        ul.msg_list li.read a .message {
            color: #999898;
        }

        .countlink {
            display: none;
        }

        .userlink, .reflink {
            display: inline-block;
            color: #32a3dc;
            text-decoration: none;
            margin: 0 5px 0 0;
        }

            .userlink:hover, .reflink:hover {
                color: #0f7cb3;
                text-decoration: none;
            }

            .userlink.dotted {
                margin: 0 8px 0 0;
            }

            .userlink.main {
                color: #0f7cb3;
                font-weight: bold;
            }

            .userlink.key {
                color: #fcba67;
            }

        .x_title h2 {
            color: #000;
        }

        .desktop {
            display: block;
        }

        .mobile {
            display: none;
        }

        @@media screen and (max-width: 768px) {
            #MainLogo {
                height: unset !important;
                width: 50px;
            }

            .x_title h2 {
                margin: 0px 0 6px 0;
                padding: 0;
                width: 100%;
                float: none;
                font-size: 15px;
                text-align: center;
            }

            .navbar-right {
                text-align: center;
                margin-top: 15px;
            }

            .desktop {
                display: none;
            }

            .mobile {
                display: block;
            }
        }

        div.childcol {
            padding: 0 !important;
        }

        .quickcall {
            display: inline-block;
            border-radius: 11px;
            margin: 0;
        }

        .required {
            color: red;
        }

        .message {
            width: 100%;
            margin: 10px 0 0;
            padding: 10px;
            border-radius: 5px;
            background: #fafafa;
            border: 1px solid #ccc;
            color: #000;
            display: none;
        }

            .message.info {
                background-color: lightcyan;
                color: royalblue;
                border: 1px solid lightskyblue;
            }

            .message.success {
                background-color: #f5fff5;
                color: green;
                border: 1px solid lightgreen;
            }

            .message.danger {
                background: #fff5f5;
                color: red;
                border: 1px solid lightpink;
            }

        .switchery {
            width: 32px;
            height: 20px;
        }

            .switchery > small {
                width: 20px;
                height: 20px;
            }
    </style>
    <style>
        .btbDark {
            background-image:url('@URL/StaticData/SystemImages/button-bg-dark.jpg');
            background-position:center center;
            background-size:cover;
        }
        .btbLight {
            background-image:url('@URL/StaticData/SystemImages/button-bg-light.jpg');
            background-position:center center;
            background-size:cover;
        }
    </style>
    <script>!function (e) { "object" == typeof module && "object" == typeof module.exports ? e(require("jquery"), window, document) : "undefined" != typeof jQuery && e(jQuery, window, document) }(function (e, t, i, n) { !function () { function t(e, t, i) { return new Array(i + 1 - e.length).join(t) + e } function n() { if (1 === arguments.length) { var t = arguments[0]; return "string" == typeof t && (t = e.fn.timepicker.parseTime(t)), new Date(0, 0, 0, t.getHours(), t.getMinutes(), t.getSeconds()) } return 3 === arguments.length ? new Date(0, 0, 0, arguments[0], arguments[1], arguments[2]) : 2 === arguments.length ? new Date(0, 0, 0, arguments[0], arguments[1], 0) : new Date(0, 0, 0) } e.TimePicker = function () { var t = this; t.container = e(".ui-timepicker-container"), t.ui = t.container.find(".ui-timepicker"), 0 === t.container.length && (t.container = e("<div></div>").addClass("ui-timepicker-container").addClass("ui-timepicker-hidden ui-helper-hidden").appendTo("body").hide(), t.ui = e("<div></div>").addClass("ui-timepicker").addClass("ui-widget ui-widget-content ui-menu").addClass("ui-corner-all").appendTo(t.container), t.viewport = e("<ul></ul>").addClass("ui-timepicker-viewport").appendTo(t.ui), e.fn.jquery >= "1.4.2" && t.ui.delegate("a", "mouseenter.timepicker", function () { t.activate(!1, e(this).parent()) }).delegate("a", "mouseleave.timepicker", function () { t.deactivate(!1) }).delegate("a", "click.timepicker", function (i) { i.preventDefault(), t.select(!1, e(this).parent()) })) }, e.TimePicker.count = 0, e.TimePicker.instance = function () { return e.TimePicker._instance || (e.TimePicker._instance = new e.TimePicker), e.TimePicker._instance }, e.TimePicker.prototype = { keyCode: { ALT: 18, BLOQ_MAYUS: 20, CTRL: 17, DOWN: 40, END: 35, ENTER: 13, HOME: 36, LEFT: 37, NUMPAD_ENTER: 108, PAGE_DOWN: 34, PAGE_UP: 33, RIGHT: 39, SHIFT: 16, TAB: 9, UP: 38 }, _items: function (t, i) { var r, a, o = this, s = e("<ul></ul>"), c = null; for (-1 === t.options.timeFormat.indexOf("m") && t.options.interval % 60 !== 0 && (t.options.interval = 60 * Math.max(Math.round(t.options.interval / 60), 1)), r = i ? n(i) : t.options.startTime ? n(t.options.startTime) : n(t.options.startHour, t.options.startMinutes), a = new Date(r.getTime() + 864e5) ; a > r;) o._isValidTime(t, r) && (c = e("<li>").addClass("ui-menu-item").appendTo(s), e("<a>").addClass("ui-corner-all").text(e.fn.timepicker.formatTime(t.options.timeFormat, r)).appendTo(c), c.data("time-value", r)), r = new Date(r.getTime() + 60 * t.options.interval * 1e3); return s.children() }, _isValidTime: function (e, t) { var i = null, r = null; return t = n(t), null !== e.options.minTime ? i = n(e.options.minTime) : null === e.options.minHour && null === e.options.minMinutes || (i = n(e.options.minHour, e.options.minMinutes)), null !== e.options.maxTime ? r = n(e.options.maxTime) : null === e.options.maxHour && null === e.options.maxMinutes || (r = n(e.options.maxHour, e.options.maxMinutes)), null !== i && null !== r ? t >= i && r >= t : null !== i ? t >= i : null !== r ? r >= t : !0 }, _hasScroll: function () { var e = "undefined" != typeof this.ui.prop ? "prop" : "attr"; return this.ui.height() < this.ui[e]("scrollHeight") }, _move: function (e, t, i) { var n = this; if (n.closed() && n.open(e), !n.active) return void n.activate(e, n.viewport.children(i)); var r = n.active[t + "All"](".ui-menu-item").eq(0); r.length ? n.activate(e, r) : n.activate(e, n.viewport.children(i)) }, register: function (t, i) { var n = this, r = {}; r.element = e(t), r.element.data("TimePicker") || (r.options = e.metadata ? e.extend({}, i, r.element.metadata()) : e.extend({}, i), r.widget = n, e.extend(r, { next: function () { return n.next(r) }, previous: function () { return n.previous(r) }, first: function () { return n.first(r) }, last: function () { return n.last(r) }, selected: function () { return n.selected(r) }, open: function () { return n.open(r) }, close: function () { return n.close(r) }, closed: function () { return n.closed(r) }, destroy: function () { return n.destroy(r) }, parse: function (e) { return n.parse(r, e) }, format: function (e, t) { return n.format(r, e, t) }, getTime: function () { return n.getTime(r) }, setTime: function (e, t) { return n.setTime(r, e, t) }, option: function (e, t) { return n.option(r, e, t) } }), n._setDefaultTime(r), n._addInputEventsHandlers(r), r.element.data("TimePicker", r)) }, _setDefaultTime: function (t) { "now" === t.options.defaultTime ? t.setTime(n(new Date)) : t.options.defaultTime && t.options.defaultTime.getFullYear ? t.setTime(n(t.options.defaultTime)) : t.options.defaultTime && t.setTime(e.fn.timepicker.parseTime(t.options.defaultTime)) }, _addInputEventsHandlers: function (t) { var i = this; t.element.bind("keydown.timepicker", function (e) { switch (e.which || e.keyCode) { case i.keyCode.ENTER: case i.keyCode.NUMPAD_ENTER: e.preventDefault(), i.closed() ? t.element.trigger("change.timepicker") : i.select(t, i.active); break; case i.keyCode.UP: t.previous(); break; case i.keyCode.DOWN: t.next(); break; default: i.closed() || t.close(!0) } }).bind("focus.timepicker", function () { t.open() }).bind("blur.timepicker", function () { setTimeout(function () { t.element.data("timepicker-user-clicked-outside") && t.close() }) }).bind("change.timepicker", function () { t.closed() && t.setTime(e.fn.timepicker.parseTime(t.element.val())) }) }, select: function (t, i) { var n = this, r = t === !1 ? n.instance : t; n.setTime(r, e.fn.timepicker.parseTime(i.children("a").text())), n.close(r, !0) }, activate: function (e, t) { var i = this, n = e === !1 ? i.instance : e; if (n === i.instance) { if (i.deactivate(), i._hasScroll()) { var r = t.offset().top - i.ui.offset().top, a = i.ui.scrollTop(), o = i.ui.height(); 0 > r ? i.ui.scrollTop(a + r) : r >= o && i.ui.scrollTop(a + r - o + t.height()) } i.active = t.eq(0).children("a").addClass("ui-state-hover").attr("id", "ui-active-item").end() } }, deactivate: function () { var e = this; e.active && (e.active.children("a").removeClass("ui-state-hover").removeAttr("id"), e.active = null) }, next: function (e) { return (this.closed() || this.instance === e) && this._move(e, "next", ".ui-menu-item:first"), e.element }, previous: function (e) { return (this.closed() || this.instance === e) && this._move(e, "prev", ".ui-menu-item:last"), e.element }, first: function (e) { return this.instance === e ? this.active && 0 === this.active.prevAll(".ui-menu-item").length : !1 }, last: function (e) { return this.instance === e ? this.active && 0 === this.active.nextAll(".ui-menu-item").length : !1 }, selected: function (e) { return this.instance === e && this.active ? this.active : null }, open: function (t) { var n = this, r = t.getTime(), a = t.options.dynamic && r; if (!t.options.dropdown) return t.element; switch (t.element.data("timepicker-event-namespace", Math.random()), e(i).bind("click.timepicker-" + t.element.data("timepicker-event-namespace"), function (e) { t.element.get(0) === e.target ? t.element.data("timepicker-user-clicked-outside", !1) : t.element.data("timepicker-user-clicked-outside", !0).blur() }), (t.rebuild || !t.items || a) && (t.items = n._items(t, a ? r : null)), (t.rebuild || n.instance !== t || a) && (e.fn.jquery < "1.4.2" ? (n.viewport.children().remove(), n.viewport.append(t.items), n.viewport.find("a").bind("mouseover.timepicker", function () { n.activate(t, e(this).parent()) }).bind("mouseout.timepicker", function () { n.deactivate(t) }).bind("click.timepicker", function (i) { i.preventDefault(), n.select(t, e(this).parent()) })) : (n.viewport.children().detach(), n.viewport.append(t.items))), t.rebuild = !1, n.container.removeClass("ui-helper-hidden ui-timepicker-hidden ui-timepicker-standard ui-timepicker-corners").show(), t.options.theme) { case "standard": n.container.addClass("ui-timepicker-standard"); break; case "standard-rounded-corners": n.container.addClass("ui-timepicker-standard ui-timepicker-corners") } n.container.hasClass("ui-timepicker-no-scrollbar") || t.options.scrollbar || (n.container.addClass("ui-timepicker-no-scrollbar"), n.viewport.css({ paddingRight: 40 })); var o = n.container.outerHeight() - n.container.height(), s = t.options.zindex ? t.options.zindex : t.element.offsetParent().css("z-index"), c = t.element.offset(); n.container.css({ top: c.top + t.element.outerHeight(), left: c.left }), n.container.show(), n.container.css({ left: t.element.offset().left, height: n.ui.outerHeight() + o, width: t.element.outerWidth(), zIndex: s, cursor: "default" }); var u = n.container.width() - (n.ui.outerWidth() - n.ui.width()); return n.ui.css({ width: u }), n.viewport.css({ width: u }), t.items.css({ width: u }), n.instance = t, r ? t.items.each(function () { var i, a = e(this); return i = e.fn.jquery < "1.4.2" ? e.fn.timepicker.parseTime(a.find("a").text()) : a.data("time-value"), i.getTime() === r.getTime() ? (n.activate(t, a), !1) : !0 }) : n.deactivate(t), t.element }, close: function (t) { var n = this; return n.instance === t && (n.container.addClass("ui-helper-hidden ui-timepicker-hidden").hide(), n.ui.scrollTop(0), n.ui.children().removeClass("ui-state-hover")), e(i).unbind("click.timepicker-" + t.element.data("timepicker-event-namespace")), t.element }, closed: function () { return this.ui.is(":hidden") }, destroy: function (e) { var t = this; return t.close(e, !0), e.element.unbind(".timepicker").data("TimePicker", null) }, parse: function (t, i) { return e.fn.timepicker.parseTime(i) }, format: function (t, i, n) { return n = n || t.options.timeFormat, e.fn.timepicker.formatTime(n, i) }, getTime: function (t) { var i = this, n = e.fn.timepicker.parseTime(t.element.val()); return n instanceof Date && !i._isValidTime(t, n) ? null : n instanceof Date && t.selectedTime ? t.format(n) === t.format(t.selectedTime) ? t.selectedTime : n : n instanceof Date ? n : null }, setTime: function (t, i, r) { var a = this, o = t.selectedTime; if ("string" == typeof i && (i = t.parse(i)), i && i.getMinutes && a._isValidTime(t, i)) { if (i = n(i), t.selectedTime = i, t.element.val(t.format(i, t.options.timeFormat)), r) return t } else t.selectedTime = null; return null === o && null === t.selectedTime || (t.element.trigger("time-change", [i]), e.isFunction(t.options.change) && t.options.change.apply(t.element, [i])), t.element }, option: function (t, i, n) { if ("undefined" == typeof n) return t.options[i]; var r, a, o = t.getTime(); "string" == typeof i ? (r = {}, r[i] = n) : r = i, a = ["minHour", "minMinutes", "minTime", "maxHour", "maxMinutes", "maxTime", "startHour", "startMinutes", "startTime", "timeFormat", "interval", "dropdown"], e.each(r, function (i) { t.options[i] = r[i], t.rebuild = t.rebuild || e.inArray(i, a) > -1 }), t.rebuild && t.setTime(o) } }, e.TimePicker.defaults = { timeFormat: "hh:mm p", minHour: null, minMinutes: null, minTime: null, maxHour: null, maxMinutes: null, maxTime: null, startHour: null, startMinutes: null, startTime: null, interval: 30, dynamic: !0, theme: "standard", zindex: null, dropdown: !0, scrollbar: !1, change: function () { } }, e.TimePicker.methods = { chainable: ["next", "previous", "open", "close", "destroy", "setTime"] }, e.fn.timepicker = function (t) { if ("string" == typeof t) { var i, n, r = Array.prototype.slice.call(arguments, 1); return i = "option" === t && arguments.length > 2 ? "each" : -1 !== e.inArray(t, e.TimePicker.methods.chainable) ? "each" : "map", n = this[i](function () { var i = e(this), n = i.data("TimePicker"); return "object" == typeof n ? n[t].apply(n, r) : void 0 }), "map" === i && 1 === this.length ? e.makeArray(n).shift() : "map" === i ? e.makeArray(n) : n } if (1 === this.length && this.data("TimePicker")) return this.data("TimePicker"); var a = e.extend({}, e.TimePicker.defaults, t); return this.each(function () { e.TimePicker.instance().register(this, a) }) }, e.fn.timepicker.formatTime = function (e, i) { var n = i.getHours(), r = n % 12, a = i.getMinutes(), o = i.getSeconds(), s = { hh: t((0 === r ? 12 : r).toString(), "0", 2), HH: t(n.toString(), "0", 2), mm: t(a.toString(), "0", 2), ss: t(o.toString(), "0", 2), h: 0 === r ? 12 : r, H: n, m: a, s: o, p: n > 11 ? "PM" : "AM" }, c = e, u = ""; for (u in s) s.hasOwnProperty(u) && (c = c.replace(new RegExp(u, "g"), s[u])); return c = c.replace(new RegExp("a", "g"), n > 11 ? "pm" : "am") }, e.fn.timepicker.parseTime = function () { var t = [[/^(\d+)$/, "$1"], [/^:(\d)$/, "$10"], [/^:(\d+)/, "$1"], [/^(\d):([7-9])$/, "0$10$2"], [/^(\d):(\d\d)$/, "$1$2"], [/^(\d):(\d{1,})$/, "0$1$20"], [/^(\d\d):([7-9])$/, "$10$2"], [/^(\d\d):(\d)$/, "$1$20"], [/^(\d\d):(\d*)$/, "$1$2"], [/^(\d{3,}):(\d)$/, "$10$2"], [/^(\d{3,}):(\d{2,})/, "$1$2"], [/^(\d):(\d):(\d)$/, "0$10$20$3"], [/^(\d{1,2}):(\d):(\d\d)/, "$10$2$3"]], i = t.length; return function (r) { var a = n(new Date), o = !1, s = !1, c = !1, u = !1, l = !1; if ("undefined" == typeof r || !r.toLowerCase) return null; r = r.toLowerCase(), o = /a/.test(r), s = o ? !1 : /p/.test(r), r = r.replace(/[^0-9:]/g, "").replace(/:+/g, ":"); for (var m = 0; i > m; m += 1) if (t[m][0].test(r)) { r = r.replace(t[m][0], t[m][1]); break } return r = r.replace(/:/g, ""), 1 === r.length ? c = r : 2 === r.length ? c = r : 3 === r.length || 5 === r.length ? (c = r.substr(0, 1), u = r.substr(1, 2), l = r.substr(3, 2)) : (4 === r.length || r.length > 5) && (c = r.substr(0, 2), u = r.substr(2, 2), l = r.substr(4, 2)), r.length > 0 && r.length < 5 && (r.length < 3 && (u = 0), l = 0), c === !1 || u === !1 || l === !1 ? !1 : (c = parseInt(c, 10), u = parseInt(u, 10), l = parseInt(l, 10), o && 12 === c ? c = 0 : s && 12 > c && (c += 12), c > 24 ? r.length >= 6 ? e.fn.timepicker.parseTime(r.substr(0, 5)) : e.fn.timepicker.parseTime(r + "0" + (o ? "a" : "") + (s ? "p" : "")) : (a.setHours(c, u, l), a)) } }() }() });</script>
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border:0;background:#fff;text-align:center;">
                        <a href="/dashboard/index" class="site_title" style="padding-left:0!important;color:#666!important;font-size:15px">
                            <img id="MainLogo" src="" /> 1.0
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="profile clearfix">
                        <div class="profile_info">
                            <span>Xin chào,</span>
                            <h2>LÊ TRIỆU LONG</h2>
                        </div>
                    </div>
                    <br />
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li>
                                    <a href="./dashboard.html">
                                        <i class="fa fa-pie-chart"></i>
                                        Thông kê
                                    </a>
                                </li>
                                <li>
                                    <a href="./ManagerList.html">
                                        <i class="fa fa-map-marker"></i>
                                        Quản lý danh mục
                                    </a>
                                </li>
                                <li>
                                    <a href="./ManagercSlideShow.html">
                                        <i class="fa fa-dot-circle-o"></i>
                                        Quản lý slideshow
                                    </a>
                                </li>
                                <li>
                                    <a href="./ManagercContact.html">
                                        <i class="fa fa-phone"></i>
                                        Quản lý liên hệ
                                    </a>
                                </li>
                                <li>
                                    <a href="./ManagerAdvertisement.html">
                                        <i class="fa fa-list-ul"></i>
                                        Quản lý quảng cáo
                                    </a>
                                </li>
                                <li>
                                    <a href="./ManagerSettingInfo.html">
                                        <i class="fa fa-user"></i>
                                        Quản lý cài đặt thông tin
                                    </a>
                                </li>
                                <li>
                                    <a href="./ManagerComment.html">
                                        <i class="fa fa-list-ul"></i>
                                        Quản lý bài viết
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-footer hidden-small" style="display:none">
                    </div>
                </div>
            </div>
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:void();" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <b style="color:#890519">
                                        <i class="fa fa-power-off"></i>
                                    </b>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li>
                                        <a href="/login/ChangePass">
                                            <i class="fa fa-lock pull-right"></i> Đổi mật khẩu
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:Logout()">
                                            <i class="fa fa-sign-out pull-right"></i> Đăng xuất
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Khu nội dung -->
            <div class="right_col" role="main" style="min-height: 673.8px;">
                <!-- KHUNG TIỂU ĐỀ -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel" style="padding:15px!important">
                            <div class="x_title" style="border-bottom:none;padding-bottom:0px;margin-bottom:0px">
                                <h2 style="font-family:Verdana;line-height:normal;color:#000">
                                    THỐNG KÊ
                                </h2>
                                <div class="nav navbar-right green">
                                    <a href="/location/add" class="btn btn-success btn-sm">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                                        Thêm
                                    </a>
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
                                <input placeholder="Nhập tên tài khoản..." value="" onchange="SearchLocation(this)">
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
                                            <th class="tc1">Tài khoản</th>
                                            <th class="tc2">Chức vụ</th>
                                            <th class="tc3">Người tạo<br>Ngày tạo</th>
                                            <th class="tc4">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td class="tc1">
                                                    ltlong@gmail.com
                                                    <br>
                                                    <b>Lê Triệu Long</b>
                                                </td>
                                                <td class="tc2">
                                                    <p>Nhân viên</p>
                                                </td>
                                                <td class="tc3">
                                                    <p>Administrator</p>
                                                    <p>31/03/2023</p>
                                                </td>
                                                <td class="tc">                        
                                                    <div class="btn btn-xs btn-success">
                                                        <a href="detailAccount.html" style="color: #fff;">
                                                            <i class="fa fa-edit"></i> Chi tiết
                                                        </a>
                                                    </div>
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
            </div>
            <footer>
                <div class="pull-right">
                    <img src="" style="height:24px; background-color: #048b2c;" /> <strong>1.0</strong>
                </div>
                <div class="clearfix"></div>
            </footer>
        </div>
    </div>

    <script src="../../Lib/vendors/fastclick/lib/fastclick.js"></script>
    <script src="../../Lib/vendors/nprogress/nprogress.js"></script>
    <script src="../../Lib/vendors/Chart.js/dist/Chart.min.js"></script>
    <script src="../../Lib/vendors/gauge.js/dist/gauge.min.js"></script>
    <script src="../../Lib/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../../Lib/vendors/iCheck/icheck.min.js"></script>
    <script src="../../Lib/vendors/skycons/skycons.js"></script>
    <script src="../../Lib/vendors/Flot/jquery.flot.js"></script>
    <script src="../../Lib/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../../Lib/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../../Lib/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../../Lib/vendors/Flot/jquery.flot.resize.js"></script>
    <script src="../../Lib/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../../Lib/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../../Lib/vendors/flot.curvedlines/curvedLines.js"></script>
    <script src="../../Lib/vendors/DateJS/build/date.js"></script>
    <script src="../../Lib/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../../Lib/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../../Lib/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="../../Lib/vendors/moment/min/moment.min.js"></script>
    <script src="../../Lib/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../../Lib/vendors/custom.js"></script>
    <script src="../../Lib/vendors/switchery/dist/switchery.min.js"></script>
    <script src="../../Lib/vendors/raphael/raphael.min.js"></script>
    <script src="../../Lib/vendors/morris.js/morris.min.js"></script>
    <div id="Loading">
        <div style="margin:0 auto;position:relative;top:50%;transform:translateY(-50%)">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background:none; display: block;" width="80px" height="80px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <g transform="translate(50 50)">
                    <g transform="translate(-19 -19) scale(0.6)">
                        <g>
                            <animateTransform attributeName="transform" type="rotate" values="0;45" keyTimes="0;1" dur="0.2s" begin="0s" repeatCount="indefinite"></animateTransform>
                            <path d="M31.359972760794346 21.46047782418268 L38.431040572659825 28.531545636048154 L28.531545636048154 38.431040572659825 L21.46047782418268 31.359972760794346 A38 38 0 0 1 7.0000000000000036 37.3496987939662 L7.0000000000000036 37.3496987939662 L7.000000000000004 47.3496987939662 L-6.999999999999999 47.3496987939662 L-7 37.3496987939662 A38 38 0 0 1 -21.46047782418268 31.35997276079435 L-21.46047782418268 31.35997276079435 L-28.531545636048154 38.431040572659825 L-38.43104057265982 28.531545636048158 L-31.359972760794346 21.460477824182682 A38 38 0 0 1 -37.3496987939662 7.000000000000007 L-37.3496987939662 7.000000000000007 L-47.3496987939662 7.000000000000008 L-47.3496987939662 -6.9999999999999964 L-37.3496987939662 -6.999999999999997 A38 38 0 0 1 -31.35997276079435 -21.460477824182675 L-31.35997276079435 -21.460477824182675 L-38.431040572659825 -28.531545636048147 L-28.53154563604818 -38.4310405726598 L-21.4604778241827 -31.35997276079433 A38 38 0 0 1 -6.999999999999992 -37.3496987939662 L-6.999999999999992 -37.3496987939662 L-6.999999999999994 -47.3496987939662 L6.999999999999977 -47.3496987939662 L6.999999999999979 -37.3496987939662 A38 38 0 0 1 21.460477824182686 -31.359972760794342 L21.460477824182686 -31.359972760794342 L28.531545636048158 -38.43104057265982 L38.4310405726598 -28.53154563604818 L31.35997276079433 -21.4604778241827 A38 38 0 0 1 37.3496987939662 -6.999999999999995 L37.3496987939662 -6.999999999999995 L47.3496987939662 -6.999999999999997 L47.349698793966205 6.999999999999973 L37.349698793966205 6.999999999999976 A38 38 0 0 1 31.359972760794346 21.460477824182686 M0 -23A23 23 0 1 0 0 23 A23 23 0 1 0 0 -23" fill="#ee840c"></path>
                        </g>
                    </g>
                    <g transform="translate(19 19) scale(0.6)">
                        <g>
                            <animateTransform attributeName="transform" type="rotate" values="45;0" keyTimes="0;1" dur="0.2s" begin="-0.1s" repeatCount="indefinite"></animateTransform>
                            <path d="M-31.35997276079435 -21.460477824182675 L-38.431040572659825 -28.531545636048147 L-28.53154563604818 -38.4310405726598 L-21.4604778241827 -31.35997276079433 A38 38 0 0 1 -6.999999999999992 -37.3496987939662 L-6.999999999999992 -37.3496987939662 L-6.999999999999994 -47.3496987939662 L6.999999999999977 -47.3496987939662 L6.999999999999979 -37.3496987939662 A38 38 0 0 1 21.460477824182686 -31.359972760794342 L21.460477824182686 -31.359972760794342 L28.531545636048158 -38.43104057265982 L38.4310405726598 -28.53154563604818 L31.35997276079433 -21.4604778241827 A38 38 0 0 1 37.3496987939662 -6.999999999999995 L37.3496987939662 -6.999999999999995 L47.3496987939662 -6.999999999999997 L47.349698793966205 6.999999999999973 L37.349698793966205 6.999999999999976 A38 38 0 0 1 31.359972760794346 21.460477824182686 L31.359972760794346 21.460477824182686 L38.431040572659825 28.531545636048158 L28.53154563604818 38.4310405726598 L21.460477824182703 31.35997276079433 A38 38 0 0 1 6.9999999999999964 37.3496987939662 L6.9999999999999964 37.3496987939662 L6.999999999999995 47.3496987939662 L-7.000000000000009 47.3496987939662 L-7.000000000000007 37.3496987939662 A38 38 0 0 1 -21.46047782418263 31.359972760794385 L-21.46047782418263 31.359972760794385 L-28.531545636048097 38.43104057265987 L-38.431040572659796 28.531545636048186 L-31.35997276079433 21.460477824182703 A38 38 0 0 1 -37.34969879396619 7.000000000000032 L-37.34969879396619 7.000000000000032 L-47.34969879396619 7.0000000000000355 L-47.3496987939662 -7.000000000000002 L-37.3496987939662 -7.000000000000005 A38 38 0 0 1 -31.359972760794346 -21.46047782418268 M0 -23A23 23 0 1 0 0 23 A23 23 0 1 0 0 -23" fill="#ffffff"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </div>

    <style>
        #MessageBox {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: #000;
            opacity: 0.8;
            z-index: 100000;
            display: none;
        }

        #MessageBoxPane {
            margin: 0 auto;
            padding: 0;
            border-radius: 4px;
            width: 80%;
            background: #fff;
            max-width: 400px;
            position: fixed;
            z-index: 100001;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            display: none;
        }

        #MessageBoxTitle {
            margin: 0;
            padding: 5px 15px;
            background: #048b2c;
            color: #fff;
            border-radius: 4px 4px 0 0;
            font-size: 18px;
        }

        #MessageBoxContent {
            margin: 0 0 10px 0;
            padding: 15px 10px;
            border-bottom: 1px solid #ccc;
        }
    </style>
    <div id="MessageBox"></div>
    <div id="MessageBoxPane">
        <p id="MessageBoxTitle">
            <i class="fa fa-warning"></i>
            <i class="fa fa-check-circle"></i>
            Thông báo
        </p>
        <p id="MessageBoxContent">Nội dung thông báo</p>
        <a href="javascript:CloseMS()" class="btn btn-success btn-sm" style="margin:0 10px 10px 0;float:right">
            OK
        </a>
        <div style="clear:both"></div>
    </div>
</body>
</html>

<script>
    function Delete(name){
        if (confirm('Bạn có chắc muốn xóa "' + name + '"')){
            console.log("ok");
        }
    }
</script>