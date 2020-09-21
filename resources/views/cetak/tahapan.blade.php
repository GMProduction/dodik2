@extends('cetak.index')

@section('content')
    <div class="text-center f-bold report-title">Laporan Data Tahapan</div>
    <div class="text-center">Dari Tanggal {{ $tgl1 }} sampai dengan {{ $tgl2 }}</div>

    <hr>
    <table id="my-table" class="table display">
        <thead>
        <tr>
            <th scope="col" class="sort" data-sort="name">#</th>
            <th scope="col" class="sort" data-sort="budget">Nama Lelang</th>
            <th scope="col" class="sort" data-sort="status">Tanggal Upload</th>
            <th scope="col">Pekerjaan</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tahapans as $tahapan)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $tahapan->lelang->nama }}</td>
                <td>{{ $tahapan->tanggal_upload }}</td>
                <td>{{ $tahapan->pekerjaan }}</td>
            </tr>
        @endforeach
    </table>
@endsection
