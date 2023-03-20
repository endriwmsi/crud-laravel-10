@extends('layouts.master')
@section('content')
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full md:w-1/2 mx-auto">
    <form action="{{ route('articles.update', $articles->id) }}" method="POST" class="mb-4">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="mb-4">
                Título<
            </label>
            <input type="text" name="title" id="title" value="{{ $articles->title }}" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="text">
                Texto
            </label>
            <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" name="text" id="text">{{ $articles->text }}</textarea>
        </div>
        <div class="flex items-center justify-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Salvar</button>
        </div>
    </form>
</div>
@endsection