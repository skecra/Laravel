@extends('layouts.main')

@section('content')

    <form action="/cities/{{$city->id}}" method="POST">

        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{$city->name}}">
        <input type="text" name="population" value="{{$city->population}}">
        <button>Save</button>

    </form>

@endsection
