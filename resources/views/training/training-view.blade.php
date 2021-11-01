@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Training for <span style="color:blue">{{$athlete->surname}} {{$athlete->name}} </span> (dob:<span style="color:blue"> {{$athlete->dob}}</span>)</h1>

@php
$heads = [
    'ID',
    'Discipline',
    'Name',
    'Single Shot Measure',
    'Repetitions',
    'Measure Unit',
    'Effort Scale'
];

$btnEdit = /*'<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';*/ '';
$btnDelete = /*'<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>'*/ '';

              
    /*[
        [22, 'John Bender', '+02 (123) 123456789', '<nobr>'.$btnEdit.$btnDelete.'</nobr>'],
        [19, 'Sophia Clemens', '+99 (987) 987654321', '<nobr>'.$btnEdit.$btnDelete'</nobr>'],
        [3, 'Peter Sousa', '+69 (555) 12367345243', '<nobr>'.$btnEdit.$btnDelete'</nobr>'],
    ],*/
$data = [];
foreach ($items as $item){
    $data[] = [
        $item->id,$item->discipline->name,$item->name,$item->single_shot_measure,$item->repetitions,$item->measure_unit,$item->effort_scale.'</nobr>',
    ];
}
              
$config = [
    
    'data' =>  $data,
    'order' => [[1, 'desc']],
    'columns' => [['orderable' => true],null,null,null,null,null],
];
@endphp



<x-adminlte-datatable id="table1" :heads="$heads">
    @foreach($config['data'] as $row)
        <tr>
            @foreach($row as $cell)
                <td>{!! $cell !!}</td>
            @endforeach
        </tr>
    @endforeach
</x-adminlte-datatable>


@stop
