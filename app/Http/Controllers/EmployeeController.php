<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->fk_user_type_id == 1){
            $employees = Employee::all();
            return view('admin.employees.index', compact('employees'));
            // return view('admin.employees.index');

        } else if(Auth::user()->fk_user_type_id == 2){
            return view('home');

        } else {
            return view('home');
        }
    }

    public function create()
    {
        return view('admin.employees.create');
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
        return redirect()->route('admin.employees.index')->with('success', 'Employee created successfully.');
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('admin.employees.show', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id); // Load the employee record by its ID
        return view('admin.employees.edit', compact('employee'));
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
        return redirect()->route('admin.employees.show', ['employee' => $employee->employeeNumber])->with('success', 'Employee updated successfully');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id); // Find the employee record by its ID

        $employee->delete(); // Delete the employee record

        return redirect()->route('admin.employees.index')->with('success', 'Employee deleted successfully');
    }
}
