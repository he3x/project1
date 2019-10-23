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
    <div class="col-6">
      <h1 class="mt-3">Data Mahasiswa</h1>
      
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif

      <table class="table">
      	<thead class="thead-dark">
      		<tr class="row">
	      		<th class="col-2" scope="col">#</th>
	      		<th class="col-6" scope="col">Nama</th>
	      		<th class="col-4" scope="col">Aksi</th>
	      	</tr> 
      	</thead>
      	<tbody>
          @foreach($peserta as $p)
      		<tr class="row">
      			<th  class="col-2" scope="row">{{$loop->iteration}}</th>
      			<td  class="col-6" >{{$p->nama}}</td>
      			<td  class="col-4" >
              <a href="/peserta/{{$p->id}}" class="btn btn-info">detail</a>
      				<form action="">
      			</td>
      		</tr>
          @endforeach
      	</tbody>
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-4">
      <a href="/form" class="btn btn-info">Tambah Data</a>
    </div>
  </div>
</div>
@endsection