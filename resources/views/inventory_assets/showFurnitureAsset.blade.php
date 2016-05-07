@extends('layouts.master')

@section('title')
    Show a Furniture Asset
@stop

@section('content')
    <h2>Show a Furniture Asset</h2>
    @if(isset($furniture_asset))
        <table border='1'>
            <thead>
                <tr>
                    <td>Database ID Number</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Purchase Price</td>
                    <td>Purchase Date</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $furniture_asset->id }}</td>
                    <td>{{ $furniture_asset->name }}</td>
                    <td>{{ $furniture_asset->description }}</td>
                    <td>{{ $furniture_asset->purchase_price }}</td>
                    <td>{{ $furniture_asset->purchase_date }}</td>
                </tr>
            </tbody>
        </table>

        <a href='/furniture/update/{{ $furniture_asset->id }}'>Edit</a><br>
        <a href='/furniture/confirm-delete/{{ $furniture_asset->id }}'>Delete</a><br>
    @else
        <p>No item selected.</p>
    @endif
@stop
