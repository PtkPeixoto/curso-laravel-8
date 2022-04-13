@if (session('message'))
    <div>{{ session('message') }}</div>
@endif

<h1>Posts</h1>
<a href="{{ route('posts.create') }}">Criar novo Post</a>
<hr/>

@foreach ($posts as $post)
    <p>
        {{ $post->title }} - 
        [ <a href="{{ route('posts.show',['id' => $post->id]) }}">Ver</a> ]
    </p>
@endforeach