@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Athletes\List</h1>

@php
$heads = [
    'ID',
    'Name',
    'Surname',
    'Date Of Birth',
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
        $item->id,$item->name,$item->surname,$item->dob,'<nobr>'.$btnEdit.$btnDelete.'</nobr>'
    ];
}
              
$config = [
    
    'data' =>  $data,
    'order' => [[1, 'desc']],
    'columns' => [['orderable' => true],null, null, null, ],
];
@endphp

@if(Session::has('add_ok'))
    <div class="row">
        <div class="col-md-4">
            <x-adminlte-info-box title="Add Ok" 
                text="{{Session::get('add_ok')}}" icon="fas fa-lg fa-eye text-dark" theme="gradient-teal"/>
        </div>        
    </div>
@endif


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
