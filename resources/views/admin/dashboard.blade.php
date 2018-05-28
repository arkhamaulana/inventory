@extends('layouts.app2')

@section('content')

    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="{{ url('/admin') }}"> <i class="icon-dashboard"></i>  My Dashboard </a> </li>
        <li class="bg_lo"> <a href="{{ url('/tables') }}"> <i class="icon-th"></i> Tables</a> </li>

      </ul>
    </div>

@endsection
