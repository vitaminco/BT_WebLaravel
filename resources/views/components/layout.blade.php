<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $attributes['title'] ?? 'Quản trị' }}</title>
    @foreach ($data as $item)
        <link rel="icon" href="{{ $item->logo }}">
    @endforeach
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- summernote --}}
    <link rel="stylesheet" href="{{ asset('summernote-0.8.18-dist/summernote-lite.min.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    {{ $css ?? '' }}
    <script src="{{ asset('js/main.js') }}"></script>
    {{--  --}}
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script>
        var loader = function() {
            setTimeout(function() {
                $('#loader').css({
                    'opacity': 0,
                    'visibility': 'hidden'
                });
            }, 1000);
        };
        $(function() {
            loader();
        });
    </script>
    <style>
        .Spinner {
            top: 50%;
            left: 50%;
            margin-top: -100px;
            margin-left: -100px;
        }
    </style>
</head>

<body>
    <div id="loader">
        <div aria-label="Orange and tan hamster running in a metal wheel" role="img"
            class="wheel-and-hamster Spinner">
            <div class="wheel"></div>
            <div class="hamster">
                <div class="hamster__body">
                    <div class="hamster__head">
                        <div class="hamster__ear"></div>
                        <div class="hamster__eye"></div>
                        <div class="hamster__nose"></div>
                    </div>
                    <div class="hamster__limb hamster__limb--fr"></div>
                    <div class="hamster__limb hamster__limb--fl"></div>
                    <div class="hamster__limb hamster__limb--br"></div>
                    <div class="hamster__limb hamster__limb--bl"></div>
                    <div class="hamster__tail"></div>
                </div>
            </div>
            <div class="spoke"></div>
        </div>
    </div>
    {{-- Thanh menu ở admin --}}
    @include('includes/nav')

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
    {{-- summernote --}}
    <script src="{{ asset('summernote-0.8.18-dist/summernote-lite.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                tabsize: 2,
                height: 200,
                color: '#fff',
            });
        });
    </script>
</body>

</html>
