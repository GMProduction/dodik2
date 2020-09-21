@extends('cetak.index')

@section('content')
    <div class="text-center f-bold report-title">Laporan Daftar Barang / Price List</div>

    <hr>
    <table id="my-table" class="table display">
        <thead>
        <tr>
            <th width="10%">#</th>
            <th width="20%">Nama Barang</th>
            <th width="20%">Harga</th>
            <th width="20%">Deskripsi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($barang as $v)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $v->nama }}</td>
                <td>{{ number_format($v->harga, 0) }}</td>
                <td>{{ $v->deskripsi }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection
