@extends('base')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Berhasil Menyimpan Data',
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
                        <h6 class="h2 text-white d-inline-block mb-0">Tambah Data Lelang</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="admin/lelang">Data Lelang</a></li>
                                <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
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
                        <form method="POST" action="/admin/lelang/store" enctype="multipart/form-data">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="kodeLelang">Kode Lelang</label>
                                            <input type="text" id="kodeLelang" name="kodeLelang" class="form-control"
                                                   placeholder="Kode Lelang">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="namaLelang">Nama Lelang</label>
                                            <input type="text" id="namaLelang" name="namaLelang" class="form-control"
                                                   placeholder="Nama Lelang">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="linkWebsite">Link Website</label>
                                            <input type="text" id="linkWebsite" name="linkWebsite" class="form-control"
                                                   placeholder="Link Website">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="kodeLelang">Reward </label>
                                            <input type="text" id="reward" name="reward" class="form-control"
                                                   placeholder="Reward">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="kesulitan">Kesulitan</label>
                                            <input type="text" id="kesulitan" name="kesulitan" class="form-control"
                                                   placeholder="Kesulitan">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a>File Dok Penawaran</a>
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="filePenawaran">Select file</label>
                                            <input type="file" class="custom-file-input" id="filePenawaran"
                                                   name="filePenawaran" lang="en">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <a>File Dok Teknis</a>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="fileTeknis"
                                                   name="fileTeknis" lang="en">
                                            <label class="custom-file-label" for="fileTeknis">Select file</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <a>File Dok Kualifikasi</a>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="fileKualifikasi"
                                                   name="fileKualifikasi" lang="en">
                                            <label class="custom-file-label" for="fileKualifikasi">Select file</label>
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
