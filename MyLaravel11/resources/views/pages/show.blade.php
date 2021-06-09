@extends("layouts.main-layout")

@section("sectionShow")

<div class="container">
  <h1>Car details</h1>
</div>

  <div class="container">
    <h2>
      Horse power  {{ $car -> horse_power }}
    </h2>

    <h2>
      Price {{ $car -> price}}
    </h2>

  </div>

@endsection
