
@extends('layout.app')

@section('title', 'Stylist page')

@section('content')


    <div class="info w-full">


        <div class="flex justify-end m-10 mr-14">
            <a href="{{route('posts.create')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                Додати post
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class=" ml-2 mt-0.5 bi bi-plus" viewBox="0 0 16 16">
                    <path d="M7 0h2v16H7V0zM0 7v2h16V7H0z"/>
                </svg>

            </a>
        </div>
        <br>
        <hr>

        <br>

         <div class="flex flex-col m-auto mt-3 mb-3 w-3/4">
             @foreach($posts as $post)
                 <div class=" w-full service-item min-h-full h-full flex " >
                     <div class="m-auto flex flex-col justify-between">

                         <div class="bg-white border border-gray-200 rounded-lg shadow ">

                             <div class="p-5 flex-grow">

                                 <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{$post->title}}</h5>
                                 <p class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{$post->text}}</p>
                                 <div class="flex justify-between m-auto w-5/6">
                                     <a href="{{route('posts.show',['post'=>$post->id])}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                         Редагувати

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
