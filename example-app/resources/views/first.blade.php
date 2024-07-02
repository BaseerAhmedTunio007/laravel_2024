
@php
     $boolen = '';
    
    $fruits = ['one' => 'apple' ,'two' => 'banana' , 'three' => 'orange']

    

@endphp


{{-- @include('pages.Header' , [$fruits]) --}}

{{-- condition cheack include files true are fales one line check  --}}

{{-- @includeWhen(true , 'pages.header' , [$fruits]) --}}
 
{{-- condition cheack include files true are fales one line check end --}}


{{-- through  variable check include file  --}}

{{-- @includeWhen( $boolen , 'pages.header' , [$fruits]) --}}

{{-- through  variable check include file end  --}}

{{-- {{-3ed way check condition   --}} 

@includeWhen(empty($boolen), 'pages.header', [$fruits])

{{-- {{-3ed way check condition end --}} 

{{-- Unless using the same way but $includeWhen invers $includeUnless --}}

<a href="{{route('secondpage')}}">Second</a>
<a href="{{route('thiredpage')}}">Thired</a> 
<a href="/about">About</a>



<h1>hello first page</h1>
  {{-- Simple statement --}}

  {{ 'Hello' }}  

  {{ 5 + 6 }}

 {{-- tages using laravel syntax  --}}

  {!! "<h1> hello </h1>" !!}

    {{-- Simple variable use php  --}}
  @php
    $user = 'Only time institue of management';  
  @endphp

  {{$user}}

  {{-- End simple statment use  in laravel --}}





  @php
   $name = ['aness' , 'rashid' , 'awais'];   
  @endphp

  {{-- step 2   calling the array --}}

 <ul>
  @foreach ($name as $n)

   @if ($loop->even)

   <li style="color: red">{{ $n }}</li>
       
   @elseif($loop->odd)
   <li style="color:green">{{ $n }}</li>

   @else
    <li> {{ $n }} </li>
   @endif
  @endforeach
</ul>


  {{-- include files --}}

@include('pages.footer')


{{-- end include files statement  --}}