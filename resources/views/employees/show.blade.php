@extends('layouts.admin')

<style>
    th, td {
        color : #c3e0e5 !important;
    }
    .list-header{
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin: 2% 10% 2% 10%;
        color: #c3e0e5;
    }

    .list{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        flex: 1;
        background-color: #41729f;
        border-radius: 10px;
        padding: 10px;
}

</style>



@section('content')
<div class="container">

    <div class="list">
    <div class="list-header">
        <h1>Employee Details</h1>
    </div>
    <div class="list-body">
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
        <a href="{{ route('employees.index') }}" class="btn btn-primary p-2 mt-2">Back to Employee List</a>
    </div>
    </div>
</div>

@endsection