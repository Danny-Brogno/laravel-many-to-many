@extends("layouts.main-layout")

@section("content")

<div class="container">
  <h1>HELLO WORLD</h1>
  <ul>
    @foreach($cars as $car)

    <li>
      <a href="{{ route('show', $car -> id)}}">
        Model: {{ $car -> model }}
      </a>

      <a href="{{ route('edit', $car -> id)}}">
        <i class="far fa-edit"></i>
      </a>
    </li>

    @endforeach
  </ul>
</div>
@endsection
