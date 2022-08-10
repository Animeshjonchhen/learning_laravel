@extends('layouts.app')

@section('content')
    <div class="container bg-light m-5 p-5">
        @auth
            <div class="d-flex justify-content-center">
                <form action="{{ route('posts') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <textarea name="body" id="body" cols="40" rows="5" placeholder="Post something!" class="bg-light @error('body') @enderror"></textarea>
                    </div>

                    @error('body')

                    <div class="text-danger">
                        {{ $message }}
                    </div>
                        
                    @enderror

                    <button type="submit" class="btn btn-primary">Post</button>
                </form>
            </div>
        @endauth

        @if($posts->count())
            
            @foreach ($posts as $post)
                <x-post :post="$post" />
            @endforeach

                <div style="height: 10px;">{{ $posts->links() }}</div>
        @else
            <p> There are no posts.</p>
        
        @endif
    </div>
@endsection