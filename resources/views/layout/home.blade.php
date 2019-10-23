@extends('layout.main')

@section('title', 'sandog web')

@section('active.nav')
<div class="navbar-nav">
	<a class="nav-item nav-link active" href="{{url('/')}}">Home</a>
	<a class="nav-item nav-link" href="{{url('/peserta')}}">Peserta</a>
</div>
@endsection

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Hello, world!</h1>
    </div>
  </div>
</div>
@endsection