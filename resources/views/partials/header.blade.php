
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
            <button type="button" class="navbar-toggle offcanvas-toggle" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

                <a class="navbar-logo" href="{{url('/')}}">
                    <img class="img-responsive" src="{{url('images/banners/top_logo.png')}}">
                </a>
                {!! Form::open(['url'=>'login','method'=>'post','class'=>'navbar-form pull-left']) !!}
                    <div class="input-group">
                        {!! Form::text('search',null,['class'=>'form-control','placeholder'=>'Buscar Titulo,Persona,Año...']) !!}
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-warning"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                {!! Form::close() !!}



            </div>

            <div class="hidden-xs">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><i class="fa fa-home"></i></a></li>
                    <li><a href="#">Estrenos</a></li>
                    <li><a href="#">Top Rating</a></li>
                    <li><a href="#">Top Comentadas</a></li>
                </ul>

                <!-- MENU LOGIN sm,md,lg-->
                <ul class="nav navbar-nav navbar-right  ">
                   @if(isset($user))
                    <li class="dropdown hidden-xs">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {!! $user->username !!}
                             <img class="img-circle" src="{{url('images/avatars/user1.png')}}"></img> <b class="caret"></b>
                         </a>

                         <ul class="dropdown-menu pull-right ">
                            <li><a href="{{url('miperfil')}}">Perfil</a> </li>
                             <li role="separator" class="divider"></li>
                              <li><a href="{!! url('logout') !!}">Salir</a> </li>
                          </ul>
                        </li>
                    @else
                        <li class="dropdown hidden-xs login-form ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Login/Registrate <b class="caret"></b>
                            </a>

                            <ul class="dropdown-menu pull-center ">
                               <div class="form-login">
                                   @include('partials.forms.top_login')
                               </div>
                            </ul>
                     @endif
                         </li>
                </ul>
            </div>

            <!-- offcanvas mobile sidebar menu -->

        <div class="visible-xs">
            <div class="navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-fade " id="js-bootstrap-offcanvas">
                @if(isset($user))

                    <div class="offcanvas-header ">
                        <div class="avatar list-group">
                            <a href="#user-menu" data-toggle="collapse" data-parent="#MainMenu">
                                <img class="img-circle" src="{!! url('images/avatars/user1.png') !!}">
                                <b class="caret"></b>
                            </a>
                            <strong>{!! $user->username !!}</strong>
                            <div class="collapse" id="user-menu">
                                <a href="" class="list-group-item">Perfil</a>

                                <a href="{!! url('logout') !!}" class="list-group-item">Salir</a>
                           </div>

                        </div>

                    </div>
                @else
                    <div class="offcanvas-header">
                        <ul class="nav sign">
                            <li class="pull-left">
                                <a href="{!! url('login') !!}"><img src="{!! url('images/signin.png') !!}">
                                    <br>Login
                                </a>
                            </li>
                            <li class="pull-right"><a href="#"><img src="{!! url('images/signup.png') !!}">
                                    <br> Registrate
                                </a>
                            </li>

                        </ul>
                    </div>
                @endif
                <div class="offcanvas-body">
                    <ul class="nav ">
                        <li class="active"><a href="#"><i class="fa fa-home"></i></a></li>
                        <li><a href="#">Estrenos</a></li>
                        <li><a href="#">Top Rating</a></li>
                        <li><a href="#">Top Comentadas</a></li>

                    </ul>

                </div>

            </div>
        </div>
    </nav>

</header>
