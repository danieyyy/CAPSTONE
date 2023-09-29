@extends('layouts.app')
<style>
    h2.alert.alert-success{
        color: #274472
    }
    a.btn.btn-primary{
        background-color: #41729f;
        border-color: #41729f;
        color: c3e0e5;
    }
</style>
@section('content')
<div class="container">
    <h2 class="alert alert-success" >Thank you for your feedback!</h2>
    <a href="{{ route('home') }}" class="btn btn-primary">Return to Home</a>
</div>
@endsection
