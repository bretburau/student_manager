@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <h1>Students</h1>
        <a href="/students/create" class="btn btn-primary">Add Student</a>
        <br /><br />
        <ul class="list-group">
        @foreach ($students as $student)
            <a href="/students/{{$student->id}}"><li class="list-group-item">{{$student->name }}</li></a>
        @endforeach
        </ul>
    </div> --}}
    <example-component></example-component>
    
@endsection