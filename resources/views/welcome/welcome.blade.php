@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Welcome!</h1>
@stop

@section('content')
    <p>A quick view on most popular operations</p>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Athletes</h5>
                <hr>
            </div>
        </div>
        <div class="row">
                <div class="col-md-4"><a href="athletes/">List Athletes</a></div>
                <div class="col-md-8">List of all monitored people</div>
        </div>
        <div class="row">
            <div class="col-md-4"><a href="athletes/add">Add Athlete</a></div>
            <div class="col-md-8">Add a new person to monitor</div>
        </div>
        <div class="row">&nbsp</div>
        <div class="row">
            <div class="col-md-4">
                <h5>Exercises</h5>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"><a href="exercises/">List Exercises</a></div>
            <div class="col-md-8">List of all available exercises</div>
        </div>
        <div class="row">
            <div class="col-md-4"><a href="exercises/add">Add Exercise</a></div>
            <div class="col-md-8">Add and make an exercise available</div>
        </div>
        <div class="row">&nbsp</div>
        <div class="row">
            <div class="col-md-4">
                <h5>Disciplines</h5>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"><a href="disciplines/">List Disciplines</a></div>
            <div class="col-md-8">List of all available disciplines</div>
        </div>
        <div class="row">
            <div class="col-md-4"><a href="disciplines/add">Add Discipline</a></div>
            <div class="col-md-8">Add a discipline</div>
        </div>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
