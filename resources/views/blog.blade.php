@extends('layouts.blog')

@section('title',$initial['header'])

@section('header')
                <h1><b>MY BLOG</b></h1>
    <p>Welcome to the blog of <span class="w3-tag">{{$initial['user_name']}}</span></p>
@endsection



@section('entries')
 @foreach($initial['posts'] as $post)
<div class="w3-card-4 w3-margin w3-white">
    <img src="/assets/img/{{$post->picture}}" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>{{$post->title}}</b></h3>
      <h5>{{$post->title_desc}}, <span class="w3-opacity">{{$post->create_date}}</span></h5>
    </div>

    <div class="w3-container">
      <p>{{$post->content}}</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b><a href="/blog/{{$post->id}}">READ MORE</a>  &raquo;</b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span class="w3-tag">{{$post->comments}}</span></span></p>
        </div>
      </div>
    </div>
  </div>
  <hr>
   @endforeach


@endsection


@section('aboutCard')
                        <img src="/assets/img/avatar_g.jpg" style="width:100%">
    <div class="w3-container w3-white">
    <h4><b>My Name</b></h4>
    <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
    </div>
@endsection

@section('popPosts')
                        <div class="w3-container w3-padding">
        <h4>Popular Posts</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
        @foreach($initial['pop_posts'] as $post)
        <li class="w3-padding-16">
            <img src="/assets/img/{{$post['pic']}}" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">{{$post['name']}}</span><br>
            <span>{{$post['txt']}}</span>
        </li>

        @endforeach

@endsection

@section('labelTags')

    <div class="w3-container w3-white">
        <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
        </p>
    </div>

@endsection

@section('footer')

{{--            <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>--}}
{{--    <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next &raquo;</button>--}}
    <a href="/alarm" target="blank"><button class="w3-button w3-black w3-padding-large w3-margin-bottom">Alarm &raquo;</button></a>
    <a href="/cv" target="blank"><button class="w3-button w3-black w3-padding-large w3-margin-bottom">CV &raquo;</button></a>
    <a href="/blog/create" target="blank"><button class="w3-button w3-black w3-padding-large w3-margin-bottom">Add Post &raquo;</button></a>

    <p>Powered by <a href="#" target="_blank">Valters</a></p>

@endsection
