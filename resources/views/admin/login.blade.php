<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng Nhập</title>
    <link id="favicon" rel="icon" type="image/x-icon" href="@URL/favicon-32x32.png" />
    <link rel="icon" href="@URL/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="@URL/favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="@URL/favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="@URL/favicon-270x270.png" />
    <!-- Bootstrap Core CSS -->
    <link href="<?=SITE_PATH?>/Lib/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?=SITE_PATH?>/Lib/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=SITE_PATH?>/Lib/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?=SITE_PATH?>/Lib/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- jQuery -->
    <script src="<?=SITE_PATH?>/Lib/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?=SITE_PATH?>/Lib/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=SITE_PATH?>/Lib/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?=SITE_PATH?>/Lib/dist/js/sb-admin-2.js"></script>
    <style>
        #alertms {
            margin: 20px 0px 0px 0px;
            padding: 0px;
            color: red;
        }
        #Loading {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0px;
            left: 0px;
            z-index: 999;
            display: none;
        }
        body{
            min-height:100vh;
            background-position:center center;
            background-repeat:no-repeat;
            background-size:cover;
            background-image: url('https://checkincms.vncrm.net/StaticData/SystemImages/bg.jpg');
        }
        @@media screen and (max-width: 769px){
            body{
                background-image:url('@URL/StaticData/SystemImages/bg.jpg');
                background-position:top left;
                background-repeat:no-repeat;
                background-size:cover;
            }
        }
    </style>
    <style>
        .btn-success {
            color: #fff;
            background-color: #1a6e9d;
            border-color: #0d557d;
        }

            .btn-success:hover {
                background-color: #0d557d;
            }

        #LoginPane {
            margin: 0;
            padding: 0;
            position: relative;
            top: 50%;
            left: 150px;
            transform: translateY(-50%);
            max-width: 300px;
        }

        #LoginLogo {
            display: block;
            margin: 0 0 30px 0;
            width: 100%;
        }

        .logininput {
            margin: 10px 0 0 0;
            padding: 0;
            height: 40px;
            width: 300px;
            position: relative;
        }

            .logininput img {
                margin: 0;
                width: 100%;
                position: absolute;
                z-index: -1;
            }

        .my-form-control {
            margin: 12px 0 0 55px;
            padding: 0;
            border: none;
            color: #000;
            font-size: 14px;
            width: 230px;
            outline: none;
            background: #fff !important;
        }

        #login {
            display: block;
            margin: 20px 0 0 0;
            width: 220px;
            cursor: pointer;
        }

        #sepa {
            margin: 20px 0 0 0;
            width: 90px;
            height: 2px;
            border-top: 1px solid #666;
            background: #fff;
        }

        #copyright {
            margin: 20px 0 0 0;
            font-size: 12px;
            color: #333;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            transition: background-color 5000s ease-in-out 0s;
        }

        #lefttop {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 150px;
        }

        #fullscreen {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100vh;
            position: relative;
        }

        @@media screen and (max-width: 769px) {
            #fullscreen {
                margin: 0;
                padding: 0;
                width: 100%;
                position: absolute;
                height: unset;
                bottom: 50px;
            }

            #LoginPane {
                position: relative;
                top: unset;
                left: unset;
                transform: unset;
                max-width: 200px;
                margin: 0 auto;
            }

            .logininput {
                margin: 10px 0 0 0;
                padding: 0;
                height: 35px;
                width: 200px;
                position: relative;
            }

                .logininput img {
                    margin: 0;
                    width: 100%;
                    position: absolute;
                    z-index: -1;
                }

            .my-form-control {
                margin: 7px 0 0 35px;
                padding: 0;
                border: none;
                color: #000;
                font-size: 12px;
                width: 155px;
                outline: none;
                background: #fff !important;
            }

            #login {
                display: block;
                margin: 10px 0 0 0;
                width: 140px;
            }

            #sepa {
                margin: 10px 0 0 0;
                width: 50px;
                height: 2px;
                border-top: 1px solid #666;
                background: #ccc;
            }

            #copyright {
                margin: 10px 0 0 0;
                font-size: 11px;
                color: #ccc;
            }
        }

        a.forgetpasslink {
            display: block;
            margin: 20px 0 0 0;
            text-decoration: none;
            color: #30a4dc;
            font-size: 14px;
        }

            a.forgetpasslink:hover {
                color: #093863;
            }
    </style>
</head>
<body>
    <div id="fullscreen">
        <div id="LoginPane">
            <form action="{{ route('auth.admin') }}" method="post">
                @csrf
                <!-- <img id="LoginLogo" src="<?=SITE_PATH?>/image/logintem.png" alt="" /> -->
                <div class="logininput" id="loginemail">
                    <img src="<?=SITE_PATH?>/image/bgemail.png" />
                    <input id="username" class="my-form-control" placeholder="Email" name="username" autofocus>
                </div>
                <div class="logininput" id="loginpass">
                    <img src="<?=SITE_PATH?>/image/bgpass.png" />
                    <input id="password" class="my-form-control" placeholder="Password" name="password" type="password">
                </div>
                <label style="font-weight:normal;display:flex;align-items:center;margin:10px 0 0 0;padding:0">
                    <input type="checkbox" id="chkRemember" style="margin:0 5px 0 0" />
                    <span>Remember account on this browser</span>
                </label>
                <button type="submit" style="background: none;border: none;">
                    <!-- <img id="login" src="<?=SITE_PATH?>/image/loginbtb.png" onclick="Login()" /> -->
                    <img id="login" src="<?=SITE_PATH?>/image/loginbtb.png" />
                </button>
            </form>
            
            <a href="@URL/login/forgetpass" class="forgetpasslink" style="display:none">Quên mật khẩu</a>
            <p id="alertms"></p>
            <div id="sepa"></div>
            <p id="copyright">2021 | Copyright by VNDC</p>
        </div>
    </div>
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
    <script>
        var wait = false;
        $(document).ready(function () {
            $('#Loading').css('display', 'block');
            $('#username').keyup(function (event) {
                if (event.keyCode == '13') {
                    Login();
                }
                return false;
            });
            $('#password').keyup(function (event) {
                if (event.keyCode == '13') {
                    Login();
                }
                return false;
            });
            var u = getCookie('vnsign-u');
            var p = getCookie('vnsign-p');
            if (u != '' && p != '') {
                $('#username').val(u);
                $('#password').val(p);
                $('#chkRemember').prop('checked', true);
                Login();
            }
            else {
                $('#Loading').css('display', 'none');
                $('#LoginForm').css('opacity', '1');
            }
        });

        function Login() {
            // if ($('#username').val() == '' || $('#password').val() == '') {
            //     $('#alertms').html("Chưa nhập đủ email và mật khẩu!");
            //     return;
            // }
            // $('#Loading').css('display', 'block');
            // var form = new FormData();
            // form.append("email", $('#username').val());
            // form.append("password", $('#password').val());
            // form.append("rt", '@Request.QueryString["rt"]');
            // var xhr = new XMLHttpRequest();
            // // xhr.open("POST", "@URL/login/check", true);
            // xhr.open("GET", "{{ route('admin') }}", true);
            // xhr.timeout = 30000;
            // xhr.ontimeout = function () {
            //     $('#alertms').html("Có thể INTERNET gặp vấn đề. Không thể đăng nhập lúc này. Xin vui lòng thử lại sau!");
            //     $('#Loading').css('display', 'none');
            // }
            // xhr.onreadystatechange = function () {
            //     if (xhr.readyState == 4 && xhr.status == 200) {
            //         var ms = JSON.parse(xhr.responseText);
            //         if (ms.status == "OK") {
            //             if ($('#chkRemember').is(':checked')) {
            //                 setCookie('vnsign-u', $('#username').val(), 365);
            //                 setCookie('vnsign-p', $('#password').val(), 365);
            //             }
            //             var rturn = ms.back;
            //             if (rturn == "") {
            //                 // window.location = '@URL/dashboard/index';
            //                 window.location.href = "{{ route('admin') }}";
            //             } else {
            //                 window.location = "@URL" + rturn;
            //             }
            //         } else {
            //             $('#Loading').css('display', 'none');
            //             $('#LoginForm').css('opacity', '1');
            //             $('#alertms').html("Sai email hoặc mật khẩu.");
            //         }
            //     }
            // }
            // xhr.send(form);
        }

        function setCookie(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            let expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            let name = cname + "=";
            let decodedCookie = decodeURIComponent(document.cookie);
            let ca = decodedCookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

    </script>
</body>
</html>
