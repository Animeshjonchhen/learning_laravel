@props(['post' => $post])

<div class="m-1">
  <a href=" {{ route('user.posts',$post->user) }} " class="fw-bold">{{ $post->user->name }}</a> 
  <span class="fs-6"> {{ $post->created_at->diffForHumans() }} </span>
  <p class=""> {{ $post->body }}</p>
  
  
  <div class="d-flex align-items-center">
    @if (auth()->user())
      <form action="{{ route('posts.like',$post) }}" method='POST'>
        @csrf
        <button class="btn text-primary" type="submit">Like</button>
      </form>

      <form action="{{ route('posts.like',$post) }}" method='POST'>
        @csrf
        @method('DELETE')
        <button class="btn text-primary" type="submit">Unlike</button>
      </form>

      @can('delete', $post)
      
        <form action="{{ route('posts.destroy',$post) }}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn text-danger" type="submit">Delete</button>
        </form>
          
      @endcan

    @endif
  
    <span> {{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }} </span>
  
  </div>

</div>