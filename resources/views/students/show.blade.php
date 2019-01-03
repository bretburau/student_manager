@extends('layout')

@section('content')
<h2>Student: {{$student->name}}</h2>
<div class="container">
    <ul class="list-group">
        <li class="list-group-item">Teacher: {{$teacher->name}}</li>
        <li class="list-group-item">Grade: {{$student->grade}}</li>
        @if (!!$student->riding_bus)
            <li class="list-group-item">Bus number: {{$student->bus_number}}</li>
        @else
            <li class="list-group-item">Parent pickup</li>
        @endif
        <li class="list-group-item">Parent contact: {{$student->parent_email}}</li>
    </ul>
    <a class="btn btn-primary" href="/students/{{$student->id}}/edit">Edit</a>
</div>

@endsection