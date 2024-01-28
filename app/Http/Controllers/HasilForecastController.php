<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\HasilForecast;
use App\Models\Forecasting;

class HasilForecastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('hasil_forecast', [
            'data_hasil' => HasilForecast::all(),
            'data_aktual' => Forecasting::all()
        ]);
    }

    public function hitung(Request $request)
    {
        $alpha = $request->alpha;

        // cek apakah data pertama?
        $isFirst = Forecasting::first();

        if ($isFirst) {
            $s1 = $isFirst->harga;
            $s2 = $isFirst->harga;
            $a = $isFirst->harga;
            $b = 0;
            $f = 0;
            $mape = 0;
            $mse = 0;

            $data_aktual = Forecasting::get();

            foreach ($data_aktual as $forecasting) {
                // get data sebelumnya
                $data_sebelumnya = Forecasting::find($forecasting->id);
                if ($data_sebelumnya) {
                    // hitung f
                    $f = $data_sebelumnya->id == $isFirst->id ? 0 : $a + ($b * 1);
                    // hitung s1
                    $s1 = ($data_sebelumnya->harga * $alpha) + (1 - $alpha) * $s1;
                    // hitung s2
                    $s2 = ($s1 * $alpha) + (1 - $alpha) * $s2;
                    // hitung a
                    $a = 2 * $s1 - $s2;
                    // hitung b
                    $b = $alpha / (1 - $alpha) * ($s1 - $s2);
                    // hitung Mape
                    $mape = $data_sebelumnya->id == $isFirst->id ? 0 : abs(($data_sebelumnya->harga - $f) / $data_sebelumnya->harga);
                    // hitung MSE
                    $mse = $data_sebelumnya->id == $isFirst->id ? 0 : ($data_sebelumnya->harga - $f)**2;
                }
                HasilForecast::create([
                    'forecastings_id' => $forecasting->id,
                    "Y1" => $s1,
                    "Y2" => $s2,
                    "a" => $a,
                    "b" => $b,
                    "forecast" => $f,
                    "mape" => $mape,
                    "mse" => $mse,
                    "alpha" => $alpha
                ]);
            }
        }

        return redirect('/hasil-forecast')->with('success', 'Hitungan selesai!');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HasilForecast $hasilForecast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HasilForecast $hasilForecast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHasilForecastRequest $request, HasilForecast $hasilForecast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($alpha)
    {
        HasilForecast::where('alpha', '=', $alpha)->delete();
        return redirect('/hasil-forecast')->with('success', 'Data saham telah berhasil dihapus');
    }
}
