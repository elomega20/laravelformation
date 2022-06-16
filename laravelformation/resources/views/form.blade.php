@extends('layouts.app')

@section('content')
   <h1>Cree un nouveau poste</h1>

   <form method="POST" action="{{ route('posts.store') }}">
       @csrf
       <input type="text" name="title" class="border-gray-600 border-4">
       <textarea name="content" cols="30" rows="10" class="border-gray-600 border-4"></textarea>
       <button type="submit" class="bg-green-600">Creer</button>
    </form>
@endsection

