@extends('layouts.admin_page')
<style>
        main.py-4{
            display: flex;
            justify-content: center;
        }
    </style>
@section('content')
<div class="container">
    <h1>ABC Tech Inc. Employee List</h1>

    <!-- Add Employee Button -->
    <a href="{{ route('employees.create') }}" class="btn btn-success mb-3">Add Employee</a>

    <!-- Employee Table -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Employee Number</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Date Hired</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->employeeNumber }}</td>
                <td>{{ $employee->fullName }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phoneNumber }}</td>
                <td>{{ $employee->dateHired }}</td>
                <td>
                    <a href="{{ route('employees.show', ['employee' => $employee->employeeNumber]) }}" class="btn btn-primary btn-sm">View</a>
                    <a href="{{ route('employees.edit', ['employee' => $employee->employeeNumber]) }}" class="btn btn-secondary btn-sm">Edit</a>
                    <form action="{{ route('employees.destroy', ['employee' => $employee->employeeNumber]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
