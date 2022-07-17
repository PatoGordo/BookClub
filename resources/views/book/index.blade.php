@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto flex flex-col items-start py-20">
    <h2 class="text-4xl font-extrabold text-gray-800">Lastest Books</h2>

    <div class="grid sm:grid-cols-3 w-full m-auto mt-8 gap-4">
        @foreach ($books as $book)
        <div class="flex flex-col w-full p-8 bg-gray-300 rounded">
            <h3 class="text-3xl font-bold text-gray-700">{{ $book->title }}</h3>
            <span class="text-xl pt-2 font-bold text-gray-600">{{ $book->author }}, <span class="text-base pt-2 font-medium text-gray-500">{{ date('jS M Y', strtotime($book->publish_date)) }}</span></span>
            <img class="mt-4 rounded-md rounded-t-lg" src="images/covers/{{ $book->image_path }}" alt="{{ $book->title }} Cover Image" />
            <a href="/book/{{ $book->id }}" class="text-left mt-5 underline text-blue-700">Read more...</a>
        </div>
        @endforeach
    </div>
</div>
<span></span>
@endsection