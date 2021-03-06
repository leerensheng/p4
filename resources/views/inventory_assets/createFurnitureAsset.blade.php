@extends('layouts.master')

@section('title')
    Create a Furniture Asset
@stop

@section('content')
    <h2>Create a Furniture Asset</h2>
    <form method='post' action='/furniture/create'>
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-4">
                <label>The Item's Name</label>
                <br>
                <input type='text' name='name' value='{{ old('name') }}'>
                <br>
                <label>Description</label>
                <br>
                <input type='text' name='description' value='{{ old('description') }}'>
                <br>
                <label>Purchase Price</label>
                <br>
                <input type='int' name='purchase_price' value='{{ old('purchase_price') }}'>
                <br>
                <label>Purchase Date<br>"YYYY-MM-DD"</label>
                <br>
                <input type='date' name='purchase_date' value='{{ old('purchase_date') }}'>
                <br>
            </div>
            <div class="col-md-8">
                <br>
            </div>
        </div>
        <div class='row'>
            <div class="col-md-4">
                <button type='submit' class='btn btn-primary' value='Create Item'>Create Item</button>
            </div>
        </div>
    </form>
@stop
