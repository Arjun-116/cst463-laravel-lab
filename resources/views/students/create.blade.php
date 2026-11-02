@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <h1>Add New Student</h1>

        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="roll_no" class="form-label">Roll Number</label>
                <input type="text" class="form-control" id="roll_no" name="roll_no" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="cgpa" class="form-label">CGPA</label>
                <input type="number" step="0.01" class="form-control" id="cgpa" name="cgpa" required>
            </div>

            <button type="submit" class="btn btn-primary">Save Student</button>
        </form>
    </div>
</div>
@endsection