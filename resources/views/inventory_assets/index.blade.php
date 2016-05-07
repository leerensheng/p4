@extends('layouts.master')

@section('title')
    Show All Assets
@stop

@section('content')
    <h2>All Technology Assets</h2>
    <table border='1'>
        <thead>
            <tr>
                <td>Database<br> ID Number</td>
                <td>Serial Number</td>
                <td>Manufacturer</td>
                <td>Model</td>
                <td>Purchase Date</td>
                <td>Purchase Price<br> (in RMB)</td>
                <td>CPU</td>
                <td>RAM</td>
                <td>Storage Size</td>
                <td>Warranty Expiration</td>
            </tr>
        </thead>
        <tbody>
            @foreach($tech_assets as $tech_asset)
            <tr>
                <td><a href='http://{{ $_SERVER['REQUEST_URI'] }}/tech/show/{{ $tech_asset->id }}'>{{ $tech_asset->id }}</a></td>
                <td>{{ $tech_asset->serial_number }}</td>
                <td>{{ $tech_asset->manufacturer }}</td>
                <td>{{ $tech_asset->model }}</td>
                <td>{{ $tech_asset->purchase_date }}</td>
                <td>{{ $tech_asset->purchase_price }}</td>
                <td>{{ $tech_asset->cpu }}</td>
                <td>{{ $tech_asset->ram }}</td>
                <td>{{ $tech_asset->storage_size }}</td>
                <td>{{ $tech_asset->warranty_expiration }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>All Furniture Assets</h2>
    <table border='1'>
        <thead>
            <tr>
                <td>Database ID Number</td>
                <td>Item Name</td>
                <td>Description</td>
                <td>Purchase Price<br> (in RMB)</td>
                <td>Purchase Date</td>
            </tr>
        </thead>
        <tbody>
            @foreach($furniture_assets as $furniture_asset)
            <tr>
                <td>{{ $furniture_asset->id }}</td>
                <td>{{ $furniture_asset->name }}</td>
                <td>{{ $furniture_asset->description }}</td>
                <td>{{ $furniture_asset->purchase_price }}</td>
                <td>{{ $furniture_asset->purchase_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@stop
