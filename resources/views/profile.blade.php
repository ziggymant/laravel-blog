@extends('layouts.home')

@section('content')

     <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    @yield('title')
                    <small>Secondary Text</small>
                </h1>

<h1>User profile</h1>

<div class="col-sm-3">

	<img height="150" src="{{$user->photo ? $user->photo->path : "/images/default.jpg"}}" class="img-resposnive img-rounded">

</div>

<div class="col-sm-9">

@if(count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif

	{!!Form::model($user, ['method'=>'PATCH', 'action'=>['PublicUserController@update', $user->id], 'files'=>true])!!}

		<div class="form-group">
			{!!Form::label('name', 'Name')!!}
			{!!Form::Text('name', null, ['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('email', 'Email')!!}
			{!!Form::email('email', null, ['class'=>'form-control'])!!}
		</div>

		<div class="form-group">
			{!!Form::label('status', 'Status')!!}
			{!!Form::select('is_active', array(1 =>'active', 0 =>'Inactive'), null, ['disabled','class'=>'form-control'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('password', 'Password')!!}
			{!!Form::password('password', ['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('photo_id', 'Photo')!!}
			{!!Form::file('photo_id', null, ['class'=>'form-control'])!!}
		</div>

		<div class="form-group">
			{!!Form::submit('Save changes', ['class'=>'btn btn-primary col-sm-3'])!!}
		</div>

	{!!Form::close()!!}


	{{-- {!!Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]])!!}

		<div class="form-group">
			{!!Form::submit('Delete user', ['class'=>'btn btn-danger col-sm-3'])!!}
		</div>

	{!!Form::close()!!} --}}

</div>



@endsection
