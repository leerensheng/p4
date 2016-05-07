@extends('layouts.master')

@section('title')
    Update a Furniture Asset
@stop

@section('content')
    <h2>Update a Furniture Asset</h2>
    <form method='post' action='/furniture/update'>
        <input type='hidden' name='id' value='{{$furniture_asset->id}}'>
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-4">
                <label>Name</label>
                <br>
                <input id='name' type='text' name='name' value='{{ $furniture_asset->name }}'>
                <br>
                <label>Description</label>
                <br>
                <input type='text' id='description' name='description' value='{{ $furniture_asset->description }}'>
                <br>
                <label>Purchase Price</label>
                <br>
                <input type='text' id='purchase_price' name='purchase_price' value='{{ $furniture_asset->purchase_price }}'>
                <br>
                <label>Purchase Date</label>
                <br>
                <input type='date' id='purchase_date' name='purchase_date' value='{{ $furniture_asset->purchase_date }}'>
                <br>
            </div>
            <div class="col-md-8">
                <br>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-2'>
                <button type='submit' class='btn btn-primary' value='Update Item'>Update Item</button>
            </div>
        </div>
    </form>
@stop
