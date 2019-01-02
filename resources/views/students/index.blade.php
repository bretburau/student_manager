@extends('layout')

@section('content')
    <h1>Students</h1>
    <ul>
    @foreach ($students as $student)
        <li>{{$student->name }}</li>
    @endforeach
    </ul>
@endsection