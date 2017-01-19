@extends('layouts.home')
@section('title', 'Category | '. $category->name)
@section('content')



     <!-- Page Content -->
    <div class="container">

        <div id="post" class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    @yield('title')
                    
                </h1>

    @foreach($posts as $post)
    <hr>
    <h2>
        <a href="{{route('home.post', $post->slug)}}">{{$post->title}}</a>
    </h2>
    <p class="lead">
        by <a href="index.php">{{$post->user->name}}</a>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> Posted on {{$post->created_at}}</p>
    <p>{{strip_tags(str_limit($post->body, 300))}}</p>
    <a class="btn btn-primary" href="{{route('home.post', $post->slug)}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

    <hr>


    @endforeach

{{--     <div class="row">
      <div class="col-sm-6 col-sm-offset-7">
          {{$posts->render()}}
      </div>
    </div> --}}
@endsection
