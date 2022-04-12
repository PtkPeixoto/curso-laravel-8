<h1>Posts</h1>
<a href="{{ route('posts.create') }}">Criar novo Post</a>
<hr/>

@foreach ($posts as $post)
    <p>{{ $post->title }}</p>
@endforeach