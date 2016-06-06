<html>
<head>
    <meta charset="utf-8">
    <title>@yield('tittle')</title>
    <meta name="description" content="critipelis, peliculas, criticas, comentarios, series ">
    <meta name="author" content="loreango.inc">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{!! url('images/banners/logo.png') !!}">

    <!-- Plugins: bootstrap,animations,fonts-->
    {!! Html::style('assets/plugins/bootstrap.css') !!}
    {!! Html::style('assets/fonts/font-awesome.css') !!}
    {!! Html::style('assets/plugins/animations.css') !!}
            <!--  core CSS file -->
    {!! Html::style('assets/css/authstyle.css') !!}

</head>
<body>
<div class="scrollToTop"><i class="icon-up-open-big"></i></div>


@yield('content')


{!! Html::script('js/plugins/jquery.min.js') !!}
{!! Html::script('js/plugins/bootstrap.min.js') !!}

</body>
</html>