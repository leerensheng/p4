@extends('layouts.master')

@section('title')
    Show a Technology Asset
@stop

@section('content')
    <h2>Show a Technology Asset</h2>
    @if(isset($tech_asset))
        <p>Show {{ $tech_asset }}</p>
    @else
        <p>No item selected.</p>
    @endif
@stop
