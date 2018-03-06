@extends('layouts.master') 
@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Niveles de hoy
            <small>{{date('d/m/Y')}}</small>
        </h3>
        <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                <i class="si si-pin"></i>
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
        </div>
    </div>
    <div class="block-content">
        @foreach($records as $record) @if($record->medida > 210)
        <div class="alert alert-danger font-weight-bold" role="alert">
            <a href="{{$record->path()}}">{{$record->created_at}} - {{$record->comida}}</a>
            <h3 class="float-right">{{$record->medida}}</h3>
        </div>
        @elseif($record->medida
        < 80) <div class="alert alert-danger font-weight-bold" role="alert">
            <a href="{{$record->path()}}">{{$record->created_at}} - {{$record->comida}}</a>
            <h3 class="float-right">{{$record->medida}}</h3>
    </div>
    @else
    <div class="alert alert-success font-weight-bold" role="alert">
        <a href="{{$record->path()}}">{{$record->created_at}} - {{$record->comida}}</a>
        <h3 class="float-right">{{$record->medida}}</h3>
    </div>
    @endif @endforeach
</div>
</div>
@endsection