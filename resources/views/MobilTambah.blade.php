@extends('MobilMaster')

 @section('judulhalaman','Data Mobil')

 @section('konten')

	<h2>Data Mobil</h2>

	<a href="/mobil"> Kembali</a>

	<br/>
	<br/>

    <form action="/mobil/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <div class="col-sm-10">
                <input type="hidden" maxlength="30" class="form-control" id="kodemobil" name="kodemobil">
            </div>
        </div>
        <div class="form-group row">
            <label for="merkmobil" class="col-sm-2 col-form-label">Merk Mobil</label>
            <div class="col-sm-10">
                <input type="text" maxlength="30" class="form-control" id="merkmobil" name="merkmobil">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockmobil" class="col-sm-2 col-form-label">Stock Mobil</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="stockmobil" name="stockmobil">
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Simpan Data">
    </form>

@endsection

