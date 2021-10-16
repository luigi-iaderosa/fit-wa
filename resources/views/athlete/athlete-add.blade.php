@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Athletes\Add</h1>
    @if(Session::has('add_ko'))
    @php
        $errorNos = Session::get('add_ko'); 
    @endphp
    <div class="alert alert-danger" role="alert">
        <ul>
        @for ($i=0;$i<$errorNos;$i++)
            <li>{{Session::get('add_ko_'.$i)}} </li>        
        @endfor
        </ul>
    </div>
    @endif
    <form method="POST" action='add-post'>
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Athlete Name</label>
                    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <label for="surname">Athlete Surname</label>
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Enter surname">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="dob">Date of birth</label>
                    <input type="date" class="form-control" id="dob" name="dob">
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>
        </div>
      </form>
    
@stop
