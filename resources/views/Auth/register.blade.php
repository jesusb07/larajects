@extends('layouts.auth')
@section('tittle')
    Critipelis | Registro
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 ">
                <div class="register">
                    <div class="register-header">

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
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <h4>Datos de Acceso.</h4>
                    <div class="register-container well">
                        <div class="register-form">
                            {!! Form::open(['url'=>'register','method'=>'post']) !!}
                            <div class="form-group ">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class=" fa fa-user" ></i></span>
                                    {!! Form::text('username',null,['class'=>'form-control','placeholder'=>'Nombre de Usuario','required']) !!}
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class=" fa fa-envelope" ></i></span>
                                    {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'E-mail','required']) !!}
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class=" fa fa-envelope" ></i></span>
                                    {!! Form::text('email_confirmation',null,['class'=>'form-control','placeholder'=>'Repetir E-Mail','required']) !!}
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key" ></i></span>
                                    {!! Form::password('password',['class'=>'form-control','placeholder'=>'Password']) !!}
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key" ></i></span>
                                    {!! Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Repetir Password']) !!}
                                </div>
                            </div>

                        </div>
                    </div>


            </div>

            <div class="col-md-5 col-md-offset-1">
                <h4>Datos Personales.</h4>
                <div class="register-container well">
                    <div class="register-form">


                        <div class="form-group ">
                            <div class="input-group">
                                <span class="input-group-addon"><i class=" fa fa-pencil" ></i></span>
                                {!! Form::text('first_name',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-pencil" ></i></span>
                                {!! Form::text('last_name',null,['class'=>'form-control','placeholder'=>'Apellido','required']) !!}
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar" ></i></span>
                                <span class="input-group-btn">
                                     <select name="day" class="form-control" required >
                                         <option value="" selected>Dia</option>
                                         @for($i=1;$i<32;$i++)
                                             <option value="{!! $i !!}">{{$i}}</option>
                                         @endfor
                                     </select>
                                </span>
                               <span class="input-group-btn">
                                     <select name="month" class="form-control" required  >
                                         <option value="" selected>Mes</option>
                                         @for($i=1;$i<=12;$i++)
                                             <option value="{!! $i !!}">{{$i}}</option>
                                         @endfor
                                     </select>
                                </span>
                                <span class="input-group-btn">
                                     <select name="year" class="form-control" required >
                                         <option value="" selected>Año</option>
                                         @for($i=2016;$i>=1940;$i--)
                                             <option value="{!! $i !!}">{{$i}}</option>
                                         @endfor
                                     </select>
                                </span>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-pencil" ></i></span>
                                {!! Form::select('country',[config('options.countries')],null,['class'=>'form-control',
                                    'placeholder'=>'Seleccionar Pais','required']) !!}
                            </div>
                        </div>

                    </div>
                </div>
                <div class="register-btn">
                    {!! Form::submit('Registrarme',['class'=>'btn btn-warning']) !!}
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-12">


                <div class="register-footer"><br>
                    <p> <a href="{!! url('login') !!}">Iniciar Sesión</a> | <a href="{!! url('/') !!}">Volver a CritiPelis</a></p>
                    <p>
                        © CritiPelis™ 2015-2016 - All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>


@endsection