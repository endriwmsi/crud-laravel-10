@extends('layouts.master')
@section('content')
<div class="">
  <div class="flex flex-wrap">
    @foreach ($articles as $article)
    <div class="w-full sm:w-1/3 m-6 max-w-sm rounded overflow-hidden shadow-lg">
      <div class="px-6 py-4">
        <a href="#" class="">
          <h5 class="text-lg font-bold mb-2">{{ $article->title }}</h5>
          <p class="text-gray-700">{{ $article->text }}</p>
        </a>
        @if (Auth::check())
        <div class="mt-2 flex justify-end">
          <a href="{{ route('articles.edit', $article->id) }}" class="text-blue-500 mr-4">Editar</a>
          <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500">Deletar</button>
          </form>
        </div>
        @endif
      </div>
    </div>
    @endforeach
  </div>
  
  <div class="mt-6">
    <a href="{{ route('articles.create') }}" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
      Novo Artigo
    </a>
  </div>
</div>
@endsection