@extends('layouts.app')

@section('content')

<br>
<div class='text-center'>
    <div class='col-md-4 col-md-offset-4'>
        <div class='panel panel-default'>
            <div class='panel-heading'>
                Login to admin panel
            </div>
            <div class='panel-body'>

                {!! Form::open(['url' => '/login', 'method' => 'POST']) !!}

                <div class='form-group'>
                    {!! Form::label('email', 'Email') !!}
                    @if($errors->first('email'))
                    <div class='alert alert-danger'>
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                    {!! Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                </div>

                <div class='form-group'>
                    {!! Form::label('password', 'Password') !!}
                    @if($errors->first('password'))
                    <div class='alert alert-danger'>
                        {{ $errors->first('password') }}
                    </div>
                    @endif
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                </div>

                <div class='form-group'>
                    {!! Form::submit('Log in', ['class' => 'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@endsection