@extends('layouts.base')

@section('content')
    <h1>A propos</h1>



    <ul>
    @foreach ($equipe as $equipier)
    <li><a href="/a-propos/{{$equipier}}">{{ $equipier}}</a></li>

    @endforeach
    </ul>
   
@endsection