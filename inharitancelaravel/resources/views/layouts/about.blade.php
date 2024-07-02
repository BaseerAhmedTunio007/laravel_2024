@extends('layouts.masterlayout')
@section('content')
    <h1>Team About page</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quisquam, vero molestiae modi aut adipisci quidem explicabo reiciendis at iure fugiat delectus quia voluptatum voluptatibus obcaecati ea officiis et voluptas.</p>
@endsection

@section('title')
    About page
@endsection
     {{-- first code parent  --}}
@section('aboutpage')
    @parent 
    <h3>this is about page section  to show the my textline after parent and show  code </h3>
@endsection

{{-- end parent  --}}