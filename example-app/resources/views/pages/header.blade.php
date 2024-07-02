<h1>Header page </h1>

{{-- <h2>{{ $name }}</h2> --}}

{{-- @foreach ($names as $items)
    <h2>{{$items}}</h2>
@endforeach --}}



  {{-- foreach loop with using key   --}}
{{-- @foreach ($fruits as $key=>$value)

<h2>{{ $key }} - {{ $value }}</h2>
    
@endforeach --}}

  {{-- foreach loop with using key end   --}}


    {{-- array is  empty using this loop  --}}

    @forelse ($fruits as $key => $value)
       <h2> {{ $key }} - {{ $value }} </h2>
    @empty
        <p>{{ 'data is not found' }} </p>
    @endforelse