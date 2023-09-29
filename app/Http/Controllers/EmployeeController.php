<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'employeeNumber' => 'required',
            'fullName' => 'required',
            'email' => 'required|email',
            'phoneNumber' => 'required',
            'dateHired' => 'required|date',
        ]);

        Employee::create($validatedData);
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id); // Load the employee record by its ID
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id); // Load the employee record by its ID

        // Validate the request data
        $validatedData = $request->validate([
            'employeeNumber' => 'required',
            'fullName' => 'required',
            'email' => 'required|email',
            'phoneNumber' => 'required',
            'dateHired' => 'required|date',
        ]);

        // Update the employee record with the validated data
        $employee->update($validatedData);

        // Redirect to the employee details page or the employee list
        return redirect()->route('employees.show', ['employee' => $employee->employeeNumber])->with('success', 'Employee updated successfully');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id); // Find the employee record by its ID

        $employee->delete(); // Delete the employee record

        // Redirect to the employees list with a success message
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully');
    }
}
