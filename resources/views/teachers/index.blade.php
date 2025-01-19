@extends('welcome')
<!-- Styles / Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('content')

<h1>hellow</h1>
<div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:gap-8">
    @foreach ($teachers as $teacher)
    <div class="  rounded-lg bg-gray-200">
        <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
            <img alt=""
            src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
            class="h-56 w-full object-cover" />

            <div class="bg-white p-4 sm:p-6">
                    <time datetime="2022-10-10" class="block text-xs text-gray-500"> {{$teacher->name}} </time>
                    
                    <a href="#">
                        <h3 class="mt-0.5 text-lg text-gray-900">{{$teacher->email}}</h3>
                    </a>
                    <div>{{$teacher->phone }}</div>
                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                        pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                        mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                        dignissimos. Molestias explicabo corporis voluptatem?
                    </p>
                </div>
                <div class="flex  justify-between px-5 my-5 " >
                    <a href=" " class="btn shadow-lg px-4 py-2 rounded-lg border-2-black ">view</a>
                    <a href="{{route('teacher.edit', $teacher)}}" class="btn shadow-lg px-4 py-2 rounded-lg border-2-black ">edit</a> 
                    <form class=" " action="{{route('teacher.destroy', $teacher)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn shadow-lg px-4 py-2 rounded-lg border-2-black ">Delete</button>
                    
                </form>
                </div>
            </article>
        </div>
        @endforeach
    </div>
    
    <button class="my-10" ><a href="{{route('teacher.create')}}" class="border-4  items-center ">Add a teacher</a></button>


@endsection