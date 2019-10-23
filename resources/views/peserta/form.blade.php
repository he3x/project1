@extends('layout.main')

@section('title', 'Add Data')

@section('container')
<div class="container">
	<h1>Form Input</h1>
	<div class="row">
		<div class="col col-6">
			<form method="post" action="form">
				@csrf
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{old('nama')}}">
					@error('nama')
					<div class="invalid-feedback">
				      {{ $message }}
				    </div>
				    @enderror
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
					@error('email')
					<div class="invalid-feedback">
				      {{ $message }}
				    </div>
				    @enderror
				</div>
				<div class="form-group">
					<label>Phone</label>
					<input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{old('phone')}}">
					@error('phone')
					<div class="invalid-feedback">
				      {{ $message }}
				    </div>
				    @enderror
				</div>
				<div class="mt-3">
					<button class="btn btn-outline-primary btn-lg btn-block" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection