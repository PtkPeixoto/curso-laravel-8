@extends('admin.layouts.app')

@section('title','Listagem dos Posts')


@section('content')

@if (session('message'))
<div>{{ session('message') }}</div>
@endif

<form action="{{ route('posts.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Filtrar:">
    <button type="submit">Filtrar</button>
</form>

<h1>Posts</h1>
<a href="{{ route('posts.create') }}">Criar novo Post</a>
<hr />

@foreach ($posts as $post)
<p>
    {{ $post->title }} -
    [
    <a href="{{ route('posts.show',['id' => $post->id]) }}">Ver</a> |
    <a href="{{ route('posts.edit',['id' => $post->id]) }}">Editar</a>
    ]
</p>
@endforeach

<hr>

@if (isset($filters))
{{ $posts->appends($filters)->links() }}
@else
{{ $posts->links() }}
@endif

@endsection