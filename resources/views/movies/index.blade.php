@extends('layouts.main')

@section('main-content')
   <ul>
      @foreach ($movies as $movie)
         <li>{{ $movie->title }} - {{ $movie->nationality }} - {{ $movie->date }} - {{ $movie->vote }}</li>      
      @endforeach
   </ul>
@endsection