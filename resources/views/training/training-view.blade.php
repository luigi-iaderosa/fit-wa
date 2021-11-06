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

<div class="row">
    <div class="col-md-5">&nbsp</div>
</div
<div class="row">
    <div class="col-md-5"><x-adminlte-button label="Add To Training" data-toggle="modal" data-target="#modalCustom" class="bg-teal"/></div>
</div>
<div class="row">
    <div class="col-md-5">&nbsp</div>
</div
<x-adminlte-datatable id="table1" :heads="$heads">
    @foreach($config['data'] as $row)
        <tr>
            @foreach($row as $cell)
                <td>{!! $cell !!}</td>
            @endforeach
        </tr>
    @endforeach
</x-adminlte-datatable>
<x-adminlte-modal id="modalCustom" title="Add training" size="lg" theme="teal"
    icon="fas fa-pencil-alt" v-centered static-backdrop scrollable>
    
    <div style="height:30px;">Insert a discipline</div>
    <div style="height:100px;">
        <form  method="POST" name="modalForm">
            <select name="discipline" id="discipline" class="form-control" required>
                <option value="-1">--No selection--</option>
                @foreach ($disciplines as $discipline )
                    <option value="{{$discipline->id}}">{{$discipline->name}}</option>
                @endforeach
            </select>
            <div id="exercises">
                
            </div>
            
        </form>
    </div>
   
    <x-slot name="footerSlot">
        <x-adminlte-button class="mr-auto" theme="success" label="Accept" id="modalCustomPost"/>
        <x-adminlte-button theme="danger" label="Dismiss" data-dismiss="modal"/>
    </x-slot>
</x-adminlte-modal>


@stop


@section('js')
<script>
    $(document).ready(function(){
        $('#modalCustomPost').click(function(){
            var id_discipline = $('#discipline').val();
            alert(id_discipline);
        });
        $('#discipline').on('change',function(){
            var id_discipline = $('#discipline').val();
            
            $.ajax
                ({
                type: "GET",
                url: "/services/exercises/by-discipline?discipline="+id_discipline,
                dataType: 'json',
                success: function(data)
                {
                    //var i = 0;
                     
                    data.forEach(function(item){
                        var inputCheckBox = '<input type="checkbox" name="exercises[]" value="'+item.id+'">&nbsp'+item.name+':'+item.single_shot_measure+' '+item.measure_unit+'&nbsp('+item.repetitions+' times)'+'<br>';
                        $('#exercises').append(inputCheckBox);    
                    });
                    
                    
                }
                });
                 
        });
    });
</script>
@stop
