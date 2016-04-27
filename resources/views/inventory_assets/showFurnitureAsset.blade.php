@extends('layouts.master')

@section('title')
    Show a Furniture Asset
@stop

@section('content')
    <h2>Show a Furniture Asset</h2>
    @if(isset($furniture_asset))
        <p>Show {{ $furniture_asset }}</p>
    @else
        <p>No item selected.</p>
    @endif
@stop
