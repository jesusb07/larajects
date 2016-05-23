<html>
<head>
    <meta charset="utf-8">
    <title>CritiPelis | Iniciar Sesion</title>
    <meta name="description" content="critipelis, peliculas, criticas, comentarios, series ">
    <meta name="author" content="loreango.inc">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{!! url('images/banners/logo.png') !!}">
    <!-- Web Fonts -->

            <!-- Bootstrap core CSS -->
    {!! Html::style('css/plugins/bootstrap.css') !!}
            <!-- Font Awesome CSS -->
    {!! Html::style('fonts/font-awesome.css') !!}
            <!-- Plugins -->
    {!! Html::style('css/plugins/animations.css') !!}
            <!-- Worthy core CSS file -->
    {!! Html::style('css/authstyle.css') !!}

</head>
<body>
<div class="scrollToTop"><i class="icon-up-open-big"></i></div>


@yield('content')


{!! Html::script('js/plugins/jquery.min.js') !!}
{!! Html::script('js/plugins/bootstrap.min.js') !!}

</body>
</html>