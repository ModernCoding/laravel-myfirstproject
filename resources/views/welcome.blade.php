@extends('layout')

@section('content')
  <h1>Here we go to my {{ $foo }} app!</h1>

  <ul>
    @foreach ($tasks as $task)
      <li>{{ $task }}</li>
    @endforeach
  </ul>
@endsection
