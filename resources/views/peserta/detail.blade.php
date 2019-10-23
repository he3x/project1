@extends('layout.main')

@section('title', 'sandog web')

@section('active.nav')
<div class="navbar-nav">
	<a class="nav-item nav-link" href="{{url('/')}}">Home</a>
	<a class="nav-item nav-link active" href="{{url('/peserta')}}">Peserta</a>
</div>
@endsection

@section('container')
<div class="container">
	<div class="row">
		<div class="col-4">
			<h1 class="mt-3">Detail Mahasiswa</h1>
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">{{$id->nama}}</h5>
					<h6 class="card-title">{{$id->email}}</h6>
					<h6 class="card-title">{{$id->phone}}</h6>
				</div>
			</div>
			<div class="mt-2">
				<a href="/peserta/{{$id->id}}/edit" class="btn btn-success">Edit</a>
				<form action="{{$id->id}}" method="post" class="d-inline">
					@method('delete')
					@csrf
					<button class="btn btn-danger">Delete</button>
				</form>
				<a href="/peserta" class="mt-3 btn btn-secondary d-inline">Back</a>
			</div>
		</div>
	</div>
</div>
@endsection