@extends('MobilMaster')
@section('judulhalaman', 'Data Mobil')

@section('konten')
    <h2>Data Mobil</h2>

    <a href="/mobil/tambah" class="btn btn-primary"> + Tambah Mobil</a>

    <br>
    <br>

    <table class="table table-striped table-hover">
        <tr>
            <th class="text-center">Merk Mobil</th>
            <th class="text-center">Stock Mobil</th>
            <th class="text-center">Tersedia</th>
            <th class="text-center">Opsi</th>
        </tr>
        @foreach ($mobil as $m)
            <tr>
                <td class="text-center">{{ $m->merkmobil }}</td>
                <td class="text-center">{{ $m->stockmobil }}</td>
                <td class="text-center">
                    @if ($m->tersedia == "y") Tersedia
                    @else Tidak tersedia
                    @endif
                </td>

                <td class="text-center">
                    <a href="/mobil/view/{{ $m->kodemobil }}" class="btn btn-success">View</a>
                    |
                    <a href="/mobil/edit/{{ $m->kodemobil }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/mobil/hapus/{{ $m->kodemobil }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
