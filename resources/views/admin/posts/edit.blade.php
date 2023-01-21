@extends('layouts.admin')
@section('content')
<h1>Edit post</h1>
<div class="row">
    <div class="col-sm-3">
        <img src="{{ $post->photo ? $post->photo->file :'https://via.placeholder.com/400'}}" alt="" class="img-responsive img-rounded">
    
    </div>
    <div class="col-sm-9">
    {!! Form::model($post , ['method' => 'PATCH' , 'route' => ['posts.update', $post->id], 'files'=>true]) !!}
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title' , null , ['class' => 'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('category_id','Category:') !!}
            {!! Form::select('category_id', ['' => 'Please select'] + $categories , null , ['class' => 'form-control']) !!}
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
            {!! Form::submit('Edit post',['class' => 'btn btn-primary col-sm-3']) !!}
        </div>
    {!! Form::close() !!}
    {!! Form::model($post ,['method' => 'DELETE' , 'route' => ['posts.destroy', $post->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete post',['class' => 'btn btn-danger col-sm-3']) !!}
        </div>
    {!! Form::close() !!}
    </div>
</div>
<div class="row">
    @include('includes.form_errors')
</div>   
   
@stop