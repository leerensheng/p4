@extends('layouts.master')

@section('title')
    Delete Furniture Asset
@stop

@section('content')
    <h2>Delete A Furniture Asset</h2>
    <p>Are you sure you want to delete <em>{{$furniture_asset->name}}</em>?</p>
    <p><a href='/furniture/delete/{{$furniture_asset->id}}'>Confirm</a></p>
@stop
