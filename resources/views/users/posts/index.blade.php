@extends('layouts.app')

@section('content')
    
    <div class="">
        <div class="mt-5">
            <h1 class="d-flex justify-content-center"> {{ $user->name }} </h1>

            <p class="d-flex justify-content-center">Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} and
            has recieved {{ $user->recivedLikes->count() }} {{ Str::plural('like', $user->recivedLikes->count()) }}</p>
        </div>

        <div class="bg-light mt-5 ms-5">
            @if($posts->count())
                
                @foreach ($posts as $post)
                    <x-post :post="$post" />
                @endforeach

                    <div style="height: 10px;">{{ $posts->links() }}</div>
            @else
                <p> {{ $user->name }} does not have any posts!!</p>
            @endif
        </div>

    </div>
@endsection