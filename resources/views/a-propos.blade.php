@extends('layouts.app');

@section('content')
    <h1>A propos de {{$sujet}} </h1>
    <ul>
        @foreach ($members as $member)    
        <li>
            <a href="/a-propos/{{$member['names']}}"> {{$member['names']}} </a>
        </li>
        @endforeach
    </ul>
@endsection