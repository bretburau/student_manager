@extends('layout')

@section('content')
    <h1>Students</h1>
    <ul class="list-group">
    @foreach ($students as $student)
        <a href="/students/{{$student->id}}"><li class="list-group-item">{{$student->name }}</li></a>
    @endforeach
    </ul>
@endsection