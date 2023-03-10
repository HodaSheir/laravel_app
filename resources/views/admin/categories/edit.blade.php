@extends('layouts.admin')
@section('content')
<h1>Categories</h1>
<div class="col-sm-6">
    {!! Form::model($category,['method' => 'PATCH' , 'route' => ['categories.update', $category->id]]) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name' , null , ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update category',['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
</div>
<div class="col-sm-6">
    {!! Form::model($category ,['method' => 'DELETE' , 'route' => ['categories.destroy', $category->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete category',['class' => 'btn btn-danger col-sm-3']) !!}
        </div>
    {!! Form::close() !!}
</div>
@stop