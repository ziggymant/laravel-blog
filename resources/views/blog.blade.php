@extends('layouts.home')
@section('title', 'Blog | Home')
@section('content')

        <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('images/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Laravel Blog</h1>
                        <hr class="small">
                        <span class="subheading">Subheading</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

     <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    @yield('title')
                    <small>#</small>
                </h1>

    @foreach($posts as $post)
    <h2>
        <a href="{{route('home.post', $post->slug)}}">{{$post->title}}</a>
    </h2>
    <p class="lead">
        by <a href="index.php">{{$post->user->name}}</a>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> Posted on {{$post->created_at}}</p>
    <hr>
    <img height="200" class="img-responsive" src="{{url($post->photo->path)}}" alt="">
    <hr>
    <p>{{strip_tags(str_limit($post->body, 300))}}</p>
    <a class="btn btn-primary" href="{{route('home.post', $post->slug)}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

    <hr>


    @endforeach

    <div class="row">
      <div class="col-sm-6 col-sm-offset-7">
          {{$posts->render()}}
      </div>
    </div>
@endsection
