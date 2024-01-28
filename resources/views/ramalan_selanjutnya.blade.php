@extends('layout.main')

@section('content')
    <section class="content">
        <div class="container-fluid">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Peramalan Periode Berikutnya</h3>
                </div>
                <div class="card-body">
                    <form action="/ramal-next" method="post">
                        @csrf
                        <input type="hidden" name="_token" value="qmlspqAGawBOBE39RNVk9XHh18yE9v0Hcwhy5Ykz"
                            autocomplete="off">
                        <div class="form-group">
                            <label for="periode">Periode ke</label>
                            <input type="number" class="form-control @error('alpha') is-invalid @enderror" name="periode"
                                id="periode" value="{{ old('periode') }}" autofocus>
                            @error('alpha')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Alpha</label>
                            <select class="form-control @error('alpha') is-invalid @enderror" name="alpha">
                                <option value="">-- Pilih alpha --</option>
                                @foreach ($data_alpha as $alphaitem)
                                    <option value="{{ $alphaitem }}">{{ $alphaitem }}</option>
                                @endforeach
                            </select>
                            @error('alpha')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary" fdprocessedid="0xlq8c">Ramal</button>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3>Hasil Peramalan Berikutnya</h3>
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
                                                            Periode
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Alamat: activate to sort column ascending">
                                                            Alpha
                                                        </th>
                                                        <th class="sorting" tabindex="0" aria-controls="example2"
                                                            rowspan="1" colspan="1"
                                                            aria-label="Alamat: activate to sort column ascending">
                                                            Forecast
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
                                                    @foreach ($data_ramal as $ramal)
                                                        @php $no++ @endphp
                                                        <tr class="odd">
                                                            <td class="dtr-control sorting_1" tabindex="0">
                                                                {{ $no }}</td>
                                                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $ramal->tanggal)->format('d F Y') }}
                                                            </td>
                                                            <td>{{ $ramal->periode }}</td>
                                                            <td>{{ $ramal->alpha }}</td>
                                                            <td>{{ $ramal->forecast }}</td>
                                                            <td>
                                                                <form action="/ramal-next/{{ $ramal->id }}"
                                                                    method="post" class="d-inline">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button class="btn btn-danger ml-2"
                                                                        onclick="return confirm('Yakin hapus data ini?')">
                                                                        <i class="fa fa-trash mr-2" aria-hidden="true"></i>
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
                                                        <th rowspan="1" colspan="1">Periode</th>
                                                        <th rowspan="1" colspan="1">Alpha</th>
                                                        <th rowspan="1" colspan="1">Forecast</th>
                                                        <th rowspan="1" colspan="1">Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
