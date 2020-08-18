@extends('layouts.blog')

@section('title', 'Post')

@section('head')

@endsection

@section('header')
    <h1>{{$post->title}}</h1>
    <p>{{$post->title_desc}}</p>
@endsection

@section('entries')
    <p>{{$post->content}}</p>
    <img src="/assets/img/{{$post->picture}}" alt="Image" class="w3-left w3-margin-right" style="width:100%">

@endsection

@section('footer')
    <a href="/blog" target="blank"><button class="w3-button w3-black w3-padding-large w3-margin-bottom">Go Back</button></a>
    <a href="/blog/edit/id/{{$post->id}}" target="blank"><button class="w3-button w3-black w3-padding-large w3-margin-bottom">Edit &raquo;</button></a>
    <a href="/blog/delete/id/{{$post->id}}" target="blank"><button class="w3-button w3-black w3-padding-large w3-margin-bottom">Delete &raquo;</button></a>

@endsection

