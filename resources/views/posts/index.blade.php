@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <form class="bg-white col-md-5 p-4 mb-4" action="{{route('posts')}}" method="POST">
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

<div class="row justify-content-center">
        <div class="col-md-5 bg-white p-4">
        @if($posts->count())
        <div>
            @foreach($posts as $post)

            <div class="m-2 p-3 bg-light">
                <div class="d-flex justify-content-between"><a href="#">{{$post->user->name}}</a><span>{{$post->created_at->diffForHumans()}}</span></div>
                <div>{{$post->body}}</div>
            </div>

            @endforeach
        </div>
        {{ $posts->links() }}
        @else
        <div class="alert alert-warning" role="alert">
            There is no post.
        </div>
        @endif
        </div>
    </div>

@endsection