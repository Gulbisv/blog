@extends('layouts.blog')

@section('header')
    <h1>Create new post</h1>
@endsection

@section('entries')
{!! Form::open(['url' => '/blog/store', 'class' => 'form-horizontal', 'files'=>'true']) !!}
    @csrf
    <div class="form-group">
        {!! Form::label('title', 'Title:', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!! Form::text('title', $value = null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
        </div>
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {!! Form::label('title_desc', 'Description:', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!! Form::text('title_desc', $value = null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
        </div>
        @error('title_desc')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {!! Form::label('content', 'Content:', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!! Form::textarea('content', $value = null, ['class' => 'form-control', 'placeholder' => 'Content']) !!}
        </div>
        @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {!! Form::label('picture', 'Image:', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!! Form::file('picture')!!}
        </div>
        @error('picture')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
{!! Form::submit('Click Me!') !!}

{!! Form::close() !!}
@endsection
@section('footer')
    <a href="/blog" target="blank"><button class="w3-button w3-black w3-padding-large w3-margin-bottom">Go Back &raquo;</button></a>
@endsection
