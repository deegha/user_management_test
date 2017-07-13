@extends('templates/layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <table class="table">
          <thead class="thead-inverse">
            <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Deprtment</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
               <tr>
                    <th>{{$user->employee_id}}</th>
                    <th>{{$user->firstname}}</th>
                    <th>{{$user->lastname}}</th>
                    
               </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>

@endsection