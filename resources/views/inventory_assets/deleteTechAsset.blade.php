@extends('layouts.master')

@section('title')
    Delete Tech Asset
@stop

@section('content')
    <h2>Delete A Technology Asset</h2>
    <p>Are you sure you want to delete <em>{{$tech_asset->serial_number}}</em>?</p>
    <p><a href='/tech/delete/{{$tech_asset->id}}'>Confirm</a></p>
@stop
