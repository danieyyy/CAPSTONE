@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Employee Details</h1>

<table>
    <tr>
        <th>Employee Number:</th>
        <td>{{ $employee->employeeNumber }}</td>
    </tr>
    <tr>
        <th>Full Name:</th>
        <td>{{ $employee->fullName }}</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>{{ $employee->email }}</td>
    </tr>
    <tr>
        <th>Phone Number:</th>
        <td>{{ $employee->phoneNumber }}</td>
    </tr>
    <tr>
        <th>Date Hired:</th>
        <td>{{ $employee->dateHired }}</td>
    </tr>
</table>

<a href="{{ route('employees.index') }}">Back to Employee List</a>
</div>
@endsection