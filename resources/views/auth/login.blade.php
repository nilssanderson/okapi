@extends('layouts.auth')

@section('title', 'Login')

@section('heading', 'Welcome, please login.')

@section('content')
    {!! Form::open() !!}

        <div class="form form-group">
            {!! From::label('email') !!}
            {!! From::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form form-group">
            {!! From::label('password') !!}
            {!! From::text('password', ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}

        <a href="#" class="small">Forgot password?</a>

    {!! Form::close() !!}
@endsection