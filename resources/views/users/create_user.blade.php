@extends('templates.template')


@section('content')
<div class="col-md-4 col-md-offset-4">
<form action="{{URL::to('user')}}" method="post" >
  <div class="form-group">
    <input type="text" class="form-control" name="firstname" placeholder="First Name">
  </div>
    <div class="form-group">
    <input type="text" class="form-control" name="lastname" placeholder="Last Name">
  </div>
  @if($departments)
  <div class="form-group">
    <select class="form-control" name="departmrnt_id">
    	@foreach($departments as $department)
    		<option value="{{ $department->id }}">{{ $department->department_name }}</option>
    	@endforeach
    </select>	
  </div>
  <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
  @endif
  <button type="submit" class="btn btn-success btn-block">Submit</button>
</form>	
</div>

@endsection