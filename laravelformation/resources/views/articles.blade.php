@extends('layouts.app')

@section('titleContent')
    <title>accueil</title>
@endsection

@section('content')
    <h1>Listes des articles</h1>

    @if($posts->count() > 0)
        @foreach($posts as $post)
        <h3><a href="{{ route('posts.show',['id' => $post->id]) }}"> {{ $post->title }} </a></h3>
        @endforeach
    @else
        <span>aucun poste en base de donnees</span>
    @endif

    <h1>Listes des videos</h1>
    @forelse($video->comments as $comment)
       <div>{{ $comment->content }} | cree le {{ $comment->created_at->format('d/m/Y') }}</div>
    @empty
       <span>aucun commentaire pour ce poste</span>
    @endforelse

@endsection

