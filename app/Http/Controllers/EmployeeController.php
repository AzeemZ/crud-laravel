<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $employees = Employee::paginate(5);

        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        Employee::create($this->validateEmployee($request));

        return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param Employee $employee
     * @return Response
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Employee $employee
     * @return Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Employee $employee
     * @return Response
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->update($this->validateEmployee($request));

        return redirect('/employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Employee $employee
     * @return Response
     * @throws \Exception
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect('/employees');
    }

    public function validateEmployee($request)
    {
        return $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'min:13', 'unique:employees'],
            'designation' => ['required', 'min:4'],
            'phone' => ['required', 'min:11'],
            'salary' => ['required', 'min:5']
        ]);
    }
}
