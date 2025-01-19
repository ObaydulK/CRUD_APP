@extends('layout')

@section('content')
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $student->name }}" required>
        <input type="email" name="email" value="{{ $student->email }}" required>
        <input type="text" name="phone" value="{{ $student->phone }}" required>
        <input type="text" name="position" value="{{ $student->position }}">
        <select name="gender">
            <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
            <option value="Other" {{ $student->gender == 'Other' ? 'selected' : '' }}>Other</option>
        </select>
        <textarea name="bio">{{ $student->bio }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection
