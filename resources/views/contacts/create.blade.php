<form enctype="multipart/form-data" method="POST" action="/contacts">
    @csrf
    name
    <input type="text" name="name">
    email
    <input type="text" name="email">
    Phone num
    <input type="text" name="phone_number">

   city
    <select name="city_id" id="">
        @foreach($cities as $city)
            <option value="{{$city->id}}">{{$city->name}}</option>
        @endforeach
    </select>
    <input type="file" name="profile_image">
    <button>Save</button>
</form>
