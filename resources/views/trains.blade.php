@extends('layouts.app')

@section('content')
    <h1>Dati da "config/data.php": </h1>
    <p>This is my paragraph content.</p>
    <button class="btn btn-primary">Cliccami</button>
    @foreach ($trains as $train)
        <div>{{ $train->brand }}</div>
    @endforeach
@endsection
