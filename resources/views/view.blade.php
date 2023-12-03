@extends('master2')
  @section('judulhalaman', 'View data pegawai')

  @section('konten')

      <h3 class="d-flex justify-content-center">Data Pegawai</h3>

      <div class="row">
          <div class="col-6"></div>
          <div class="col-6 flex-column mt-5 mb-5">
              @foreach ($pegawai as $p)
                  <div name="nama" id="nama" class="mb-2">Nama: {{ $p->pegawai_nama }} </div>
                  <div name="jabatan" id="jabatan" class="mb-2">Jabatan: {{ $p->pegawai_jabatan }} </div>
                  <div name="umur" id="umur" class="mb-2">Umur: {{ $p->pegawai_umur }} </div>
                  <div name="alamat" id="alamat" class="mb-2">Alamat: {{ $p->pegawai_alamat }} </div>
                  <div class="d-flex justify-content-center">
                  <a href="/pegawai" class="btn btn-primary pl-5 pr-5 mt-5">OK</a>
                  </div>
                  @endforeach
          </div>
      </div>
  @endsection
