
@extends('layout.app   ')

@section('title', 'Stylist page show')

@section('content')
    <div class="flex m-auto mt-10 bg-white border border-gray-200 rounded-lg shadow w-5/6">
        <div class="p-5 flex-grow">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{$post->title}}</h5>
            <p class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{$post->text}}</p>

        </div>
    </div>

    <br>

    <div class=" w-1/6 h-16 m-auto bg-white border border-gray-200 rounded-full bottom-4  flex flex-row justify-center items-center">

        <a class="pb-0 ml-3 mr-3 hover:underline" href="{{route('posts.edit',['post'=>$post->id])}}">Edit</a>

@endsection
