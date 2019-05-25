@extends('employees.layouts')

@section('title', 'Show Employee')

@section('content')
    <h1 class="text-center my-5">Show Employee</h1>

    <table class="table table-striped table-bordered w-75 mx-auto">
        <tr>
            <th>Name of the Employee</th>
            <td>{{ $employee->name }}</td>
        </tr>
        <tr>
            <th>Email of the Employee</th>
            <td>{{ $employee->email }}</td>
        </tr>
        <tr>
            <th>Designation of the Employee</th>
            <td>{{ $employee->designation }}</td>
        </tr>
        <tr>
            <th>Phone no. of the Employee</th>
            <td>{{ $employee->phone }}</td>
        </tr>
        <tr>
            <th>Salary of the Employee</th>
            <td>{{ $employee->salary }}</td>
        </tr>
    </table>

    <div class="row mt-4">
        <div class="col text-center">
            <a class="btn btn-secondary mx-2 px-5" href="/employees">Back</a>
        </div>
    </div>
@endsection
