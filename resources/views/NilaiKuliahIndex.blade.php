@extends('NilaiKuliahMaster')
@section('judulhalaman','Data Nilai Kuliah')

@section('konten')
<h2>Data Nilai Kuliah</h2>

<a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Nilai Kuliah</a>

<br>
<br>

<table class="table table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>NRP</th>
        <th>Nilai Angka</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Bobot</th>
    </tr>
    @foreach ($nilai as $n)
        <tr>
            <td>{{ $n->ID }}</td>
            <td>{{ $n->NRP }}</td>
            <td>{{ $n->NilaiAngka }}</td>
            <td>{{ $n->SKS }}</td>
            @if ($n->NilaiAngka <= 40)
                <td>D</td>
            @elseif ($n->NilaiAngka>=41&&$n->NilaiAngka<=60)
                <td>C</td>
            @elseif ($n->NilaiAngka>=61&&$n->NilaiAngka<=80)
                <td>B</td>
            @else
                <td>A</td>
            @endif
            <td>{{$n->NilaiAngka*$n->SKS}}</td>
        </tr>
    @endforeach
</table>
@endsection
