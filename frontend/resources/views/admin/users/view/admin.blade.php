@extends('layouts.admin')

@section('content')

<h1 class="text-center">Active Admins</h1>
<div class="card mb-3 m-4">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Admins Table
    <a class="btn btn-success float-right" style="color:white" href="">
      <i class="fa fa-user-plus" aria-hidden="true"></i> Add Admin</a>
    </div>
    <div class="card-body">
      <div class="table-responsive"></div>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </tfoot>
        <tbody>
          @forelse ($users as $user)
          @if ($user->userType == 'admin')
          <tr>
            <td>{{ $user->firstName }}</td>
            <td>{{ $user->lastName }}</td>
            <td>{{ $user->contactNumber }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->gender }}</td>
          </tr>
          @endif
          @empty
          
          @endforelse
          
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
@endsection
