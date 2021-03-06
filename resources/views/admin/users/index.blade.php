@extends('layouts.admin')

@section('content')

	<h1>Users</h1>

	@if(Session::has('message'))
		<p class="bg-danger">{{Session('message')}}</p>
	@endif

	<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>

    @if($users)
      @foreach($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td><img height="50" src="{{$user->photo ? $user->photo->path : "/images/default.jpg"}}"</td>
          <td><a href="/admin/users/{{$user->id}}/edit">{{$user->name}}</a></td>
          <td>{{$user->email}}</td>
          <td>{{$user->role->name }}</td>
          <td>{{ $user->is_active == 1 ? "Active" : "Inactive"}}</td>
          <td>{{$user->created_at->diffForHumans()}}</td>
          <td>{{$user->updated_at}}</td>
        </tr>
      @endforeach
    @endif

    </tbody>
  </table>



@endsection
