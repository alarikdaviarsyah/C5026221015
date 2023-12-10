@extends('master2')

 @section('judulhalaman','Data Nilai Kuliah')

 @section('konten')

	<h2>Data Nilai Kuliah</h2>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

    <form action="/nilaikuliah/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
                <input type="number" maxlength="6" class="form-control" id="nrp" name="nrp">
            </div>
        </div>

        <div class="form-group row">
            <label for="nilaiangka" class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="nilaiangka" name="nilaiangka">
            </div>
        </div>

        <div class="form-group row">
            <label for="sks" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="sks" name="sks">
            </div>
        </div>

        <input type="submit" class="btn btn-primary" value="Simpan Data">
    </form>

@endsection

