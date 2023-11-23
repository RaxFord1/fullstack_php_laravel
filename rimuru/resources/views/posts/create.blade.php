
@extends('layout.app')

@section('title', 'Stylist page')

@section('content')


    <div class="info w-full">
        <br>
        <br>


        <div class="justify-center flex ">
            <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title</label>
                    <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/6 p-2.5 " placeholder="Title" required>
                </div>
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">text</label>
                    <input type="text" name="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-4/6 p-2.5 " placeholder="Text" required>
                </div>

                <button type="submit" class="mt-10 mb-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Confirm | Add</button>

            </form>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach($posts as $post)
                <div class="m-auto w-5/6 service-item min-h-full h-full flex items-stretch" >
                    <div class="m-auto flex flex-col justify-between">

                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">

                            <div class="p-5 flex-grow">

                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{$post->title}}</h5>
                                <p class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{$post->text}}</p>
                                <div class="flex justify-between m-auto w-5/6">
                                    <a href="{{route('posts.show',['post'=>$post->id])}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                        Редагувати
                                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </a>
                                    <form action="{{route('posts.destroy',['post'=>$post->id])}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 ">
                                            Выдалити
                                        </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
