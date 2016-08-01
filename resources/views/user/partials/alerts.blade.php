@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <p>Corriga los siguientes errores: </p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('message'))
    <div class="alert alert-success text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{!! Session::get('message') !!} </strong>
    </div>
@endif

@if(Session::has('error_message'))
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p>Corriga los siguientes errores: </p>
        <ul>
            <li><strong>{!! Session::get('error_message') !!} </strong></li>
        </ul>
    </div>

@endif