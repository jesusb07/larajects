
    {!! Form::open(['url'=>'login','method'=>'post']) !!}
    {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'E-Mail','required']) !!}
    {!! Form::password('password',['class'=>'form-control','placeholder'=>'Password','required']) !!}
    <em> {!! link_to('#','¿Olvidaste la contraseña?',['class'=>'passRecovery'])!!}</em><br><br>
    {!! Form::submit('Entrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}<br>

    {!! Form::open(['url'=>'registro','method'=>'get']) !!}
    {!! Form::submit('Crear Cuenta',['class'=>'btn btn-warning']) !!}
    {!! Form::close() !!}<br>