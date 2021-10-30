@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Disciplines\Add</h1>
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
                    <label for="name">Exercise Name</label>
                    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter name">
                </div>
                
                <div class="form-group">
                    <label for="name">Discipline</label>
                    <select name="id_discipline" id="id_discipline">
                        @foreach ($disciplines as $discipline)
                            <option value="{{$discipline->id}}"> {{$discipline->name}}</option>
                        @endforeach    
                    </select>
                    
                </div>
                <div class="form-group">
                    <label for="name">Single Shot Measure</label>
                    <input type="text" class="form-control" id="single_shot_measure" name="single_shot_measure"  placeholder="Enter SSM">
                </div>
                <div class="form-group">
                    <label for="name">Repetitions</label>
                    <input type="text" class="form-control" id="repetitions" name="repetitions"  placeholder="Enter repetitions">
                </div>
                <div class="form-group">
                    <label for="name">Measure Unit</label>
                    <select class="form-control" name="measure_unit" id="measure_unit">
                        <option value="kg">KILOS</option>    
                        <option value="meters">METERS</option>    
                        <option value="meters">POOLS</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Effort Scale</label>
                    <input type="text" class="form-control" id="effort_scale" name="effort_scale"  placeholder="Enter Effort Scale">
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
