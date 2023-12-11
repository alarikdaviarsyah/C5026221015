@extends('master2')
@section('judulhalaman', 'Edit Data Mobil')

@section('konten')

    <br/>
	<h3>Edit Data Mobil</h3>

	<a href="/mobil" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($mobil as $m)
	<form action="/mobil/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->kodemobil }}"> <br/>
        <div class="form-group row">
            <label for="merkmobil" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
                <input type="text" name="merkmobil" class="form-control" id="merkmobil" value="{{ $m->merkmobil }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockmobil" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <input type="number" name="stockmobil" class="form-control" id="stockmobil" value="{{ $m->stockmobil }}">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-info">
	</form>
	@endforeach

@endsection
