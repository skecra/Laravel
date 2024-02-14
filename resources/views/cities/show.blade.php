@extends('layouts.main')

@section('content')

    <p>City: {{$city->name}}</p>
    <p>Population: {{$city->population}}</p>

@endsection
