@extends('layouts.app')
@section('content')




<div class="row justify-content-center">
    <form class="bg-white col-md-5 p-4" action="{{route('login')}}" method="POST">
        @csrf
        @if(session('status'))
        <div class="alert alert-danger" role="alert">
            {{session('status')}}
        </div>
        @endif
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

        <div class="mt-2">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>




@endsection