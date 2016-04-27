@extends('layouts.master')

@section('title')
    Create a Furniture Asset
@stop

@section('content')
    <h2>Create a Furniture Asset</h2>
    <form method='post' action='/tech/create'>
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-4">
                <label>The Item's Name</label>
                <br>
                <input type='text' name='item_name' value='{{ old('item_name') }}'>
                <br>
                <label>Description</label>
                <br>
                <input type='text' name='description' value='{{ old('description') }}'>
                <br>
                <label>purchase_price</label>
                <br>
                <input type='int' name='purchase_price' value='{{ old('purchase_price') }}'>
                <br>
                <label>Purchase Date</label>
                <br>
                <input type='date' name='purchase_date' value='{{ old('purchase_date') }}'>
                <br>
            </div>
            <div class="col-md-4">
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
