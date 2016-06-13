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
                <div class="tab-content">
                    <div id="cuenta" class="tab-pane fade in active">
                        <h3>HOME</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div id="perfil" class="tab-pane fade">
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div id="password" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>

                </div>
            </div>
            <div class="col-md-5 well">
                <h4 class="text-center">Mi Avatar</h4>
            </div>

        </div>
    </div>




@endsection