
@extends('layout.app')

@section('title', 'Stylist page')

@section('content')

    <div class="m-10">
        <form action="{{route('posts.update',['post'=>$post->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-6 m-auto ">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
                <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/6 p-2.5 " required>
            </div>
            <div class="mb-6">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Text</label>
                <input type="text" name="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/6 p-2.5 " required>
            </div>


            <button type="submit" class="mt-10 mb-6 text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Confirm | Add</button>

        </form>
    </div>
    <br>

@endsection
