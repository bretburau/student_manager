@extends('layout')

@section('content')
<h2>Student: {{$student->name}}</h2>
<div class="container">
    <ul>
        <li>Teacher: {{$teacher->name}}</li>
        <li>Grade: {{$student->grade}}</li>
        @if (!!$student->riding_bus)
            <li>Bus number: {{$student->bus_number}}</li>
        @else
            <li>Parent pickup</li>
        @endif
    </ul>
</div>

@endsection