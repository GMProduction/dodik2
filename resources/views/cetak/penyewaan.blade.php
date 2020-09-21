@extends('cetak.index')

@section('content')
    <div class="text-center f-bold report-title">Laporan Penyewaan</div>
    <div class="text-center">Dari Tanggal {{ $tgl1 }} sampai dengan {{ $tgl2 }}</div>

    <hr>
    <table id="my-table" class="table display">
        <thead>
        <tr>
            <th>#</th>
            <th>No. Transaksi</th>
            <th >Penyewa</th>
            <th >Tanggal Sewa</th>
            <th >Tanggal Kembali</th>
            <th>Sub Total</th>
            <th>Discount</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($transaction as $v)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $v->no_transaksi }}</td>
                <td>{{ $v->cart[0]->user->username }}</td>
                <td>{{ $v->tgl_sewa }}</td>
                <td>{{ $v->tgl_tempo }}</td>
                <td class="text-right">{{ number_format($v->nominal, 0) }}</td>
                <td class="text-right">{{ number_format($v->discount, 0) }}</td>
                <td class="text-right">{{ number_format($v->nominal - $v->discount, 0)}}</td>
                <td>{{ $v->status }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <hr>
    <div class="text-right" style="font-weight: bold">
        Total Penjualan : {{ number_format($total, 0) }}
    </div>
@endsection
