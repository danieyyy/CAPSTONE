@extends('layouts.app_page')

@section('content')

<div class="content">
            <div class="contentMain">
                <h1 class="contentMain__title">
                    ABC Tech Inc. Company Orientation Modules
                </h1>
                <div class="contentMain__modules">
                    <div class="contentMain__module1">
                        <div class="contentMain__moduleTitle">
                            <img src="images/1.png" alt="1 icon" class="numberIcon moduleTitle1">
                            <p class="moduleTitle__name moduleTitle1">
                                Who is ABC Tech Inc?
                            </p>
                            <div class="moduleTitle__progressBar moduleTitle1">
                                <p class="progressBar__text">100%</p>
                                <div class="progressBar__out">
                                    <div class="progressBar__inComplete"></div>
                                </div>
                            </div>
                        </div>
                        <div class="contentMain__moduleText">
                            <p class="moduleText__text">
                                In this section, you will learn information about our company — its humble beginnings, why does it exist, who are the people behind the establishment of this organization, and what are the mission and vission of the company.
                            </p>
                        </div>
                        <hr id="divisionLine">
                        <div class="moduleFooter">
                            <div class="moduleFooter__sectionDetails moduleFooter1">
                                <p class="sectionDetails__text">
                                    VIEW SECTION DETAILS
                                </p>
                                <img src="images/downhat.png" alt="down hat" class="sectionDetails__downHat">
                            </div>
                            <div class="sectionFooter__completionStatus moduleFooter1">
                                <div class="sectionFooter__completionStatusContainer">
                                    <img src="images/complete.png" alt="completion box" class="completionStatus__symbol">
                                    <p class="completionStatus__text">
                                        Completed
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="contentMain__module1">
                        <div class="contentMain__moduleTitle">
                            <img src="images/2.png" alt="2 icon" class="numberIcon moduleTitle1">
                            <p class="moduleTitle__name moduleTitle1">
                                Company Organizational Structure
                            </p>
                            <div class="moduleTitle__progressBar moduleTitle1">
                                <p class="progressBar__text">100%</p>
                                <div class="progressBar__out">
                                    <div class="progressBar__inComplete"></div>
                                </div>
                            </div>
                        </div>
                        <div class="contentMain__moduleText">
                            <p class="moduleText__text">
                                Who are the people making up the ABC Tech Inc? What are the different departments making up the organization? Who reports to whom? These are some of the questions that will be answered once you start exploring this chapter.
                            </p>
                        </div>
                        <hr id="divisionLine">
                        <div class="moduleFooter">
                            <div class="moduleFooter__sectionDetails moduleFooter1">
                                <p class="sectionDetails__text">
                                    VIEW SECTION DETAILS
                                </p>
                                <img src="images/downhat.png" alt="down hat" class="sectionDetails__downHat">
                            </div>
                            <div class="sectionFooter__completionStatus moduleFooter1">
                                <div class="sectionFooter__completionStatusContainer">
                                    <img src="images/complete.png" alt="completion box" class="completionStatus__symbol">
                                    <p class="completionStatus__text">
                                        Completed
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contentMeta">
                <div class="contentMeta__description">
                    <h4 class="description__title">
                        This module is part of the ABC Tech Inc's Employee Onboarding and Training series:
                    </h4>
                    <ul class="description__list">
                        <li class="list__text">
                            Company orientation
                        </li>
                        <li class="list__text">
                            Meeting the team
                        </li>
                        <li class="list__text">
                            Knowing the top management
                        </li>
                        <li class="list__text">
                            Exploring the ABC Tech Inc's culture
                        </li>
                        <li class="list__text">
                            ABC Tech Inc operational procedure
                        </li>
                        <li class="list__text">
                            How you can have fun while working in ABC Tech Inc?
                        </li>
                        <li class="list__text">
                            Deployment
                        </li>
                    </ul>
                </div>
                <div class="contentMeta__resources">
                    <h4 class="resources__title">
                        RESOURCES
                    </h4>
                    <ul class="resources__list">
                        <li class="list__text">
                            company-profile.pdf
                        </li>
                        <li class="list__text">
                            csr.pdf
                        </li>
                        <li class="list__text">
                            organization-chart.png
                        </li>
                    </ul>
                </div>
            </div>
        </div>

@endsection

<style>
.content {
    margin-left: 15%;
    display: flex;
    /* overflow: scroll; */
}

.contentMain {
    color: #274472;
}

.contentMeta {
    width: 100%;
    color: #274472;
}

.contentMain__title {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.contentMain__modules {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 5% 0 0 0;
}

.contentMain__module1 {
    display: flex;
    flex-direction: column;
    background-color: #41729f;
    border: 0.5px solid #41729f;
    border-radius: 10px;
    padding: 20px;
    width: 75%;
    color: #c3e0e5;
    margin-bottom: 5%;
    overflow: hidden;
}

.contentMain__moduleTitle {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    margin-bottom: 10px;
}

.moduleTitle1 {
    display: block;
    width: 100%;
}

.moduleTitle__name {
    margin-left: 10px;
    font-weight: bold;
}

.numberIcon {
    width: 25px;
    height: 25px;
}

.moduleTitle__progressBar {
    display: flex;
    align-items: center;
    justify-content: right;
    margin: 10px;
}

.progressBar__out {
    width: 150px;
    height: 10px;
    background-color: #274472;
    border: 1px solid #274472;
    border-radius: 10px;
    overflow: hidden;
    margin-left: 5px;
}

.progressBar__inComplete {
    width: 100%;
    height: 100%;
    background-color: #c3e0e5;
    transition: width 0.5s ease-in-out;
}
.progressBar__inIncomplete {
    width: 50%;
    height: 100%;
    background-color: #c3e0e5;
    transition: width 0.5s ease-in-out;
}

#divisionLine {
    margin: 20px 0px 20px 0px;
    border: solid #c3e0e5;
    width: 100%;
}

.moduleFooter {
    display: flex;
    width: 100%;
}

.moduleFooter1 {
    display: block;
    width: 100%;
}

.moduleFooter__sectionDetails {
    display: flex;
    align-items: center;
}

.sectionDetails__downHat {
    height: 8px;
    margin-left: 10px;
}

.sectionFooter__completionStatus {
    display: flex;
    align-items: center;
    justify-content: right;
}

.sectionFooter__completionStatusContainer {
    display: flex;
    align-items: center;
    justify-content: right;
    background-color: #274472;
    padding: 5px 10px 5px 10px;
    /* border-radius: 5px; */
}

.completionStatus__symbol {
    height: 15px;
}

.completionStatus__text {
    margin-left: 5px;
}

/* content meta */
.contentMeta__description {
    background-color: #274472;
    color: #c3e0e5;
    padding: 20px;
    margin: 0 10% 50px 20%;
}

.contentMeta__resources {
    background-color: #274472;
    color: #c3e0e5;
    padding: 20px;
    margin: 0 10% 20% 20%;
}

.description__list {
    position: relative;
    padding: 20px 0px 0px 20px;
}

.resources__list {
    position: relative;
    padding: 20px 0px 0px 20px;
    list-style-type: none;
}

.resources__list li {
    margin-bottom: 10px;
    padding-left: 20px;
    background-image: url('photos/database1.png');
    background-repeat: no-repeat;
    background-position: left center;
    background-size: auto 20px; /* Set the desired height */
    line-height: 1.5;
}
</style>