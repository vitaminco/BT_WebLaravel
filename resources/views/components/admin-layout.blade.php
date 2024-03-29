<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $attributes['title'] ?? 'BT lavarel' }}</title>
    @foreach ($datanb as $item)
        <link rel="icon" href="{{ $item->logo }}">
    @endforeach
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--scroll animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--animation text-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- summernote --}}
    <link rel="stylesheet" href="{{ asset('summernote-0.8.18-dist/summernote-lite.min.css') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    {{ $css ?? '' }}

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

        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {}

        /* Handle */
        ::-webkit-scrollbar-thumb {
            border-radius: 20px;
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
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

    {{ $slot }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <!--scroll animation-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- js main --}}
    <script src="{{ asset('js/main.js') }}"></script>
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
    {{-- chân trang --}}
    @include('includes/admin-footer')
</body>
<script>
    AOS.init();
</script>

</html>
