@extends('layouts.admin')

@section('content')

<h1>Posts</h1>

<table class="table">
<thead>
  <tr>
    <th>Post id</th>
    <th>Photo</th>
    <th>User</th>
    <th>Category</th>
    <th>Title</th>
    <th>Body</th>
    <th>Comments</th>
    <th>Created at</th>
    <th>Updated at</th>
    <th>View post</th>
  </tr>
</thead>
<tbody>
@if($posts)
  @foreach ($posts as $post)
  <tr>
    <td>{{$post->id}}</td>
    <td><img height="50" src="{{$post->photo ? $post->photo->path : "images/default.jpg"}}" alt=""></td>
    <td>{{$post->user->name}}</td>
    <td>{{$post->category ? $post->category->name : "uncategorized"}}</td>
    <td><a href="/admin/posts/{{$post->id}}/edit">{{$post->title}}</a></td>
    <td>{{str_limit($post->body, 10)}}</td>
    <td><a href="{{route('comments.show', $post->id)}}">View comments</a></td>
    <td>{{$post->created_at->diffForHumans()}}</td>
    <td>{{$post->updated_at}}</td>
    <td><a href="{{route('home.post', $post->slug)}}">View post</a></td>
  </tr>
  @endforeach
@endif
</tbody>
</table>

<div class="row">
  <div class="col-sm-6 col-sm-offset-5">
      {{$posts->render()}}
  </div>

</div>

@endsection
