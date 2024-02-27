{{  $country->name }}

<table>

    <thead>
    <th>
        ID
    </th>
    <th>
        Name
    </th>
    </thead>
    <tbody>
    @foreach($country->cities as $city)
        <tr>
            <td>{{$city->id}}</td>
            <td>{{$city->name}}</td>
        </tr>
    @endforeach

    </tbody>
</table>
