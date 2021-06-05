@extends('layouts.app')

@section('content')
    @if(count($data['results']) > 0)
        <p><p>{{ count($data['results']) }} results found.</p>
        <table class="table table-bordered" align="center">
            <tr>
                <th>Name</th>
                <th>Rotation Period</th>
                <th>Orbital Period</th>
                <th>Diameter</th>
                <th>Climate</th>
                <th>Gravity</th>
                <th>Terrain</th>
                <th>Surface Water</th>
                <th>Population</th>
                <th>Action</th>
            </tr>
            @foreach ($data['results'] as $planet)
                <tr>
                    <td>{{ $planet['name'] }}</td>
                    <td>{{ $planet['rotation_period'] }}</td>
                    <td>{{ $planet['orbital_period'] }}</td>
                    <td>{{ $planet['diameter'] }}</td>
                    <td>{{ $planet['climate'] }}</td>
                    <td>{{ $planet['gravity'] }}</td>
                    <td>{{ $planet['terrain'] }}</td>
                    <td>{{ $planet['surface_water'] }}</td>
                    <td>{{ $planet['population'] }}</td>
                    <td><a href="#" class="btn btn-warning">Edit</a>&nbsp;<a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
        <p>
            @if ($previous != '')
                <a href="/planets{{ $term }}?page={{ $previous }}">< Previous</a>
            @endif
            @if ($next != '')
                <a href="/planets{{ $term }}?page={{ $next }}">Next ></a>
            @endif
        </p>
    @else
        <p>No results found.</p>
    @endif
@endsection
