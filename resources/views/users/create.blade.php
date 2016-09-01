@extends ('layouts.master')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading">Register</div>
        <div class="panel-body">
            {!! Form::open(array('route' => 'users.store')) !!}
            <div class="form-group">
                {!! Form::label('name', 'Username', array('class' => "center")) !!}
                {!! Form::text('name', null, array('class' => 'form-control text-center')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email') !!}
                {!! Form::text('email', null, array('class' => 'form-control text-center')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password') !!}
                {!! Form::password('password', array('class' => 'form-control text-center')) !!}
            </div>
            {!! Form::token() !!}
            {!! Form::submit('Register', array('class' => 'btn btn-success btn-block')) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection