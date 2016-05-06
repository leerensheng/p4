@extends('layouts.master')

@section('title')
    Update a Technology Asset
@stop

@section('content')
    <h2>Update a Technology Asset</h2>
    <form method='post' action='/tech/update'>
        <input type='hidden' name='id' value='{{$tech_asset->id}}'>
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-4">
                <label>Computer's Serial Number</label>
                <br>
                <input id='serial_number' type='text' name='serial_number' value='{{ $tech_asset->serial_number }}'>
                <br>
                <label>Manufacturer</label>
                <br>
                <input type='text' id='manufacturer' name='manufacturer' value='{{ $tech_asset->manufacturer }}'>
                <br>
                <label>Model</label>
                <br>
                <input type='text' name='model' value='{{ $tech_asset->model }}'>
                <br>
                <label>Purchase Date</label>
                <br>
                <input type='date' name='purchase_date' value='{{ $tech_asset->purchase_date }}'>
                <br>
                <label>Purchase Price</label>
                <br>
                <input type='int' name='purchase_price' value='{{ $tech_asset->purchase_price }}'>
                <br>
            </div>
            <div class="col-md-4">
                <label>CPU</label>
                <br>
                <input type='text' name='cpu' value='{{ $tech_asset->cpu }}'>
                <br>
                <label>RAM</label>
                <br>
                <input type='int' name='ram' value='{{ $tech_asset->ram }}'>
                <br>
                <label>Storage Size</label>
                <br>
                <input type='int' name='storage_size' value='{{ $tech_asset->storage_size }}'>
                <br>
                <label>Warranty Expiration</label>
                <br>
                <input type='date' name='warranty_expiration' value='{{ $tech_asset->warranty_expiration }}'>
                <br>
            </div>
            <div class="col-md-4">
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
