@extends('master2')
@section('judulhalaman', 'Kategori')

@section('konten')
<br/>
    <h4>Pilih Kategori</h4>
    <br/>
    <form action="/kategori/view" method="GET">
		<select class="custom-select" name="cari">
            @foreach($kategori as $k)
            <option value={{ $k->ID }}>{{ $k->Nama }}</option>
            @endforeach
          </select>
          <br/>
          <br/>
		<input type="submit" value="Kirim" class="btn btn-primary">
	</form>

@endsection
