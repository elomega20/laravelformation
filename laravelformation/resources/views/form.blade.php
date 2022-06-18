@extends('layouts.app')

@section('content')
   <h1>Cree un nouveau poste</h1>

   <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
       @csrf
       <input type="text" name="title" class="border-gray-600 border-4">
       @if($errors->has('title'))
          <div class="text-red-500">{{ $errors->first('title') }}</div>
       @endif

       <textarea name="content" cols="30" rows="10" class="border-gray-600 border-4"></textarea>
       @if($errors->has('content'))
          <div class="text-red-500">{{ $errors->first('content') }}</div>
       @endif


       <button type="submit" class="bg-green-600">Creer</button>
    </form>
@endsection

