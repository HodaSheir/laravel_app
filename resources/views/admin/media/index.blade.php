@extends('layouts.admin')
@section('content')
<h1>Media</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID </th>
            <th>Name</th>
            <th>Created at</th>
        </tr>
    </thead>
    <tbody>
        @if($photos)
            @foreach ($photos as $photo)
                <tr>
                    <td>{{ $photo->id }}</td>
                    <td><img src="{{ $photo->file }}" alt="no_image" width="50" height="50"></td>
                    <td>{{  $photo->created_at->diffForHumans()}}</td>
                    <td>
                        {!! Form::model($photo ,['method' => 'DELETE' , 'route' => ['media.destroy', $photo->id]]) !!}
                            <div class="form-group">
                                {!! Form::submit('Delete',['class' => 'btn btn-danger col-sm-3']) !!}
                            </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>    

@stop