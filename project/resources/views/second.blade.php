<h1>Welcome to my second page</h1>
<a href="{{route('about_us')}}"> About</a>
<a href="{{route('thired_us')}}">Thired Page</a>
{{5 + 5}}
<br>
<br>
{{"hello world "}}

<!-- you can use the tage blade template syntax  -->
{!!"<h1> Hello word </h1>"!!}

<!-- create variables -->
 @php 
  $user = "hello Baseer"

  @endphp

  {{$user}}

  {{-- array create the blade template  --}}
  @php 
   $names = ["arshad","baseer","furqan","sirafaraz"]
   @endphp
<ul>

   @foreach ($names as $name)

   @if ($loop->first)
       <li style="color:red">{{$name}} </li> 
       @elseif($loop->last)
        <li style="color: green">{{$name}}</li>
   @else
   <li>{{$name}} </li>   
   @endif
   {{-- blade loop varibles for foreach using --}}
           {{-- <li>{{$loop->index}} - {{$name}} </li>  --}}

   @endforeach
</ul>
