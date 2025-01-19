@extends('welcome')
@section('content')
<!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->
<form action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Phone" required>
    
    <textarea name="bio" placeholder="Bio"></textarea>
    <button type="submit">Create Student</button>
</form>


@endsection