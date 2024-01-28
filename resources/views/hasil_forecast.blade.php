@extends('layout.main')

@php
    if (!function_exists('calculateMSE')) {
        function calculateMSE($data)
        {
            $mse = $data->skip(1)->avg('mse');

            return number_format($mse, 2);
        }
    }

    if (!function_exists('calculateMAPE')) {
        function calculateMAPE($data)
        {
            $mape = $data->skip(1)->avg('mape') * 100;

            return number_format($mape, 2);
        }
    }

    $array_alpha = [];
    // var_dump($array_alpha);
    $totalAlpha = $data_hasil->groupBy('alpha')->count();
    $counter = 0;
@endphp

@section('content')
    <section class="content">
        <div class="container-fluid">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Hasil Forecasting</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="card">
                                        <div class="card-header">
                                            Masukan Nilai Alpha
                                        </div>
                                        <div class="card-body">
                                            <form action="/hasil-forecast/hitung" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Alpha</label>
                                                    <select class="form-control" name="alpha" style="width: 100%;"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option selected="selected" value="0.1">0.1</option>
                                                        <option value="0.2">0.2</option>
                                                        <option value="0.3">0.3</option>
                                                        <option value="0.4">0.4</option>
                                                        <option value="0.5">0.5</option>
                                                        <option value="0.6">0.6</option>
                                                        <option value="0.7">0.7</option>
                                                        <option value="0.8">0.8</option>
                                                        <option value="0.9">0.9</option>
                                                    </select>
                                                    <button type="submit" class="mt-2 btn btn-primary">Hitung</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($data_hasil->groupBy('alpha') as $alpha => $groupedData)
                                @if ($groupedData->count() > 0)
                                    @php $counter++; @endphp
                                    @php
                                        array_push($array_alpha, $alpha);
                                    @endphp
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row d-flex align-items-center">
                                                        <div class="col-10">
                                                            <h4 class="card-title text-left">Perhitungan menggunakan
                                                                Alpha {{ $alpha }}</h4>
                                                        </div>
                                                        <div class="col-2 d-flex justify-content-end">
                                                            <form action="/hasil-forecast/{{ $alpha }}"
                                                                method="post" class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-danger ml-2"
                                                                    onclick="return confirm('Yakin hapus?')">
                                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table id="example{{ $counter }}"
                                                        class="table table-bordered table-hover dataTable dtr-inline"
                                                        aria-describedby="example{{ $counter }}_info">
                                                        <thead>
                                                            <tr>
                                                                <th class="sorting sorting_asc" tabindex="0"
                                                                    aria-controls="example{{ $counter }}"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="No.: activate to sort column descending"
                                                                    aria-sort="ascending">
                                                                    No.
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="example{{ $counter }}"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Nama: activate to sort column ascending">
                                                                    Tanggal
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="example{{ $counter }}"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Alamat: activate to sort column ascending">
                                                                    Harga
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="example{{ $counter }}"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Alamat: activate to sort column ascending">
                                                                    Y1
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="example{{ $counter }}"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Alamat: activate to sort column ascending">
                                                                    Y2
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="example{{ $counter }}"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Alamat: activate to sort column ascending">
                                                                    a
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="example{{ $counter }}"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Alamat: activate to sort column ascending">
                                                                    b
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="example{{ $counter }}"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Alamat: activate to sort column ascending">
                                                                    Forecast
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="example{{ $counter }}"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Alamat: activate to sort column ascending">
                                                                    (At-Ft)
                                                                    / At
                                                                </th>
                                                                <th class="sorting" tabindex="0"
                                                                    aria-controls="example{{ $counter }}"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Alamat: activate to sort column ascending">
                                                                    (At-Ft) ^ 2
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $no = 1; @endphp
                                                            @foreach ($data_hasil->where('alpha', $alpha) as $hasil)
                                                                <tr class="odd">
                                                                    <td class="dtr-control sorting_1" tabindex="0">
                                                                        {{ $no }}</td>
                                                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $hasil->forecastings->tanggal)->format('d F Y') }}
                                                                    </td>
                                                                    <td>{{ $hasil->forecastings->harga }}</td>
                                                                    <td>{{ $hasil->Y1 }}</td>
                                                                    <td>{{ $hasil->Y2 }}</td>
                                                                    <td>{{ $hasil->a }}</td>
                                                                    <td>{{ $hasil->b }}</td>
                                                                    <td>{{ $hasil->forecast }}</td>
                                                                    <td>{{ $hasil->mape }}</td>
                                                                    <td>{{ $hasil->mse }}</td>
                                                                </tr>
                                                                @php $no++; @endphp
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th rowspan="1" colspan="1">No.</th>
                                                                <th rowspan="1" colspan="1">Tanggal</th>
                                                                <th rowspan="1" colspan="1">Harga</th>
                                                                <th rowspan="1" colspan="1">Y1</th>
                                                                <th rowspan="1" colspan="1">Y2</th>
                                                                <th rowspan="1" colspan="1">a</th>
                                                                <th rowspan="1" colspan="1">b</th>
                                                                <th rowspan="1" colspan="1">Forecast</th>
                                                                <th rowspan="1" colspan="1">(At-Ft)</th>
                                                                <th rowspan="1" colspan="1">(At-Ft) ^ 2</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h4 class="d-inline">MSE =
                                                                {{ calculateMSE($data_hasil->where('alpha', $alpha)) }}
                                                            </h4>
                                                        </div>
                                                        <div class="col-6">
                                                            <h4 class="d-inline">Mape =
                                                                {{ calculateMAPE($data_hasil->where('alpha', $alpha)) }}
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                @endif
                            @endforeach
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            Grafik Forecast
                                        </div>
                                        <div class="card-body">
                                            <div id="grafik">

                                            </div>
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
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        let forecast = @json($data_hasil->where('alpha', '0.10')->pluck('forecast')).map(Number);
        let tanggal = @json($data_aktual->pluck('tanggal'));
        let harga = @json($data_aktual->pluck('harga'));
        let alpha = @json($array_alpha);

        let data = [];
        <?php foreach($array_alpha as $e): ?>
        data.push(<?php echo json_encode($data_hasil->where('alpha', $e)->pluck('forecast')); ?>.map(Number));
        <?php endforeach; ?>

        // Inisialisasi series untuk grafik
        let series = [];
        // Tambahkan series untuk data aktual
        series.push({
            name: 'Data Aktual',
            data: harga
        });

        // Loop melalui data forecast untuk setiap alpha
        data.forEach((forecastData, i) => {
            // console.log(forecastData);

            // Tambahkan series ke array
            series.push({
                name: `Forecast alpha ${alpha[i]}`,
                data: forecastData
            });
        });

        // Buat grafik menggunakan Highcharts
        Highcharts.chart('grafik', {
            title: {
                text: 'Grafik Forecast',
                align: 'left'
            },
            subtitle: {
                text: 'Data Saham PT. Mahaka',
                align: 'left'
            },
            yAxis: {
                title: {
                    text: 'Harga Saham'
                }
            },
            xAxis: {
                categories: tanggal
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: series,
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    </script>


@endsection
