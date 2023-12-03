@extends('master2')
@section('judulhalaman', 'Edit Data Pegawai')

@section('konten')
    <a href="/pegawai" class="btn btn-link"> Kembali</a>
    <h3 class="mt-3">Edit Data Pegawai</h3>
    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
            <div class="form-group row">
                <label for="nama" class="col-xs-3 col-form-label ml-3 mr-3">Nama</label>
                <div class="col-xs-9 ml-1">
                    <input type="text" required="required" class="form-control" id="nama" name="nama"
                        value="{{ $p->pegawai_nama }}"> <!--name untuk server-->
                </div>
            </div>

            <div class="form-group row">
                <label for="nama" class="col-xs-3 col-form-label ml-3 mr-2">Jabatan</label>
                <div class="col-xs-9">
                    <input type="text" required="required" class="form-control" id="jabatan" name="jabatan"
                        value="{{ $p->pegawai_jabatan }}"> <!--name untuk server-->
                </div>
            </div>

            <div class="form-group row">
                <label for="nama" class="col-xs-3 col-form-label ml-3 mr-4">Umur</label>
                <div class="col-xs-9">
                    <input type="number" required="required" class="form-control" id="umur" name="umur"
                        value="{{ $p->pegawai_umur }}"> <!--name untuk server-->
                </div>
            </div>

            <div class="form-group row">
                <label for="nama" class="col-xs-3 col-form-label ml-3 mr-3 mb-1">Alamat</label>
                <div class="col-xs-9">
                    <textarea required="required" class="form-control" id="alamat" name="alamat">{{ $p->pegawai_alamat }}</textarea> <!--name untuk server-->
                </div>
            </div>

            <input type="submit" class="btn btn-warning" value="Edit Data">
        </form>
    @endforeach
@endsection
