@extends('layouts.main')

@section('content')

<form class="form-control m-2" action="/contacts" method="GET">
<div class="row">
    <div class="col-4">
        <input type="text" value='{{request()->filter_name}}' name="filter_name" class="input form-control col-4">
    </div>
    <div class="col-4">
        <select name="city_id" class="form-control col-4" id="">
            <option value="">--chose city--</option>
            @foreach ($cities as $c)

                <option {{$c->id == request()->city_id ? 'selected' : ''}} value="{{$c->id}}">{{$c->name}}</option>
                
            @endforeach
        </select>
    </div>
    <div class="col-4">
        <button class="btn btn-info">Search</button>
    </div>
</div>


</form>

    <table class="table" border="1">
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone number</th>
        <th>City</th>
        <th>Country</th>
        <th>Details</th>
        <th>Edit</th>
        </thead>
        <tbody>

        @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>{{ $contact->name }}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone_number}}</td>
                <td>{{$contact->city->name}}</td>
                <td>{{$contact->city->country->name}}</td>
                <td><a href="/cities/{{$contact->id}}">Details</a></td>
{{--                <td><a href="/countries/{{$contact->country->id}}">{{$contact->country->name}}</a></td>--}}
                <td><a href="/cities/{{$contact->id}}/edit">Edit</a></td>
                <td>
                    <form action="/cities/{{$contact->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$contacts->appends(request()->query())->links()}}

@endsection
