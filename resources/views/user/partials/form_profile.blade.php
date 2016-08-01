{!! Form::model($user->userProfile,['url'=>'updateProfile','method'=>'PUT','class'=>'form-cuenta']) !!}
<div class="form-group ">
    <div class="row">
        <div class="col-sm-2">
            {!! Form::label('label','Biografia') !!}
        </div>
        <div class="col-sm-10">
            {!! Form::textarea('bio',null,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group ">
    <div class="row">
        <div class="col-sm-2">
            {!! Form::label('label','Peliculas Favoritas') !!}
        </div>
        <div class="col-sm-10">
            {!! Form::text('fav_movie',null,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group ">
    <div class="row">
        <div class="col-sm-2">
            {!! Form::label('label','Actores Favoritos') !!}
        </div>
        <div class="col-sm-10">
            {!! Form::text('fav_performer',null,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group ">
    <div class="row">
        <div class="col-sm-2">
            {!! Form::label('label','Generos Favoritos') !!}
        </div>
        <div class="col-sm-10">
            {!! Form::text('fav_genre',null,['class'=>'form-control']) !!}
        </div>
    </div>
</div>


<div class="update-btn text-center">
    {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
</div>
{!! Form::close() !!}