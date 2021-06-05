@extends('layouts.app')

@section('content')

    @if(count($data['results']) > 0)
    
    
        <p>{{ count($data['results']) }} results found.</p>
        <table class="table table-bordered" align="center">
            <tr>
                <th>Name</th>
                <th>Birth Year</th>
                <th>Gender</th>
                <th>Height</th>
                <th>Mass</th>
                <th>Hair Color</th>
                <th>Eye Color</th>
                <th>Skin Color</th>
                <th>Action</th>
            </tr>
              
            @foreach ($data['results'] as $person)
                <tr>
                    <td>{{ $person['name'] }}</td>
                    <td>{{ $person['birth_year'] }}</td>
                    <td>{{ $person['gender'] }}</td>
                    <td>{{ $person['height'] }}</td>
                    <td>{{ $person['mass'] }}</td>
                    <td>{{ $person['hair_color'] }}</td>
                    <td>{{ $person['eye_color'] }}</td>
                    <td>{{ $person['skin_color'] }}</td>
                    <td><a href="#" class="btn btn-warning">Edit</a>&nbsp;<a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
        <p>
            @if ($previous != '')
                <a href="/people{{ $term }}?page={{ $previous }}">< Previous</a>
            @endif
            @if ($next != '')
                <a href="/people{{ $term }}?page={{ $next }}">Next ></a>
            @endif
        </p>
    @else
        <p>No results found.</p>
    @endif
@endsection
