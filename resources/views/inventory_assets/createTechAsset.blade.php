@extends('layouts.master')

@section('title')
    Create a Technology Asset
@stop

@section('content')
    <h2>Create a Technology Asset</h2>
    <form method='post' action='/tech/create'>
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-4">
                <label>Item Serial Number</label>
                <br>
                <input type='text' name='serial_number' value='{{ old('serial_number') }}'>
                <br>
                <label>Manufacturer</label>
                <br>
                <input type='text' name='manufacturer' value='{{ old('manufacturer') }}'>
                <br>
                <label>Model</label>
                <br>
                <input type='text' name='model' value='{{ old('model') }}'>
                <br>
                <label>Purchase Date</label>
                <br>
                <input type='date' name='purchase_date' value='{{ old('purchase_date') }}'>
                <br>
                <label>Purchase Price</label>
                <br>
                <input type='int' name='purchase_price' value='{{ old('purchase_price') }}'>
                <br>
            </div>
            <div class="col-md-4">
                <label>CPU</label>
                <br>
                <input type='text' name='cpu' value='{{ old('cpu') }}'>
                <br>
                <label>RAM</label>
                <br>
                <input type='int' name='ram' value='{{ old('ram') }}'>
                <br>
                <label>Storage Size</label>
                <br>
                <input type='int' name='storage_size' value='{{ old('storage_size') }}'>
                <br>
                <label>Item Storage Type</label>
                <br>
                <input type='text' name='storage_type' value='{{ old('storage_type') }}'>
                <br>
                <label>Warranty Expiration</label>
                <br>
                <input type='date' name='warranty_expiration' value='{{ old('warranty_expiration') }}'>
                <br>
            </div>
            <div class="col-md-4">
                <br>
            </div>
        </div>
        <div class='row'>
            <button type='submit' class='btn btn-primary' value='Create Item'>Create Item</button>
        </div>
    </form>
@stop
