@extends('layouts.blog')

@section('header')
    <h1>Edit Post</h1>
@endsection

@section('entries')
    {!! Form::open(['url' => '/blog/update', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            <div class="col-lg-10">
                {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
        </div>
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <div class="form-group">
            {{Form::label('title_desc', 'Description')}}
            <div class="col-lg-10">
                {{Form::text('title_desc', $post->title_desc, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
            </div>
        </div>
    @error('title_desc')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <div class="form-group">
            {{Form::label('content', 'Content')}}
            <div class="col-lg-10">
                {{Form::textarea('content', $post->content, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Content'])}}
            </div>
        </div>
    @error('content')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        <div class="form-group">
            <img src="/assets/img/{{$post->picture}}" alt="Nature" style="width: 100px">
            {{Form::file('picture')}}
        </div>
    @error('picture')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
        {{Form::hidden('id', $post->id)}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

@section('footer')
    <a href="/blog/{{$post->id}}" target="blank"><button class="w3-button w3-black w3-padding-large w3-margin-bottom">Go Back &raquo;</button></a>
@endsection
