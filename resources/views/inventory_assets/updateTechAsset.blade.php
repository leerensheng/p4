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
                <input type='text' id='model' name='model' value='{{ $tech_asset->model }}'>
                <br>
                <label>Purchase Date<br>"YYYY-MM-DD"</label>
                <br>
                <input type='date' id='purchase_date' name='purchase_date' value='{{ $tech_asset->purchase_date }}'>
                <br>
                <label>Purchase Price</label>
                <br>
                <input type='int' id='purchase_price' name='purchase_price' value='{{ $tech_asset->purchase_price }}'>
                <br>
            </div>
            <div class="col-md-4">
                <label>CPU</label>
                <br>
                <input type='text' id='cpu' name='cpu' value='{{ $tech_asset->cpu }}'>
                <br>
                <label>RAM</label>
                <br>
                <input type='int' id='ram' name='ram' value='{{ $tech_asset->ram }}'>
                <br>
                <label>Storage Size</label>
                <br>
                <input type='int' id='storage_size' name='storage_size' value='{{ $tech_asset->storage_size }}'>
                <br>
                <label>Warranty Expiration</label>
                <br>
                <input type='date' id='warranty_expiration' name='warranty_expiration' value='{{ $tech_asset->warranty_expiration }}'>
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
