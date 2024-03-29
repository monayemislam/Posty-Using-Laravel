@extends('layouts.app')
@section('content')






<div class="row justify-content-center">
    <form class="bg-white col-md-5 p-4" action="{{route('register')}}" method="POST">
        @csrf
        <div>
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control bg-white" value="{{old('name')}}">
            @error('name')
            <div class="form-text text-danger">
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <label for="username" class="form-label">Username</label>
            <input type="text" id="name" name="username" class="form-control bg-white" value="{{old('username')}}">
            @error('username')
            <div class="form-text text-danger">
               {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control bg-white" value="{{old('email')}}">
            @error('email')
            <div class="form-text text-danger">
               {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control bg-white">
            @error('password')
            <div class="form-text text-danger">
               {{$message}}
            </div>
            @enderror
        </div>
        <div>
            <label for="password_confirmation" class="form-label">Re-type Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control bg-white">
        </div>
        <div class="mt-2">
        <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>




@endsection