@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="home__content">
        <h1 class="content__title">
            Employee Onboarding and Training System
        </h1>
        <p class="content__welcome">
            Welcome aboard, {{ Auth::user()->name }}!
        </p>
        <p class="content__text">
            This online onboarding will help you start your journey with ABC Tech Inc. Take a deep breath and relax... because we are about to take you to a joyful ride as you learn more about our company, make new connections, and feel the excitement as we welcome you in our team!
        </p>
    </div>

    <div class="content__iconContainer">
        <div class="icon__dashboard iconItem"><a href="/dashboard" class="iconImg"><img src="{{ asset('images/dashboard.png') }}" alt="dashboard icon" id="icon__dashboard" class="icon__unit"></a></div>
        <div class="icon__modules iconItem"><a href="/modules" class="iconImg"><img src="{{ asset('images/modules.png') }}" alt="modules icon" id="icon__modules" class="icon__unit"></a></div>
        <div class="icon__milestones iconItem"><a href="/milestones" class="iconImg"><img src="{{ asset('images/milestones.png') }}" alt="milestones icon" id="icon__milestones" class="icon__unit"></a></div>
        <div class="icon__feedback iconItem"><a href="/database" class="iconImg"><img src="{{ asset('images/database.png') }}" alt="feedback icon" id="icon__feedback" class="icon__unit"></a></div>
    </div>
</div>
@endsection
