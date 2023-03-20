@extends('layouts.master')
@section('content')
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full md:w-1/2 mx-auto">
  <form class="mb-4" method="POST" action="{{ route('articles.store') }}">
    @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
        Título
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" name="title" placeholder="Digite o título aqui">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="text">
        Texto
      </label>
      <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="text" name="text" rows="8" placeholder="Digite o texto aqui"></textarea>
    </div>
    <div class="flex items-center justify-center">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Enviar
      </button>
    </div>
  </form>
</div>
@endsection