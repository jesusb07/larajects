{!! Form::open(['url'=>'#','method'=>'post','class'=>'form-password']) !!}
<div class="form-group ">
    <div class="row">
        <div class="col-sm-4">
            {!! Form::label('label','Contraseña Actual') !!}
        </div>
        <div class="col-sm-6">
            {!! Form::password('actual_password',['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group ">
    <div class="row">
        <div class="col-sm-4">
            {!! Form::label('label','Contraseña Nueva') !!}
        </div>
        <div class="col-sm-6">
            {!! Form::password('new_password',['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group ">
    <div class="row">
        <div class="col-sm-4">
            {!! Form::label('label','Confirmar Contraseña Nueva') !!}
        </div>
        <div class="col-sm-6">
            {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
        </div>
    </div>
</div>

<div class="update-btn text-center">
    {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
</div>
{!! Form::close() !!}