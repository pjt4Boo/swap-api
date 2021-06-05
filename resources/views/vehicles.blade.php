@extends('layouts.app')

@section('content')
    @if(count($data['results']) > 0)
        <p><p>{{ count($data['results']) }} results found.</p>
        <div class="table-responsive col-md-12">
        <table class="table table-bordered" align="center">
            <tr>
                <th>Name</th>
                <th>Model</th>
                <th>Manufacturer</th>
                <th>Cost (In Credits)</th>
                <th>Length</th>
                <th>Max Atmosphering Speed</th>
                <th>Crew</th>
                <th>Passengers</th>
                <th>Cargo Capacity</th>
                <th>Consumables</th>
                <th>Vehicle Class</th>
                <th>Action</th>
            </tr>
            @foreach ($data['results'] as $vehicle)
                <tr>
                    <td>{{ $vehicle['name'] }}</td>
                    <td>{{ $vehicle['model'] }}</td>
                    <td>{{ $vehicle['manufacturer'] }}</td>
                    <td>{{ $vehicle['cost_in_credits'] }}</td>
                    <td>{{ $vehicle['length'] }}</td>
                    <td>{{ $vehicle['max_atmosphering_speed'] }}</td>
                    <td>{{ $vehicle['crew'] }}</td>
                    <td>{{ $vehicle['passengers'] }}</td>
                    <td>{{ $vehicle['cargo_capacity'] }}</td>
                    <td>{{ $vehicle['consumables'] }}</td>
                    <td>{{ $vehicle['vehicle_class'] }}</td>
                    <td><a href="#" class="btn btn-warning">Edit</a>&nbsp;<a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
        </div>
        <p>
            @if ($previous != '')
                <a href="/vehicles{{ $term }}?page={{ $previous }}">< Previous</a>
            @endif
            @if ($next != '')
                <a href="/vehicles{{ $term }}?page={{ $next }}">Next ></a>
            @endif
        </p>
    @else
        <p>No results found.</p>
    @endif
@endsection
