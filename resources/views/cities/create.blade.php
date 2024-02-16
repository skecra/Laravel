@extends('layouts.main')

@section('content')

    <form class="form-control" action="/cities" method="POST">

        @csrf
        <input type="text" name="name" value="{{old('name')}}">
        @error('name')
        <p>{{$message}}</p>
        @enderror
        <input type="text" name="population" value="{{old('population')}}">
        @error('population')
        <p>{{$message}}</p>
        @enderror
        <button class="btn btn-success">Save</button>

    </form>

@endsection
