@extends('layouts.app')

@section('content')
    @if(count($data['results']) > 0)
        <p><p>{{ count($data['results']) }} results found.</p>
        <table class="table table-bordered" align="center">
            <tr>
                <th>Title</th>
                <th>Episode ID</th>
                <th>Opening Crawl</th>
                <th>Director</th>
                <th>Producer</th>
                <th>Release Date</th>
                <th>Action</th>
            </tr>
            @foreach ($data['results'] as $film)
                <tr>
                    <td>{{ $film['title'] }}</td>
                    <td>{{ $film['episode_id'] }}</td>
                    <td>{{ $film['opening_crawl'] }}</td>
                    <td>{{ $film['director'] }}</td>
                    <td>{{ $film['producer'] }}</td>
                    <td>{{ $film['release_date'] }}</td>
                    <td><a href="#" class="btn btn-warning">Edit</a>&nbsp;<a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
        <p>
            @if ($previous != '')
                <a href="/films{{ $term }}?page={{ $previous }}">< Previous</a>
            @endif
            @if ($next != '')
                <a href="/films{{ $term }}?page={{ $next }}">Next ></a>
            @endif
        </p>
    @else
        <p>No results found.</p>
    @endif
@endsection
