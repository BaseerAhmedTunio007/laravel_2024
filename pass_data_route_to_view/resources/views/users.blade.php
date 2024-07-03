{{-- <h3> Name :: {{$name}} </h3> --}}
{{-- <h3>City ::{{$city}}</h3> --}}

{{-- <h3>City :: {{!empty($city) ? $city : "No result found"; }}</h3> --}}

{{-- @foreach ($user as $id => $u)
   <h3>{{$id}} || {{$u['name']}} || {{$u['phone']}} || {{$u['city']}} 
    <a href="{{route('userid' , $id )}}">show</a></h3>
    
@endforeach --}}
{{-- Displaying individual name and city (commented out) --}}
{{-- <h3> Name :: {{$name}} </h3> --}}
{{-- <h3>City ::{{$city}}</h3> --}}

{{-- Display city with a default value if empty (commented out) --}}
{{-- <h3>City :: {{!empty($city) ? $city : "No result found"; }}</h3> --}}

{{-- Loop through each user and display their information --}}
@foreach ($users as $id => $user)
    <h3>
        {{$id}} || {{$user['name']}} || {{$user['phone']}} || {{$user['city']}} 
        <a href="{{route('userid', $id)}}">Show</a>
    </h3>
@endforeach
