@extends('layouts.admin')


@section('content')

    <h1>Edit user</h1>
    <div class="row">
        <div class="col-sm-3">
            <img src="{{ $user->photo ? $user->photo->file :'https://via.placeholder.com/400'}}" alt="" class="img-responsive img-rounded">
        
        </div>
        <div class="col-sm-9">
            {!! Form::model($user , ['method' => 'PATCH' , 'route' => ['users.update', $user->id] , 'files'=>true]) !!}
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
                    {!! Form::select('is_active',[1 => 'Active' , 0 => 'Not active'] ,  $user->is_active  , ['class' => 'form-control']) !!}
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
                    {!! Form::submit('Edit user',['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
       
    </div>
  
    <div class="row">
        @include('includes.form_errors')
    </div>
    
   
@stop