@extends('layouts.main');
@section('Content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-success" href="{{ Route('add.user') }}">Add User</a>
                    </div>
                    <div class="col">
                        <h2 style="font-family: 'Concert One', cursive;">All Registered Data from Database</h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (Session::get('msg'))
                    <p class="alert alert-success">
                      {{ Session::get('msg') }}
                    </p>
                @endif
                <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th scope="col"><strong>Id</strong></th>
                        <th scope="col"><strong>Name</strong></th>
                        <th scope="col"><strong>Email</strong></th>
                        <th scope="col"><strong>Password</strong></th>
                        <th scope="col"><strong>History Time</strong></th>
                        <th scope="col"><strong>Edit & Delete</strong></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($students as $student)
                      <tr>
                        <th scope="row">{{ $student->id }}</th>
                        <th scope="row">{{ $student->name }}</th>
                        <th scope="row">{{ $student->email }}</th>
                        <th scope="row">{{ $student->password }}</th>
                        <th scope="row">{{ $student->created_at }}</th>
                        <th scope="row">
                          <a class="btn btn-success" href="{{ route('student.edit', ['id'=>$student->id]) }}">Edit</a>
                          <a class="btn btn-danger" href="{{ route('student.delete', ['id' => $student->id]) }}" onclick="return confirm('Are you sure to delete this Data ?')">Delete</a>
                           
                        </th>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $students->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
