@extends('layout.main')

@section('content')
    <section class="content">
        <div class="container-fluid">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row d-flex align-items-center">
                                <div class="col-10">
                                    <h3 class="m-0">Data Aktual Saham</h3>
                                </div>
                                <div class="col-2">
                                    <a href="data-aktual/create" class="text-right btn btn-primary mb-2">
                                        <i class="fa fa-plus-square mr-2" aria-hidden="true"></i>
                                        Tambah Data
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="example2"
                                                        class="table table-bordered table-hover dataTable dtr-inline"
                                                        aria-describedby="example2_info">
                                                        <thead>
                                                            <tr>
                                                                <th class="sorting sorting_asc" tabindex="0"
                                                                    aria-controls="example2" rowspan="1" colspan="1"
                                                                    aria-label="No.: activate to sort column descending"
                                                                    aria-sort="ascending">
                                                                    No.
                                                                </th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Nama: activate to sort column ascending">
                                                                    Tanggal
                                                                </th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Alamat: activate to sort column ascending">
                                                                    Harga
                                                                </th>
                                                                <th class="sorting" tabindex="0" aria-controls="example2"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Nilai WP: activate to sort column ascending">
                                                                    Aksi
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $no = 0; @endphp
                                                            @foreach ($data_aktual as $saham)
                                                                @php $no++ @endphp
                                                                <tr class="odd">
                                                                    <td class="dtr-control sorting_1" tabindex="0">
                                                                        {{ $no }}</td>
                                                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $saham->tanggal)->format('d F Y') }}
                                                                    </td>
                                                                    <td>{{ $saham->harga }}</td>
                                                                    <td>
                                                                        <a href="data-aktual/{{ $saham->id }}/edit"
                                                                            class="btn btn-success">
                                                                            <i class="fa fa-edit mr-2"
                                                                                aria-hidden="true"></i>Edit</a>
                                                                        <form action="/data-aktual/{{ $saham->id }}"
                                                                            method="post" class="d-inline">
                                                                            @method('delete')
                                                                            @csrf
                                                                            <button class="btn btn-danger ml-2"
                                                                                onclick="return confirm('Yakin hapus data ini?')">
                                                                                <i class="fa fa-trash mr-2"
                                                                                    aria-hidden="true"></i>
                                                                                Hapus
                                                                            </button>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th rowspan="1" colspan="1">No.</th>
                                                                <th rowspan="1" colspan="1">Tanggal</th>
                                                                <th rowspan="1" colspan="1">Harga</th>
                                                                <th rowspan="1" colspan="1">Aksi</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            {{-- <div class="row">

                                                <div class="col-sm-12 col-md-7">
                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                        id="example2_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled"
                                                                id="example2_previous"><a href="#"
                                                                    aria-controls="example2" data-dt-idx="0" tabindex="0"
                                                                    class="page-link">Previous</a></li>
                                                            <li class="paginate_button page-item active"><a href="#"
                                                                    aria-controls="example2" data-dt-idx="1" tabindex="0"
                                                                    class="page-link">1</a></li>
                                                            <li class="paginate_button page-item next disabled"
                                                                id="example2_next"><a href="#"
                                                                    aria-controls="example2" data-dt-idx="2" tabindex="0"
                                                                    class="page-link">Next</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
@endsection
