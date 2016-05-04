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
                <td>{{ $tech_asset->id }}</td>
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

@stop
