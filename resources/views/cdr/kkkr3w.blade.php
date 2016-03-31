@extends('layout')

@section('content')
  <h1>Kush Krew</h1>
  <h2 class="text-indent">{{ Auth::user()->name }}</h2>


<!--
<form action="{{route('contact.post')}}" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="IGN">Steam IGN:</label>
    <input type="text" name="IGN" id="IGN" class="form-control" value="{{old('IGN')}}">
  </div>

  <div class="form-group">
    <label for="AGE">Steam IGN:</label>
    <input type="text" name="AGE" id="AGE" class="form-control" value="{{old('AGE')}}">
  </div>

  <div class="form-group">
    <label for="game">Which Game?:</label>
    <select id="game" name="game" class="form-control">

    </select>
    <input type="submit">

</form>
-->


@endsection
