@extends('layouts.admin')
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css">
@stop
@section('content')
<h1>Upload Media</h1>
<div class="row">
    {!! Form::open(['method' => 'POST' , 'url' => '/admin/media' , 'files'=>true , 'class'=>'dropzone']) !!}


    {!! Form::close() !!}
</div>
@stop
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
@stop