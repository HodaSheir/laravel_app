@extends('layouts.admin')


@section('content')

    <h1>Create user</h1>
    {!! Form::open(['method' => 'POST' , 'url' => '/admin/users' , 'files'=>true]) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name' , null , ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::email('email' , null , ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id','Role:') !!}
            {!! Form::select('role_id', $roles, null , ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active','Status:') !!}
            {!! Form::select('is_active',[1 => 'Active' , 0 => 'Not active'] , 0 , ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id','photo:') !!}
            {!! Form::file('photo_id', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password','Password:') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create user',['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    @include('includes.form_errors')
   
@stop