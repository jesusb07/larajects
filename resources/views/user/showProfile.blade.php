@extends('layouts.master')
@section('content')

    <div class="header-profile">
        <div class="avatar-profile">
            <img class='img-circle' src="{{url('images/'.$user->avatar.'')}}"><br>
        </div>
        <div class="info-profile">
             <strong> {{$user->username}} </strong> <br>
            <span> {{$user->first_name.' '. $user->last_name }} - {{$user->country}} </span> <br>
            <span> <i class="fa fa-user"></i> <b>{{$user->genre}}</b> &nbsp&nbsp
                <i class="fa fa-calendar"> </i> <b>{{$age}}</b> años
            </b> <br>
            <span> Se unio hace <b>{{$joinAge}}</b> años </span>
        </div>

    </div>

@endsection
