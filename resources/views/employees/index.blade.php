@extends('employees.layouts')

@section('title', 'All Employees')

@section('content')
    <h1 class="text-center mt-5 mb-3">Employees</h1>

    <a class="btn btn-primary mb-3" href="/employees/create"> Add New Employee </a>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Designation</th>
                <th>Phone</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($employees as $employee=>$e)
                <tr>
                    <td class="align-middle"> {{ $e->id }} </td>
                    <td class="align-middle"> {{ $e->name }} </td>
                    <td class="align-middle"> {{ $e->email }} </td>
                    <td class="align-middle"> {{ $e->designation }} </td>
                    <td class="align-middle"> {{ $e->phone }} </td>
                    <td class="align-middle"> {{ $e->salary }} </td>

                    <td class="align-middle">
                        <a class="btn btn-info" href="/employees/{{ $e->id }}"> Show </a>
                        <a class="btn btn-success" href="/employees/{{ $e->id }}/edit"> Update </a>

                        <form style="display: inline" method="post" action="/employees/{{ $e->id }}">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="float-right mt-3"> {{ $employees->links() }} </div>
@endsection
