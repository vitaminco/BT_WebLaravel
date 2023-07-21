<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $attributes['title'] ?? 'BT lavarel' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{ $css ?? '' }}

    <style>
        body {
            padding-top: 0px;
            padding-bottom: 1px;
            color: #5a5a5a;
        }

        /* Tuyết rơi */
        @-webkit-keyframes snowflakes-fall {
            0% {
                top: -10%
            }

            100% {
                top: 100%
            }
        }

        @-webkit-keyframes snowflakes-shake {

            0%,
            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }

            50% {
                -webkit-transform: translateX(80px);
                transform: translateX(80px)
            }
        }

        @keyframes snowflakes-fall {
            0% {
                top: -10%
            }

            100% {
                top: 100%
            }
        }

        @keyframes snowflakes-shake {

            0%,
            100% {
                transform: translateX(0)
            }

            50% {
                transform: translateX(80px)
            }
        }

        .snowflake {
            color: #fff;
            font-size: 1em;
            font-family: Arial, sans-serif;
            text-shadow: 0 0 5px #000;
            position: fixed;
            top: -10%;
            z-index: 9999;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: default;
            -webkit-animation-name: snowflakes-fall, snowflakes-shake;
            -webkit-animation-duration: 10s, 3s;
            -webkit-animation-timing-function: linear, ease-in-out;
            -webkit-animation-iteration-count: infinite, infinite;
            -webkit-animation-play-state: running, running;
            animation-name: snowflakes-fall, snowflakes-shake;
            animation-duration: 10s, 3s;
            animation-timing-function: linear, ease-in-out;
            animation-iteration-count: infinite, infinite;
            animation-play-state: running, running;
        }

        .snowflake:nth-of-type(0) {
            left: 1%;
            -webkit-animation-delay: 0s, 0s;
            animation-delay: 0s, 0s
        }

        .snowflake:nth-of-type(1) {
            left: 10%;
            -webkit-animation-delay: 1s, 1s;
            animation-delay: 1s, 1s
        }

        .snowflake:nth-of-type(2) {
            left: 20%;
            -webkit-animation-delay: 6s, .5s;
            animation-delay: 6s, .5s
        }

        .snowflake:nth-of-type(3) {
            left: 30%;
            -webkit-animation-delay: 4s, 2s;
            animation-delay: 4s, 2s
        }

        .snowflake:nth-of-type(4) {
            left: 40%;
            -webkit-animation-delay: 2s, 2s;
            animation-delay: 2s, 2s
        }

        .snowflake:nth-of-type(5) {
            left: 50%;
            -webkit-animation-delay: 8s, 3s;
            animation-delay: 8s, 3s
        }

        .snowflake:nth-of-type(6) {
            left: 60%;
            -webkit-animation-delay: 6s, 2s;
            animation-delay: 6s, 2s
        }

        .snowflake:nth-of-type(7) {
            left: 70%;
            -webkit-animation-delay: 2.5s, 1s;
            animation-delay: 2.5s, 1s
        }

        .snowflake:nth-of-type(8) {
            left: 80%;
            -webkit-animation-delay: 1s, 0s;
            animation-delay: 1s, 0s
        }

        .snowflake:nth-of-type(9) {
            left: 90%;
            -webkit-animation-delay: 3s, 1.5s;
            animation-delay: 3s, 1.5s
        }

        .snowflake:nth-of-type(10) {
            left: 25%;
            -webkit-animation-delay: 2s, 0s;
            animation-delay: 2s, 0s
        }

        .snowflake:nth-of-type(11) {
            left: 65%;
            -webkit-animation-delay: 4s, 2.5s;
            animation-delay: 4s, 2.5s
        }

        /* end */

        .products img {
            transform: translateX(0px);
            animation: float 6s ease-out infinite;
        }

        /* bóng hình */
        .products img {
            box-shadow: 13px 20px 13px -3px rgb(0 0 0 / 71%)
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        a {
            text-decoration: none;
            color: black;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .ani-nav a:hover {
            background-color: #f1d132;
        }

        .center {
            display: block;
            flex: 0 0 auto;
            width: 33.33333333%;
            text-align: center;
            padding: 10px;
        }

        .sidebar {
            box-shadow: 0 2px 3px 0 rgb(0, 0, 0, 0.1);
            border-radius: 2px;
        }

        .sidebar-item {
            display: none;
            position: absolute;
            margin: 12px 0 0 -135px;
            transition: ease-in-out color 0.2s;
        }

        .sidebar:hover .sidebar-item {
            display: block;
            box-shadow: 0 1px 20px 0 rgb(0, 0, 0, 0.05);
        }

        .muinhon::after {
            content: "";
            display: block;
            border-width: 12px 20px;
            border-style: solid;
            border-color: transparent transparent #f1d132 transparent;
            position: absolute;
            top: -23px;
            left: 249px;
            z-index: 2;
        }

        .muinhon::before {
            content: "";
            display: block;
            width: 148px;
            height: 20px;
            right: 22px;
            position: absolute;
            top: -20px;
        }

        .muinhon-item::before {
            content: "";
            display: block;
            width: 144px;
            right: 134px;
            height: 20px;
            position: absolute;
            top: -20px;
        }

        .toolbar {
            margin: 10px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            color: black;
            padding: 10px;
            transition: ease-in-out color 0.2s;
        }

        .toolbar:hover {
            background-color: beige;
            border-radius: 40px;
            color: #f1d132;
        }

        .col-6 {
            color: black;
            text-decoration: none;
        }

        .products {
            display: block;
            margin: 10px 2px;
            text-decoration: none;
            background-color: #fff;
            width: 209px;
            position: relative;
            border: 1px solid transparent;
            border-radius: 2px;
            box-shadow: 0 2px 3px 0 rgb(0, 0, 0, 0.1);
            transition: transform ease-in 0.1s;
            /*dịch lên xuống*/
            will-change: transform;
            /*cần khai báo transform*/
        }

        /*hover độ nhòe cái boder*/
        .products:hover {
            transform: translateY(-3px);
            /*nhảy lên xuống khi hover*/
            box-shadow: 0 1px 20px 0 rgb(0, 0, 0, 0.05);
            border-color: #f1d132;
        }

        .tin a {
            transform: translateX(0px);
            /* animation: float 6s ease-out initial; */
            animation-name: tin;
            animation-duration: 4s;
            animation-iteration-count: 1;
        }

        @keyframes tin {
            0% {
                transform: translatey(60px);
            }

            50% {
                transform: translatey(0px);
            }

            100% {
                transform: translatey(0px);
            }
        }

        /* tin tứcs */
        .tintuc {
            display: block;
            margin: 10px 2px;
            text-decoration: none;
            background-color: #fff;
            position: relative;
            border: 1px solid transparent;
            border-radius: 2px;
            border: 2px solid transparent;
            max-height: 622px;
            overflow: hidden;
        }

        .tintuc:hover {
            border: 2px solid #f1d132;
        }

        /* chi tiết mua */
        .ct-mua li {
            padding: 0 0 0 20px;
        }

        .footer_list li a {
            padding: 5px;
            font-size: 1rem;
            font-weight: 500;
        }

        .footer_list li a:hover {
            color: #f1d132;
        }

        .social {
            display: flex;
            justify-content: flex-end;
        }

        .social li a {
            padding: 0 0 0 20px;
            color: rgba(234, 234, 234, 0.496);
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    {{-- Thanh menu ở admin --}}
    @include('includes/admin-nav')
    {{-- tuyết --}}
    <div class="snowflakes" aria-hidden="true">
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
    </div>
    <div style="position: absolute; right: 0; z-index:4;">
        <div class="container">
            @if (!empty(session('success_msg')))
                <div class="mt-2 alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('success_msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (!empty(session('error_msg')))
                <div class="mt-2 alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error_msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

        </div>
    </div>
    {{ $slot }}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    {{ $js ?? '' }}
    {{-- chân trang --}}
    @include('includes/admin-footer')
</body>

</html>
