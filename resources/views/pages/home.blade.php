@extends('layouthome')

@section('content')

<!--
    <div class="set">
      <div class="large">AGB</div>
    </div>
    <div class="set2">

          <a href="/lol/opgg" class="btn btn-primary">Op.GG</a>
          <a href="/cdr/crimsondogsrust" class="btn btn-primary">Crimson Dogs Rust</a>
    </div>
-->

<div class="set">
    <div class="large">
        @if (Auth::guest())
            AGB
        @else
            {{ Auth::user()->name }}
        @endif


    </div>
    <div class="text-center">
        <a href="/cpp/cppintial" class="btn btn-primary">CollegePlan Proto</a>
        <a href="/cdr/kkkr3w" class="btn btn-primary">Kush Krew</a>
        @if (Auth::guest())
            <br><br><a href="/login" class="btn btn-primary">Login</a>
        @else
            <br><br><a href="/logout" class="btn btn-primary">Logout</a>
        @endif

    </div>
</div>



@stop
