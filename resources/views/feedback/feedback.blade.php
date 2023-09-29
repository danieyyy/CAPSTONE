@extends('layouts.app_page')
<style>
    div.card.text-left.m-5.p-2{
        background-color: #41729f;
    }
    div.card-header{
        color: c3e0e5;
        font-weight: bold;
    }
    div.card-body{
        color: c3e0e5;
        font-weight: bold;
    }
    button.btn.btn-primary.mt-3{
        background-color: #c3e0e5 !important;
        border-color: #c3e0e5 !important;
        color: #41729f !important;
    }
</style>
@section('content')
<div class="container">
    <div class="card text-left m-5 p-2">
        <div class="card-header">
            <h2>Feedback Form</h2>
        </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        <div class="card-body mb-3">
            <form action="{{ route('feedback.submit') }}" method="POST">
                @csrf
                <div class="form-group mt-3 mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="message">Feedback</label>
                    <textarea class="form-control" id="message" name="message">{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>    
    </div>
</div>
@endsection
