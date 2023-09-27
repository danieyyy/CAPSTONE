@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Employee</h1>

    <!-- Employee Form -->
    <form action="{{ route('employees.update', ['employee' => $employee->employeeNumber]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="employeeNumber">Employee Number</label>
            <input type="text" class="form-control" id="employeeNumber" name="employeeNumber" value="{{ $employee->employeeNumber }}" required>
        </div>
        <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" value="{{ $employee->fullName }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" required>
        </div>
        <div class="form-group">
            <label for="phoneNumber">Phone Number</label>
            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" value="{{ $employee->phoneNumber }}" required>
        </div>
        <div class="form-group">
            <label for="dateHired">Date Hired</label>
            <input type="date" class="form-control" id="dateHired" name="dateHired" value="{{ $employee->dateHired }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
