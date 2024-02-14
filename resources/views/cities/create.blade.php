@extends('layouts.main')

@section('content')

    <form action="/cities" method="POST">

        @csrf
        <input type="text" name="name">
        <input type="text" name="population">
        <button>Save</button>

    </form>

@endsection
