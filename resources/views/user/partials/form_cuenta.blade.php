{!! Form::model($user,['route'=>'miperfil.update',$user,'method'=>'PUT','class'=>'form-cuenta']) !!}
<div class="form-group ">
    <div class="row">
        <div class="col-sm-2">
            {!! Form::label('label','Nombre') !!}
        </div>
        <div class="col-sm-10">
            {!! Form::text('first_name',null,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group ">
    <div class="row">
        <div class="col-sm-2">
            {!! Form::label('label','Apellido') !!}
        </div>
        <div class="col-sm-10">
            {!! Form::text('last_name',null,['class'=>'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group ">
    <div class="row">
        <div class="col-sm-2">
            {!! Form::label('label','E-Mail') !!}
        </div>
        <div class="col-sm-10">
            {!! Form::text('email',null,['class'=>'form-control','disabled']) !!}
        </div>
    </div>
</div>
<div class="form-group ">
    <div class="row">
        <div class="col-sm-2">
            {!! Form::label('label','username') !!}
        </div>
        <div class="col-sm-10">
            {!! Form::text('username',null,['class'=>'form-control','disabled']) !!}
        </div>
    </div>
</div>
<div class="form-group ">
    <div class="row">
        <div class="col-sm-2">
            {!! Form::label('label','Pais') !!}
        </div>
        <div class="col-sm-10">
            {!! Form::select('country',[config('options.countries')],null,['class'=>'form-control',
                                      'placeholder'=>'Seleccionar Pais','required']) !!}
        </div>
    </div>
</div>
<div class="form-group ">
    <div class="row">
        <div class="col-sm-2">
            {!! Form::label('label','Nacimiento') !!}
        </div>
        <div class="col-sm-3">
            <select name="day" class="form-control">
              <option value="" selected>Dia</option>
                @for($i=1;$i<32;$i++)
                    @if($i == $user->birthdate->day)
                        <option value="{!! $i !!}" selected>{!! $i !!}</option>
                    @else
                        <option value="{!! $i !!}">{{$i}}</option>
                    @endif

                @endfor
            </select>
        </div>
        <div class="col-sm-3">
            <select name="month" class="form-control">
                <option value="" selected>Mes</option>
                @for($i=1;$i<13;$i++)
                    @if($i == $user->birthdate->month)
                        <option value="{!! $i !!}" selected>{!! $i !!}</option>
                    @else
                        <option value="{!! $i !!}">{{$i}}</option>
                    @endif
                @endfor
            </select>
        </div>
        <div class="col-sm-3">
            <select name="year" class="form-control">
                <option value="" selected>Año</option>
                @for($i=2016;$i>=1940;$i--)
                    @if($i == $user->birthdate->year)
                        <option value="{!! $i !!}" selected>{!! $i !!}</option>
                    @else
                        <option value="{!! $i !!}">{{$i}}</option>
                    @endif
                @endfor
            </select>
        </div>
    </div>
</div>
<div class="update-btn text-center">
    {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
</div>
{!! Form::close() !!}