@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 ">
              <div class="login">
                <div class="login-header">

                     <h1> <img src="{!! url('images/banners/logo2.png')!!}" width="70" height="70">
                           CritiPelis
                     </h1>
                     <hr>
                     <h4>Opiniones y review de peliculas y series.</h4>
                     <hr>

                </div>
                  @if (Session::has('errors'))
                      <div class="alert alert-danger form-signin" role="alert">
                          <ul>
                              <strong>Por favor corriga los siguietes errores </strong>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                <div class="login-container well">
                    <div class="login-form">
                        {!! Form::open(['url'=>'login','method'=>'post']) !!}

                        <div class="form-group ">
                            <div class="input-group">
                                <span class="input-group-addon"><i class=" fa fa-envelope" ></i></span>
                                {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'E-mail','required']) !!}
                            </div>
                       </div>
                        <div class="form-group ">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key" ></i></span>
                                {!! Form::password('password',['class'=>'form-control','placeholder'=>'Password']) !!}
                            </div>
                        </div>

                        <em> {!! link_to('#','¿Olvidaste la contraseña?',['class'=>'passRecovery'])!!}</em><br><br>
                        {!! Form::submit('Iniciar Sesión',['class'=>'btn btn-default']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
                <div class="login-footer">
                    <p> <a href="#">Registrate</a> | <a href="{!! url('/') !!}">Volver a CritiPelis</a></p>
                    <p>
                        © CritiPelis™ 2015-2016 - All rights reserved.
                    </p>
                </div>

              </div>
            </div>

        </div>
   </div>





@endsection