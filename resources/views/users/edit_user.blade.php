@extends('templates.template')


@section('content')
<div class="col-md-4 col-md-offset-4">
@if($user)
<form action="{{URL::to('user/'.$user->id)}}" method="post" >
  <div class="form-group">
    <input type="text" class="form-control"
    value="{{$user->firstname}}" name="firstname" placeholder="First Name">
  </div>
    <div class="form-group">
    <input type="text" class="form-control" 
    value="{{$user->lastname}}"
    name="lastname" placeholder="Last Name">
  </div>
  @if($departments)
  <div class="form-group">
    <select class="form-control" name="departmrnt_id">
    <option value="{{$user->department->id}}">{{$user->department->department_name}}</option>
    	@foreach($departments as $department)
        @if($department->id != $user->departmrnt_id)
    		<option value="{{ $department->id }}">{{ $department->department_name }}</option>
        @endif
    	@endforeach
    </select>	
  </div>
  <input name="_method" type="hidden" value="PUT">
  <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
  @endif
  <button type="submit" class="btn btn-success btn-block">Submit</button>
</form>	
@else
  <div class="jumbotron">
      <p>No user available</p>
    </div>
@endif
</div>

@endsection