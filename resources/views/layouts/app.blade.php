<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Star Wars API</title>
    <link rel="stylesheet" href="{{ asset('/css/swapi.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">

    <div class="col-md-12">
    <h1>Star Wars API</h1>
    <div class="search">
        <form id="search-form" action="">
        <div class="row">
        <div class="col-md-4">
            <select class="form-control " id="category">
                <option value="people" @if(isset($view) && $view == 'people') selected @endif>People</option>
                <option value="films" @if(isset($view) && $view == 'films') selected @endif>Films</option>
                <option value="planets" @if(isset($view) && $view == 'planets') selected @endif>Planets</option>
                <option value="starships" @if(isset($view) && $view == 'starships') selected @endif>Starships</option>
                <option value="vehicles" @if(isset($view) && $view == 'vehicles') selected @endif>Vehicles</option>
                <option value="species" @if(isset($view) && $view == 'species') selected @endif>Species</option>
            </select>
            </div>
            <div class="col-md-3">
            <input type="text" id="search-input" class="form-control" />
            </div>
            <div class="col-md-3">            
            <input type="submit" id="btn-submit" value="Search" class="form-control btn-primary">
            </div>
            </div>
        </form>
    </div>
    <div class="content">
        @yield('content')
    </div>
    </div>
    </div>
</div>    
    <script type="text/javascript" src="{{ asset('/js/swapi.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
