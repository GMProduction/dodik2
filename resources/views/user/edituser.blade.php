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
                        <h6 class="h2 text-white d-inline-block mb-0">Tambah Data User</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/admin/user">Data User</a></li>
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
                    {{ $user->username }}
                    <div class="card-body">
                        <form action="/admin/user/patch" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="btasWaktu" class="form-control-label">Username</label>
                                        <input class="form-control" type="text" id="username" name="username" value="{{ $user->username }}">
                                    </div>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="idLelang">jabatan</label>
                                    <select class="form-control" id="level" name="level">
                                            <option value="admin" {{ $user->level === 'admin' ? 'selected' :'' }}>Admin</option>
                                            <option value="pimpinan" {{ $user->level === 'pimpinan' ? 'selected' :'' }}>Pimpinan</option>
                                    </select>
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
