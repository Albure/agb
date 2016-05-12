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
        <div class="ntd">
            <a href="/Unlaced" class="bigger-btn btn-primary">Unlaced</a><br><br>
        </div>
        <a href="/cpp/cppintial" class="btn btn-primary">CPP In Progress</a>
        <a href="/cdr/kkkr3w" class="btn btn-primary">Krew In Progress</a>
        @if (Auth::guest())
            <br><br><a href="/login" class="btn btn-primary">Login</a>
        @else
            <br><br><a href="/logout" class="btn btn-primary">Logout</a>
        @endif

    </div>
</div>



@stop
