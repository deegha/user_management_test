@extends('templates.template')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a href="{{URL::to('/user/create')}}" class="btn btn-success pull-right">Add New User</a>
		</div>
	</div>
	<div class="row">
	@if($users)
		<table class="table">
		  <thead class="thead-inverse">
		    <tr>
		      <th>#</th>
		      <th>First Name</th>
		      <th>Last Name</th>
		      <th>Deprtment</th>
		      <th>Actions</th>
		    </tr>
		  </thead>
		  <tbody>
		   	@foreach ($users as $user)
			   <tr>
				   	<th>{{$user->id}}</th>
			      	<th>{{$user->firstname}}</th>
			      	<th>{{$user->lastname}}</th>
			      	<th>{{$user->department->department_name}}</th>
			      	<th>
			      	<a href="{{URL::to('user/'.$user->id.'/edit')}}" class="btn btn-info  btn-block">Edit {{$user->firstname}}</a> 
			      	</th>
			      	<th>
					<form method="post" action="{{URL::to('user/'.$user->id)}} " class="d-inline">
						<input type="submit" name="delete" value="Delete {{$user->firstname}}" class="btn btn-danger  btn-block">
						<input name="_method" type="hidden" value="DELETE">
  						<input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
					</form>
					</th>
			   </tr>
			@endforeach
		  </tbody>
		</table>
	@else
		<div class="jumbotron">
		  <p>No users available</p>
		</div>
	@endif
	</div>
</div>

@endsection