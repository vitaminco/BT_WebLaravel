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

        .center {
            display: block;
            flex: 0 0 auto;
            width: 33.33333333%;
            text-align: center;
        }

        .sidebar-item {
            display: none;
            position: absolute;
            margin: 12px 0 0 -113px;
        }

        .sidebar:hover .sidebar-item {
            display: block;
        }

        .muinhon::after {
            content: "";
            display: block;
            border-width: 12px 20px;
            border-style: solid;
            border-color: transparent transparent #fff transparent;
            position: absolute;
            top: -23px;
            left: 166px;
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

    <div style="position: absolute; right: 0">
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
