@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <form class="bg-white col-md-5 p-4" action="{{route('posts')}}" method="POST">
        @csrf
        <div>
            <label for="body" class="form-label">What's on Your Mind</label>
            <textarea type="body" id="body" name="body" class="form-control bg-white @error('body') border border-danger @enderror" value="{{old('body')}}"></textarea>
            
        </div>


        <div class="mt-2">
            <button type="submit" class="btn btn-primary">Post</button>
        </div>
    </form>
</div>
@endsection