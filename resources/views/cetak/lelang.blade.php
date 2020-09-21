@extends('cetak.index')

@section('content')
    <div class="text-center f-bold report-title">Laporan Data Lelang</div>
    <div class="text-center">Dari Tanggal {{ $tgl1 }} sampai dengan {{ $tgl2 }}</div>

    <hr>
    <table id="my-table" class="table display">
        <thead>
        <tr>
            <th scope="col" class="sort" data-sort="name">#</th>
            <th scope="col" class="sort" data-sort="name">Kode Lelang</th>
            <th scope="col" class="sort" data-sort="budget">Nama Lelang</th>
            <th scope="col" class="sort" data-sort="status">Link</th>
            <th scope="col">Reward</th>
            <th scope="col" class="sort" data-sort="completion">Kesulitan</th>
            <th scope="col" class="sort" data-sort="completion">Tanggal</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lelangs as $lelang)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $lelang->kode_lelang }}</td>
                <td>{{ $lelang->nama }}</td>
                <td>{{ $lelang->link }}</td>
                <td>{{ $lelang->reward }}</td>
                <td>{{ $lelang->kesulitan }}</td>
                <td>{{ $lelang->created_at->format('d-m-Y') }}</td>
            </tr>
        @endforeach
    </table>
@endsection
