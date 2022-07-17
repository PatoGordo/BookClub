@extends('layouts.app')

@section('content')
<div class="m-auto py-8 text-center item-center justify-center gap-8 background-image">
    <h2 class="pt-24  m-auto text-4xl font-extrabold text-white text-center">
        Welcome to the Book Club
    </h2>
</div>
<div class="w-4/5 m-auto flex flex-col items-center pt-20 pb-32 gap-16">
    <h2 class="text-5xl font-extrabold text-gray-400 text-center">Know waht other readers thinks about books</h2>

    <a href="/book" class="sm:w-2/3 w-11/12 text-center border-4 border-blue-600 text-blue-600 font-bold text-2xl rounded-full px-8 py-6">See some Books</a>

</div>
@endsection

<style>
.background-image {
  background-image: url("https://cdn.pixabay.com/photo/2014/09/05/18/32/old-books-436498_960_720.jpg");
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  height: 600px;
}

</style>