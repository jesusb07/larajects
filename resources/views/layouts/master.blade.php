<!DOCTYPE html>
<html>
    <head>
        <title>CritiPelis</title>
        <meta charset="utf-8">
        <meta name=”viewport” content=”width=device-width, initial-scale=1”>
        <meta name="description" content="critipelis, peliculas, criticas, comentarios, series ">
        <meta name="author" content="loreango.inc">

        <link rel="shortcut icon" href="{{url('images/banners/logo.png')}}">
        <!-- Plugins: bootstrap,animations,fonts-->
        {!! Html::style('assets/plugins/bootstrap.css') !!}
        {!! Html::style('assets/plugins/bootstrap.offcanvas.min.css') !!}
        {!! Html::style('assets/fonts/font-awesome.css') !!}
        {!! Html::style('assets/plugins/animations.css') !!}
                <!--  core CSS file -->
        {!! Html::style('assets/css/style.css') !!}
        {!! Html::style('assets/css/offcanvas.css') !!}


    </head>
    <body>
        <div class="scrollToTop"><i class="icon-up-open-big"></i></div>
          @include('partials.header')
             @yield('content')

        {!! Html::script('js/plugins/jquery.min.js') !!}
        {!! Html::script('js/plugins/bootstrap.min.js') !!}
        {!! Html::script('js/plugins/bootstrap.offcanvas.js') !!}



    </body>
</html>
