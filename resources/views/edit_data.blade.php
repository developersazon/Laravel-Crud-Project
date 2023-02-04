@extends('layouts.main');
@section('Content');
<div class="container">
    <div class="row">
        <div class="card p-4">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-success" href="{{ url('/') }}">Back</a>
                    </div>
                    <div class="col">
                        <h2>Update Student Data</h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('msg'))
                    <p class="alert alert-success">
                        {{ Session::get('msg') }}
                    </p>
                @endif
                <form action="{{ url('/update-data/'.$update->id) }}" method="post">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    @csrf
                    <div class="row mb-4">
                      <div class="col">
                        <div class="form-outline">
                          <input type="text" name="name" value="{{ $update->name }}" id="form3Example1" class="form-control" />
                          <label class="form-label" for="form3Example1">Full name</label>
                        </div>
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                      </div>
                      <div class="col">
                        <div class="form-outline">
                          <input type="text" name="email" value="{{ $update->email }}" id="form3Example2" class="form-control" />
                          <label class="form-label" for="form3Example2">Email</label>
                        </div>
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                      </div>
                    </div>
                  
                    {{-- <!-- Phone and Website input -->
                    <div class="row mb-4">
                        <div class="col">
                          <div class="form-outline">
                            <input type="text" name="phone" id="form3Example1" class="form-control" />
                            <label class="form-label" for="form3Example1">Phone Number</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-outline">
                            <input type="text" name="website" id="form3Example2" class="form-control" />
                            <label class="form-label" for="form3Example2">Website</label>
                          </div>
                        </div>
                      </div>
                  
                    <!-- Password input -->
                    <div class="row mb-4">
                        <div class="col">
                          <div class="form-outline">
                            <input type="text" name="password" id="form3Example1" class="form-control" />
                            <label class="form-label" for="form3Example1">Password</label>
                          </div>
                        </div> --}}
                        <div class="col">
                          <div class="form-outline">
                            <input type="text" name="password" value="{{ $update->password }}" id="form3Example2" class="form-control" />
                            <label class="form-label" for="form3Example2">Password</label>
                          </div>
                          <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                        </div>
                      </div>
                    <!-- Submit button -->
                    <div class="row px-4">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block">Update Now</button>
                        </div>
                        <div class="col">
                            <a class="btn btn-danger btn-block" href="{{ url('/') }}">Cancel Now</a>
                        </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
