@extends('layout.main')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Saham</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="/data-aktual/{{ $data_aktual->id }}" method="post">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date"
                                        class="form-control disabled @error('tanggal') is-invalid @enderror" name="tanggal"
                                        id="tanggal" value="{{ old('tanggal', $data_aktual->tanggal) }}" disabled>
                                    @error('tanggal')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga Saham</label>
                                    <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                        name="harga" id="harga" placeholder="Masukan Harga"
                                        value="{{ old('harga', $data_aktual->harga) }}">
                                    @error('harga')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
