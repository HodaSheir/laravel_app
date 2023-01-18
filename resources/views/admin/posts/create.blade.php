@extends('layouts.admin')
@section('content')
<h1>Create post</h1>
<div class="row">
    {!! Form::open(['method' => 'POST' , 'url' => '/admin/posts' , 'files'=>true]) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title' , null , ['class' => 'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('category_id','Category:') !!}
            {!! Form::select('category_id',[1 => 'options' ] , null , ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id','photo:') !!}
            {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body','Description:') !!}
            {!! Form::textarea('body',null, ['class'=>'form-control',
                                        'rows' => 3, 
                                        'name' => 'body',
                                        'id'   => 'body',]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create post',['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
</div>
<div class="row">
    @include('includes.form_errors')
</div>   
   
@stop