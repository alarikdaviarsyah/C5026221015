@extends('master2')
@section('judulhalaman', 'Data Kategori')

@section('konten')
    <h2>Pilih Kategori</h2>
    <br>
    <div>
        <select id="nama" name="nama" class="col-sm-6 col-form-label">
            <option value="1">Elektronik</option>
            <option value="2">Rumah Tangga</option>
            <option value="3">Komputer</option>
        </select>
    </div>
    <br>
    <input type="submit" value="Simpan Data" class="btn btn-info">
@endsection
