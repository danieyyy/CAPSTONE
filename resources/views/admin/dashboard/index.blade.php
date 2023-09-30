@extends('layouts.admin_page')

@section('content')

<div class="content">
            <div class="contentMain">
                <div class="contentMain__insights">
                    <h1 class="contentMain__insightsTitle">
                        Today's Insights
                    </h1>
                    <div class="insightsArea">
                        <div class="content__piechart"><img src="images/piechart.png" alt="pie chart" id="piechart"></div>
                        <div class="content__barchart"><img src="images/barchart.png" alt="bar chart" id="barchart"></div>
                    </div>
                </div>
                <div class="contentMain__feedback">
                    <h1 class="contentMain__feedbackTitle">
                        Feedback Report
                    </h1>
                    <div class="feedbackArea">
                        <div class="content__feedbackReport"><img src="images/feedbackReport.png" alt="feedback report" id="feedbackReport"></div>
                    </div>
                </div>
            </div>
            <div class="contentTodo">
                <h2 class="contentTodo__title">
                    To-Dos:
                </h2>
                <div class="confetti__container"><img src="images/confetti.png" alt="confetti" class="confetti"></div>
                <div class="contentTodo__textContainer">
                    <p class="contentTodo__text">
                        Congratulations!
                        <br/><br/>
                        You're all caught up.
                    </p>
                </div>
            </div>
        </div>

@endsection

<style>
    .content {
    display: flex;
    margin-left: 15%;
    color: #274472;
}

.contentMain {
    position: absolute;
    display: flex;
    flex-direction: column;
    margin: 0 390px 0 50px;
}

#piechart {
    height: 120px;
    margin-right: 150px;
}

#barchart {
    height: 120px;
}

#feedbackReport {
    height: 150px;    
}

.insightsArea {
    display: flex;
    margin: 50px 20px 50px 75px;
}

.feedbackArea {
    display: flex;
    margin: 50px 20px 50px 75px;
}

.contentTodo {
    position: absolute;
    right: 25px;
    width: 260px;
    height: 500px;
    background-color: #41729f;
    padding: 20px;
}

.contentTodo__title {
    text-decoration: underline;
    color: #c3e0e5;
}

.confetti {
    width: 100px;
}

.confetti__container {
    margin-top: 50px;
    display: flex;
    align-items: center;
    justify-content: center;

}

.contentTodo__textContainer {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #c3e0e5;
    margin-top: 30px;
}
</style>