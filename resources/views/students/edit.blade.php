@extends('layout')

@section('content')
    <h1>Edit Student</h2>
    <br />
    <form method="POST" action="/students/{{ $student->id }}">
        @method('PATCH')
        @csrf
        <div class='form-group'>
                <input required class='form-control' type='text' name='name' placeholder="Student's Name" value={{ $student->name }}>
            </div>

            <div class='form-group'>
                    <input required class='form-control' type='number' name='grade' placeholder="Grade" value={{ $student->grade }}>
            </div>

            <div class='form-group'>
                    <input required class='form-control' type='text' name='parent_email' placeholder="Parent's Email" value={{ $student->parent_email }}>
            </div>

            <hr />
            <h2>Bus number</h2>
            <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bus_number" id="inlineRadio1" value="35" 
                    {{$student->bus_number == 35 ? "checked" : "" }}
                    >
                    <label class="form-check-label" for="inlineRadio1">35</label>
            </div>

            <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bus_number" id="inlineRadio1" value="36"
                    {{$student->bus_number == 36 ? "checked" : "" }}
                    >
                    <label class="form-check-label" for="inlineRadio1">36</label>
            </div>

            <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bus_number" id="inlineRadio1" value="37"
                    {{$student->bus_number == 37 ? "checked" : "" }}
                    >
                    <label class="form-check-label" for="inlineRadio1">37</label>
            </div>
            
            <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bus_number" id="inlineRadio1" value="0"
                    {{$student->bus_number == 0 ? "checked" : "" }}
                    >
                    <label class="form-check-label" for="inlineRadio1">Parent Pickup</label>
            </div>
            <br />
            <br />
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </form>
@endsection