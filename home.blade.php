@extends('layout')

@section('content')
<div class="container flex-center">
    <button class="btn btn-primary" id="bt1">Exam</button>
    <div class="card cardb" id="card1">
        <div class="card-header">
            <h6>Exam</h6>
        </div>
        <div class=" card-body">
            <div class="form-group">
                <h5>Question 1: What is The Derivative of X/2</h5>
                <input type="radio" disabled><br>
                <input type="radio" disabled><br>
                <input type="radio" disabled><br>
                <input type="radio" disabled><br>
            </div>
            <div class="form-group">
                <h5>Question 2: What is The Integral of X/2</h5>
                <input type="radio" disabled><br>
                <input type="radio" disabled><br>
                <input type="radio" disabled><br>
                <input type="radio" disabled><br>
            </div>
        </div>
    </div>

    <button class="btn btn-secondary" id="bt2">Grade</button>
    <div class="card cardb" id="card2">
        <div class="card-header">
            <h6>Last Exam Best Grades</h6>
        </div>
        <div class=" card-body">
            <h5>Name:Mohamed <span style="color:green;">Grade:30</span></h5>
            <h5>Name:Omar <span style="color:green;">Grade:27</span></h5>
            <h5>Name:Ali <span style="color:green;">Grade:28</span></h5>
            <h5>Name:Salma<span style="color:green;">Grade:29</span></h5>
            <h5>Name:Mona <span style="color:green;">Grade:27</span></h5>
            <h5>Name:Aya <span style="color:green;">Grade:30</span></h5>
        </div>
    </div>

    <button class="btn btn-success" id="bt3">Staff</button>
    <div class="card cardb" id="card3">
        <div class="card-header">
            <h6>Staff</h6>
        </div>
        <div class="card-body">
            <div class="card-body">
                <h4>Mr Hany Gerges</h4>
                <p>
                    20+ Years Of Experience <br>
                    Studied At:88888 <br>
                    Teaches Math For <li>First Secondary</li><li>Second Secondary</li><li>Third Secondary</li>
                </p>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="/css/Shared/home.css">
@endsection
