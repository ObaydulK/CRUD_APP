@extends('welcome')
@section('content')
<!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->
<form action="{{ route('teacher.update', $teacher )}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{$teacher->name}}" required>
    <input type="email" name="email" value="{{$teacher->email}}" required>
    <input type="text" name="phone" value="{{$teacher->phone}}" required>
    
    <textarea name="bio"  >{{$teacher->bio}}</textarea>
    <button type="submit">Update Teacher</button>
</form>


@endsection