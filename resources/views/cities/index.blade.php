@extends('layouts.main')

@section('content')

    <table class="table" border="1">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Population</th>
            <th>Country</th>
            <th>Details</th>
            <th>Edit</th>
        </thead>
        <tbody>

            @foreach($cities as $city)
                <tr>
                    <td>{{$city->id}}</td>
                    <td>{{ $city->name }}</td>
                    <td>{{$city->population}}</td>
                    <td><a href="/cities/{{$city->id}}">Details</a></td>
                    <td><a href="/countries/{{$city->country->id}}">{{$city->country->name}}</a></td>
                    <td><a href="/cities/{{$city->id}}/edit">Edit</a></td>
                    <td>
                        <form action="/cities/{{$city->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{$cities->links()}}

@endsection
