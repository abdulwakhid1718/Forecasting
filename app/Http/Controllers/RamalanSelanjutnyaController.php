<?php

namespace App\Http\Controllers;

use App\Models\RamalanSelanjutnya;
use App\Models\HasilForecast;
use App\Models\Forecasting;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RamalanSelanjutnyaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_alpha = HasilForecast::groupBy('alpha')->pluck('alpha');
        // dd($data_alpha);
        return view("ramalan_selanjutnya", [
            'data_alpha' => $data_alpha,
            'data_ramal' => RamalanSelanjutnya::all()
        ]);
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
        $validated_data = $request->validate([
            'periode' => 'required|numeric',
            'alpha' => 'required'
        ]);

        $data_forecast_terakhir = HasilForecast::where('alpha', $validated_data['alpha'])->orderby('id', 'desc')->first();
        if ($data_forecast_terakhir) {
            $tanggal_terakhir = Carbon::parse($data_forecast_terakhir->forecastings->tanggal);
            $tanggal_baru = $tanggal_terakhir->addDays($validated_data['periode']);
            $f = $data_forecast_terakhir->a + ($data_forecast_terakhir->b * $validated_data['periode']);
            RamalanSelanjutnya::create([
                'tanggal' => $tanggal_baru,
                'periode' => $validated_data['periode'],
                'forecast' => $f,
                'alpha' => $validated_data['alpha']
            ]);
        }
        return redirect('/ramal-next')->with('success', 'Perhitungan berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(RamalanSelanjutnya $ramalanSelanjutnya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RamalanSelanjutnya $ramalanSelanjutnya)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RamalanSelanjutnya $ramalanSelanjutnya)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        RamalanSelanjutnya::destroy($id);
        return redirect('/ramal-next')->with('success', 'Data ramal telah berhasil dihapus');
    }
}
