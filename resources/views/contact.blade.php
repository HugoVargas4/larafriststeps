@extends('layout')

@section('contect')

    <h1>Contact 1</h1>
    <p> {{ $name }} </p>
    
    {{-- condicional --}}
    @if ($name != "Andres")
        Tu nombre no es andres
    @else 
        <h2>Tu nombre es Andres</h2>
    @endif

    <ul>
    @foreach ([1,2,3,4,5] as $item)
        <li>{{ $item }}</li>     
    @endforeach
    </ul>
    
@endsection