@extends('layout.main')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row mb-3">
                <div class="col-6">
                    <h3 class="m-0">Dashboard</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-header">Jumlah Data Saham</div>
                                    <div class="card-body">
                                        <h3>{{ $data_aktual->count() }}</h3>
                                    </div>
                                    <div class="card-footer">
                                        <a href="/data-aktual">Lihat data saham...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-header">Rata-rata harga saham</div>
                                    <div class="card-body">
                                        <h3>Rp. {{ round($data_aktual->avg('harga'), 4) }}</h3>
                                        <p>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-header">Harga saham tertinggi</div>
                                    <div class="card-body">
                                        <h3>Rp. {{ $max_saham->harga }}</h3>
                                        <p>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $max_saham->tanggal)->format('d F Y') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-header">Harga saham terendah</div>
                                    <div class="card-body">
                                        <h3>Rp. {{ $min_saham->harga }}</h3>
                                        <p>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $min_saham->tanggal)->format('d F Y') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
@endsection
