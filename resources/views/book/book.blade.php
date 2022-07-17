@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto flex flex-col items-start pt-28 pb-20">
    <h2 class="text-4xl font-extrabold text-gray-800">{{ $book->title }}</h2>
    <h3 class="text-2xl font-bold text-gray-600 mt-5">{{ $book->author }},
        <span class="text-xl font-medium text-gray-500">{{ date('jS M Y', strtotime($book->publish_date)) }}</span>
    </h3>

    <div class="flex flex-row items-start mt-8 gap-4">
        <div class="w-full">
            <img class="w-full rounded-md rounded-t-lg" src="../images/covers/{{ $book->image_path }}" alt="{{ $book->title }} Cover Image" />
        </div>
        <div class="flex flex-col justify-between">
            <p class="indent-8 text-lg text-gray-600">
                {{ $book->synopsis }}
            </p>
            <a class="self-end mt-8 underline text-blue-500 text-lg" href="{{ $book->amazon_link }}" target="_blank">Buy book in amazon</a>
        </div>
    </div>
</div>
@endsection

<style>
.indent-8 {
    text-indent: 2rem;
}
</style>