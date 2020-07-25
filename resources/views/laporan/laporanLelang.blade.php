@extends('base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Laporan Lelang</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Laporan Lelang</a></li>
                            </ol>
                        </nav>
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
                        <form>
                            <h6 class="heading-small text-muted mb-4">Data Lelang</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="dariLelang" class="form-control-label">Dari</label>
                                            <input class="form-control" type="date"  id="dariLelang" name="dariLelang">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="sampaiLelang" class="form-control-label">Sampai</label>
                                            <input class="form-control" type="date" id="sampaiLelang" name="sampaiLelang">
                                        </div>
                                    </div>

                                    <div class="col-lg-2 text-right mt-auto mb-auto">
                                        <a href="/cetakdatalelang" class="btn btn-md btn-primary">Cetak</a>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4"/>
                            <!-- Description -->

                        </form>
                    </div>
                </div>

                <div class="card">

                    <div class="card-body">
                        <form>
                            <h6 class="heading-small text-muted mb-4">Data Jadwal</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="dariJadwal" class="form-control-label">Dari</label>
                                            <input class="form-control" type="date"  id="dariJadwal" name="dariJadwal">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="sampaiJadwal" class="form-control-label">Sampai</label>
                                            <input class="form-control" type="date" id="sampaiJadwal" name="sampaiJadwal">
                                        </div>
                                    </div>

                                    <div class="col-lg-2 text-right mt-auto mb-auto">
                                        <a href="/cetakdatajadwal" class="btn btn-md btn-primary">Cetak</a>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4"/>
                            <!-- Description -->

                        </form>
                    </div>
                </div>

                <div class="card">

                    <div class="card-body">
                        <form>
                            <h6 class="heading-small text-muted mb-4">Data Tahapan</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="dariTahapan" class="form-control-label">Dari</label>
                                            <input class="form-control" type="date"  id="dariTahapan" name="dariTahapan">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="sampaiTahapan" class="form-control-label">Sampai</label>
                                            <input class="form-control" type="date" id="sampaiTahapan" name="sampaiTahapan">
                                        </div>
                                    </div>

                                    <div class="col-lg-2 text-right mt-auto mb-auto">
                                        <a href="/cetakdatatahapan" class="btn btn-md btn-primary">Cetak</a>
                                    </div>
                                </div>
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
