@extends('layouts.admin')
@section('content')
<h1>Categories</h1>
<div class="col-sm-6">
    {!! Form::open(['method' => 'POST' , 'url' => '/admin/categories']) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name' , null , ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add category',['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
</div>
<div class="col-sm-6">
    <table class="table">
        <thead>
            <tr>
                <th>ID </th>
                <th>Name</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            @if($categories)
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td><a href="{{ route('categories.edit' , $category->id) }}">{{ $category->name }}</a></td>
                        <td>{{  $category->created_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

@stop