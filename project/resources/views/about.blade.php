<h1>Welcome to my About page</h1>
@include('pages.header')
<a href="{{route('second_us')}}"> Second Page</a>
<a href="{{route('thired_us')}}">Thired Page</a>


@include('pages.footer')
@include('pages.footer' , ['name'=>'hello'])

{{-- value pass to header page  --}}
@include('pages.header',['status' => 'Welcome to header page'])
