@section('content')
<article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
    <img alt=""
        src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
        class="h-56 w-full object-cover" />

    <div class="bg-white p-4 sm:p-6">
        <time datetime="2022-10-10" class="block text-xs text-gray-500">Name: {{$teacher->name}} </time>

        <a href="#">
            <h3 class="mt-0.5 text-lg text-gray-900">Email: {{$teacher->email}}</h3>
        </a>
        <div>Phone: {{$teacher->phone }}</div>
        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
           Description  {{$teacher->bio}}
        </p>
    </div>
    <a href="{{route('teacher.index')}}">back</a>
</article>
@endsection