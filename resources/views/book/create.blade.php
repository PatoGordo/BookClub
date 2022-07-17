@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto flex flex-col items-start pt-28">
    <h2 class="text-4xl font-extrabold text-gray-800">Create Book</h2>

    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4 px-5">
                {{ $error }}
                </li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="/book" method="POST" enctype="multipart/form-data" class="grid w-full m-auto mt-8 gap-4">
        @csrf
        
        <input class="border bg-transparent placeholder:text-gray-400 border-gray-500 px-6 py-4 rounded w-full" type="text" name="title" placeholder="Book title" />
        <input class="border bg-transparent placeholder:text-gray-400 border-gray-500 px-6 py-4 rounded w-full" type="text" name="author" placeholder="Book author" />
        <input class="border bg-transparent placeholder:text-gray-400 border-gray-500 px-6 py-4 rounded w-full" type="date" name="publish_date" placeholder="Book public date" />
        <input class="border bg-transparent placeholder:text-gray-400 border-gray-500 px-6 py-4 rounded w-full" type="text" name="amazon_link" placeholder="Book amazon link" />
        <input class="border bg-transparent placeholder:text-gray-400 border-gray-500 px-6 py-4 rounded w-full" type="file" name="image" placeholder="Book cover image" />

        <textarea class="border bg-transparent placeholder:text-gray-400 border-gray-500 px-6 py-4 rounded w-full h-32 resize-y" name="synopsis" placeholder="Book synopsis"></textarea>

        <button class="bg-blue-500 text-white text-xl px-6 py-4 rounded sm:w-1/4 w-1/2 mb-20" type="submit">Create Book</button>
        <span></span>
    </from>
</div>
@endsection