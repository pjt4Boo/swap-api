@extends('layouts.app')

@section('content')
    @if(count($data['results']) > 0)
        <p><p>{{ count($data['results']) }} results found.</p>
        <table class="table table-bordered" align="center">
            <tr>
                <th>Name</th>
                <th>Classification</th>
                <th>Designation</th>
                <th>Average Height</th>
                <th>Skin Colors</th>
                <th>Hair Colors</th>
                <th>Eye Colors</th>
                <th>Average Lifespan</th>
                <th>Language</th>
                <th>Action</th>
            </tr>
            @foreach ($data['results'] as $species)
                <tr>
                    <td>{{ $species['name'] }}</td>
                    <td>{{ $species['classification'] }}</td>
                    <td>{{ $species['designation'] }}</td>
                    <td>{{ $species['average_height'] }}</td>
                    <td>{{ $species['skin_colors'] }}</td>
                    <td>{{ $species['hair_colors'] }}</td>
                    <td>{{ $species['eye_colors'] }}</td>
                    <td>{{ $species['average_lifespan'] }}</td>
                    <td>{{ $species['language'] }}</td>
                    <td><a href="#" class="btn btn-warning">Edit</a>&nbsp;<a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
        <p>
            @if ($previous != '')
                <a href="/species{{ $term }}?page={{ $previous }}">< Previous</a>
            @endif
            @if ($next != '')
                <a href="/species{{ $term }}?page={{ $next }}">Next ></a>
            @endif
        </p>
    @else
        <p>No results found.</p>
    @endif
@endsection
