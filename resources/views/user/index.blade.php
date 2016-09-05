@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row profile-container">
            <div class="col-md-7 well">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#cuenta">Cuenta</a></li>
                    <li><a data-toggle="tab" href="#perfil">Perfil</a></li>
                    <li><a data-toggle="tab" href="#password">Cambiar Password</a></li>

                </ul>
                <div class="tab-container">
                    @include('user.partials.alerts')

                    <div class="tab-content">
                        <div id="cuenta" class="tab-pane fade in active">
                            @include('user.partials.form_cuenta')
                        </div>

                        <div id="perfil" class="tab-pane fade ">
                            @include('user.partials.form_profile');

                        </div>
                        <div id="password" class="tab-pane fade ">
                            @include('user.partials.form_password')
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-5 well">
                <h4 class="text-center"><b>Mi Avatar</b></h4>
                <div class="avatar-preview">
                    <img class='img-circle' src="images/{{$user->avatar}}"><br><br>

                    <div class="avatar-upload btn btn-info">
                        {!! Form::open(['url'=>'uploadAvatar','method'=>'POST','files'=>true,'enctype'=>'multipart/form-data']) !!}
                            {{csrf_field()}}
                        {!! Form::file('img_avatar',['class'=>'btn-file','required']) !!}

                    </div><br><br>
                    {!! Form::submit('Cambiar Avatar',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}

                </div>

                <div class="desactivar well">
                    <button class="btn btn-danger"> <b>Desactivar Cuenta</b></button>

                </div>
            </div>

        </div>
    </div>




@endsection