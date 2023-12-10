@extends('master2')
@section('judulhalaman', 'View Mobil')

@section('konten')

    <h3 class="d-flex justify-content-center">
        Data Mobil</h3>

    <div class="row">
        <div class="col-6"></div>
        <div class="col-6 flex-column mt-5 mb-5">
            @foreach ($mobil as $m)
                <div name="merkmobil" id="merkmobil" class="mb-2">Merk Mobil: {{ $m->merkmobil }} </div>
                <div name="stockmobil" id="stockmobil" class="mb-2">Stock Mobil: {{ $m->stockmobil }} </div>
                <div name="tersedia" id="tersedia" class="mb-2">Ketersediaan:
                    @if ($m->tersedia == 'y')
                        Tersedia
                    @elseif ($m->tersedia == 'n')
                        Tidak tersedia
                    @else
                        Tidak dikenali
                    @endif
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/mobil" class="btn btn-primary pl-5 pr-5 mt-5">OK</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
