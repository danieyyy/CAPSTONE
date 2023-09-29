@extends('layouts.app_page')

@section('content')
<div class="container">
        <h1 class="titleHead">ABC Tech Inc. Task Tracking</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="card mt-3 mb-3" style="width: 70%;">
                    <img src="{{ asset('images/task1.png') }}" alt="task1" class="card-img-top">
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Claim</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mt-3 mb-3" style="width: 70%;">
                    <img src="{{ asset('images/task2.png') }}" alt="task2" class="card-img-top">
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Claim</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mt-3 mb-3" style="width: 70%;">
                    <img src="{{ asset('images/task3.png') }}" alt="task2" class="card-img-top">
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Claim</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mt-3 mb-3" style="width: 70%;">
                    <img src="{{ asset('images/task4.png') }}" alt="task2" class="card-img-top">
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Claim</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mt-3 mb-3" style="width: 70%;">
                    <img src="{{ asset('images/task5.png') }}" alt="task2" class="card-img-top">
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Claim</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mt-3 mb-3" style="width: 70%;">
                    <img src="{{ asset('images/task6.png') }}" alt="task2" class="card-img-top">
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Claim</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mt-3 mb-3" style="width: 70%;">
                    <img src="{{ asset('images/task7.png') }}" alt="task2" class="card-img-top">
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Claim</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mt-3 mb-3" style="width: 70%;">
                    <img src="{{ asset('images/task8.png') }}" alt="task2" class="card-img-top">
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Claim</a>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection

<style>

    div.card.mt-3{
        background-color: #41729f;
    }
    div.card.mt-3:hover{
        background-color: #274472;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,1), 0 6px 20px 0 rgba(0,0,0,0.19);
    }

    h1.titlehead{
        display: flex;
        align-items: left;
        justify-content: left;
        font-weight: bold;
        color: #41729f !important;
    }
    a.btn.btn-primary{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #41729f !important;
        border-color: #41729f !important;
        text-align: center;
    }
</style>