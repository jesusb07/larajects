
<header class="navbar navbar-fixed-top ">
    <div class="top-banner">
        <div class="container ">
            <div class="row">
                <img class="img-responsive" src="{!! url('images/banners/top_banner.png') !!}">
            </div>
        </div>
    </div>
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-logo" href="#">
                <img class="img-responsive" src="{{url('images/banners/top_logo.png')}}">
            </a>
            {!! Form::open(['url'=>'#','method'=>'post','class'=>'navbar-form pull-left']) !!}
                <div class="input-group">
                    {!! Form::text('search',null,['class'=>'form-control','placeholder'=>'Buscar Titulo,Persona,Año...']) !!}
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-warning"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            {!! Form::close() !!}

        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"><i class="fa fa-home"></i></a></li>
                <li><a href="#">Estrenos</a></li>
                <li><a href="#">Top Rating</a></li>
                <li><a href="#">Top Comentadas</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right ">
                <li class="dropdown top-login ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu pull-center ">
                           <div class="form-login-navbar">
                               @include('partials.forms.top_login')
                           </div>
                        </ul>
                </li>
            </ul>

        </div>
    </nav>
</header>
