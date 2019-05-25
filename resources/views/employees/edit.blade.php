@extends('employees.layouts')

@section('title', 'Update Employee')

@section('content')
    <h1 class="text-center my-5">Update Employee</h1>

    <form method="post" class="w-75 mx-auto" action="/employees/{{ $employee->id }}">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                   id="name" name="name" value="{{ $employee->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                   id="email" name="email" value="{{ $employee->email }}">
        </div>
        <div class="form-group">
            <label for="designation">Designation:</label>
            <input type="text" class="form-control {{ $errors->has('designation') ? 'is-invalid' : '' }}"
                   id="designation" name="designation" value="{{ $employee->designation }}">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                   id="phone" name="phone" value="{{ $employee->phone }}">
        </div>
        <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="text" class="form-control {{ $errors->has('salary') ? 'is-invalid' : '' }}"
                   id="salary" name="salary" value="{{ $employee->salary }}">
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <input type="submit" class="btn btn-success mx-2 px-5" value="Update">
                <a class="btn btn-secondary mx-2 px-5" href="/employees">Back</a>
            </div>
        </div>
    </form>

    @include('partials.errors')
@endsection
