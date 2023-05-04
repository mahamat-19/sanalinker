<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <title>@yield('title')</title>
</head>
<body>
@include('front.menu')

        <section id="homepage">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @yield('content')
                        </div>
                        </div>
                    </div>
        </section>
        <footer class="container-fluid bg-priamry ">
     <p class="text-center texte-blue" style="margin-bottom: 0%">&copy;{{date('y')}} tum haklar saklidir</p>
        </footer>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
@yield('js')
</body>
</html>
