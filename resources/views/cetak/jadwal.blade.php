@extends('cetak.index')

@section('content')

    <div class="text-center f-bold report-title">Laporan Data Jadwal</div>
    <div class="text-center">Dari Tanggal {{ $tgl1 }} sampai dengan {{ $tgl2 }}</div>

    <hr>
    <table id="my-table" class="table display">
        <thead>
        <tr>
            <th scope="col" class="sort" data-sort="name">#</th>
            <th scope="col" class="sort" data-sort="budget">Nama Lelang</th>
            <th scope="col" class="sort" data-sort="status">Keterangan</th>
            <th scope="col">Jadwal</th>
            <th scope="col">Batas</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jadwals as $jadwal)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $jadwal->lelang->nama }}</td>
                <td>{{ $jadwal->keterangan }}</td>
                <td>{{ $jadwal->jadwal }}</td>
                <td>{{ $jadwal->batas}}</td>
            </tr>
        @endforeach
    </table>
@endsection
