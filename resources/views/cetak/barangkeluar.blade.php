@extends('cetak.index')

@section('content')
    <div class="text-center f-bold report-title">Laporan Barang Keluar</div>
    <div class="text-center">Dari Tanggal {{ $tgl1 }} sampai dengan {{ $tgl2 }}</div>

    <hr>
    <table id="my-table" class="table display">
        <thead>
        <tr>
            <th width="10%">#</th>
            <th width="20%">Nama Barang</th>
            <th width="20%">Qty</th>
            <th width="20%">Harga</th>
            <th width="20%">No. Transaksi</th>
            <th scope="col" class="sort" data-sort="status">Peminjam</th>
            <th scope="col" class="sort" data-sort="status">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cart as $v)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $v->product->nama }}</td>
                <td>{{ $v->qty }}</td>
                <td>{{ number_format($v->harga, 0) }}</td>
                <td>{{ $v->transaction->no_transaksi }}</td>
                <td>{{ $v->user->username }}</td>
                <td>{{ $v->status }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection
