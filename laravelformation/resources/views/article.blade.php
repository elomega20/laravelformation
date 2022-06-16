@extends('layouts.app')

@section('titleContent')
    <title>posts</title>
@endsection

@section('content')

   <h1>{{ $post->content }}</h1>
   <span>{{ $post->image ? $post->image->path : 'pas d\'image' }}</span>
    <hr>

   @forelse($post->comments as $comment)
      <div>{{ $comment->content }} | cree le {{ $comment->created_at->format('d/m/Y') }}</div>
   @empty
      <span>aucun commentaire pour ce poste</span>
   @endforelse
   <hr>

   @forelse($post->tags as $tag)
       <div>{{ $tag->name }} | cree le {{ $tag->created_at->format('d/m/Y') }}</div>
   @empty
       <span>aucun tag pour ce poste</span>
   @endforelse

@endsection

