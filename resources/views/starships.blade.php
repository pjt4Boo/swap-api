@extends('layouts.app')

@section('content')
    @if(count($data['results']) > 0)
        <p><p>{{ count($data['results']) }} results found.</p>
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
                <th>Hyperdrive Rating</th>
                <th>MGLT</th>
                <th>Starship Class</th>
                <th>Action</th>
            </tr>
            @foreach ($data['results'] as $starship)
                <tr>
                    <td>{{ $starship['name'] }}</td>
                    <td>{{ $starship['model'] }}</td>
                    <td>{{ $starship['manufacturer'] }}</td>
                    <td>{{ $starship['cost_in_credits'] }}</td>
                    <td>{{ $starship['length'] }}</td>
                    <td>{{ $starship['max_atmosphering_speed'] }}</td>
                    <td>{{ $starship['crew'] }}</td>
                    <td>{{ $starship['passengers'] }}</td>
                    <td>{{ $starship['cargo_capacity'] }}</td>
                    <td>{{ $starship['consumables'] }}</td>
                    <td>{{ $starship['hyperdrive_rating'] }}</td>
                    <td>{{ $starship['MGLT'] }}</td>
                    <td>{{ $starship['starship_class'] }}</td>
                    <td><a href="#" class="btn btn-warning">Edit</a>&nbsp;<a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
        <p>
            @if ($previous != '')
                <a href="/starships{{ $term }}?page={{ $previous }}">< Previous</a>
            @endif
            @if ($next != '')
                <a href="/starships{{ $term }}?page={{ $next }}">Next ></a>
            @endif
        </p>
    @else
        <p>No results found.</p>
    @endif
@endsection
