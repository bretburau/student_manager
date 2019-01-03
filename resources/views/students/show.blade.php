@extends('layout')

@section('content')
<h2>Student: {{$student->name}}</h2>
<div class="container">
    <ul>
    <li>Teacher: {{$teacher->name}}</li>
    </ul>
</div>

@endsection