@extends('layouts.admin')
@section('content')
@if (Session::has('deleted_post'))
    <p class="bg-danger">{{ session('deleted_post') }}</p>
@endif
<h1>Posts</h1>
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>owner</th>
            <th>category</th>
            <th>photo</th>
            <th>title</th>
            <th>body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
    </thead>
    <tbody>
        @if ($posts)
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->user->name}}</td>
                    <td>{{ $post->category ? $post->category->name : '' }}</td>
                    <td><img src="{{ $post->photo? $post->photo->file : 'https://via.placeholder.com/50' }}" width="45" height="45"></td>
                    <td><a href="{{ route('posts.edit' , $post->id) }}">{{ $post->title }}</a></td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
@stop