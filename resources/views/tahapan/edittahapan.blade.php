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
                        <h6 class="h2 text-white d-inline-block mb-0">Edit Data Tahapan</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/admin/tahapan">Data Tahapan</a></li>
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
                        <form action="/admin/tahapan/patch" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $tahapan->id }}">
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="exampleFormControlSelect1">ID Lelang</label>
                                        <select class="form-control" id="idLelang" name="IdLelang">
                                            @foreach($lelangs as $lelang)
                                                <option value="{{ $lelang->id }}" {{ $tahapan->lelang_id === $lelang->id ? 'selected' : ''}}>{{ $lelang->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="btasWaktu" class="form-control-label">Batas Waktu Upload</label>
                                            <input class="form-control" type="date" id="btasWaktu" name="btasWaktu" value="{{ $tahapan->tanggal_upload }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                            <input type="text" id="pekerjaan" name="pekerjaan" class="form-control"
                                                   placeholder="Pekerjaan" value="{{ $tahapan->pekerjaan }}">
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


@endsection
