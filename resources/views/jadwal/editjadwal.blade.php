@extends('base')

@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Berhasil Merubah Data',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Edit Data Jadwal</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/admin/jadwal">Data Jadwal</a></li>
                                <li class="breadcrumb-item"><a href="#">Edit Data</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-body">
                        <form action="/admin/jadwal/update" method="POST">
                            @csrf
                            <input value="{{$jadwals->id}}" name="id" id="id" hidden>
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="form-group col-lg-2">
                                        <label for="idLelang">ID Lelang</label>
                                        <select class="form-control" id="idLelang" name="IdLelang">
                                            <option value="">Pilih Nama Lelang</option>
                                            @foreach($lelangs as $lelang)
                                                <option value="{{ $lelang->id }}">{{ $lelang->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="keteranganJadwal" for="keteranganJadwal">Keterangan
                                                Jadwal</label>
                                            <input type="text" id="keteranganJadwal" name="keteranganJadwal"
                                                   class="form-control" value="{{$jadwals->keterangan}}"
                                                   placeholder="keteranganJadwal Jadwal">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="jadwalPrakualifikasi" class="form-control-label">Jadwal
                                                Prakualifikasi</label>
                                            <input class="form-control" type="date" id="jadwalPrakualifikasi" value="{{ $jadwals->jadwal }}"
                                                   name="jadwalPrakualifikasi">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="btasWaktu" class="form-control-label">Batas Waktu Upload</label>
                                            <input class="form-control" type="date" id="btasWaktu" value="{{ $jadwals->batas }}" name="btasWaktu">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4"/>
                            <!-- Description -->
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#idLelang').val('{{$jadwals->lelang_id}}');
    })
</script>

@endsection
