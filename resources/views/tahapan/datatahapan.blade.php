@extends('base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Tahapan</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Data Tahapan</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="/admin/tahapan/add" class="btn btn-sm btn-neutral">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Light table</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table id="tabel_tahapan" class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">Nama Lelang</th>
                                <th scope="col" class="sort" data-sort="status">Tanggal Upload</th>
                                <th scope="col">Pekerjaan</th>
                                <th scope="col" class="">Aksi</th>

                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($tahapans as $tahapan)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $tahapan->lelang->nama }}</td>
                                    <td>{{ $tahapan->tanggal_upload }}</td>
                                    <td>{{ $tahapan->pekerjaan }}</td>
                                    <td class="text-right center">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="tahapan/edit/{{ $tahapan->id }}">Edit</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
{{--                    <div class="card-footer py-4">--}}
{{--                        <nav aria-label="...">--}}
{{--                            <ul class="pagination justify-content-end mb-0">--}}
{{--                                <li class="page-item disabled">--}}
{{--                                    <a class="page-link" href="#" tabindex="-1">--}}
{{--                                        <i class="fas fa-angle-left"></i>--}}
{{--                                        <span class="sr-only">Previous</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="page-item active">--}}
{{--                                    <a class="page-link" href="#">1</a>--}}
{{--                                </li>--}}
{{--                                <li class="page-item">--}}
{{--                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>--}}
{{--                                </li>--}}
{{--                                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                <li class="page-item">--}}
{{--                                    <a class="page-link" href="#">--}}
{{--                                        <i class="fas fa-angle-right"></i>--}}
{{--                                        <span class="sr-only">Next</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>

    </div>

@endsection

@section('script')
    <script>
        $(document).ready( function () {
            $('#tabel_tahapan').DataTable();
        } );
    </script>

@endsection
