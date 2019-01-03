@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Student: {{$student->name}}</h3>
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
    <br />
    <a class="btn btn-primary" href="/students/{{$student->id}}/edit">Edit</a>
</div>

@endsection