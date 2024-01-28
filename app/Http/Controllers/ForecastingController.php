<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Forecasting;
use Carbon\Carbon;

class ForecastingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data_aktual', [
            'data_aktual' => Forecasting::get()
        ]);
    }

    public function dashboard()
    {
        $data_aktual = Forecasting::all();
        $harga_saham_tertinggi = DB::table('forecastings')->orderBy('harga', 'desc')->first();
        $harga_saham_terendah = DB::table('forecastings')->orderBy('harga', 'asc')->first();

        return view('dashboard', [
            'data_aktual' => $data_aktual,
            'max_saham' => $harga_saham_tertinggi,
            'min_saham' => $harga_saham_terendah
        ]);
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tanggal_baru = null;
        $data_forecast_terakhir = Forecasting::orderby('id', 'desc')->first();
        if ($data_forecast_terakhir) {
            $tanggal_terakhir = Carbon::parse($data_forecast_terakhir->tanggal);
            $tanggal_baru = $tanggal_terakhir->addDays(1)->format('Y-m-d');
        }

        return view('tambah_data', [
            'tanggal_baru'=> $tanggal_baru
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validated_data = $request->validate([
            'tanggal' => 'required',
            'harga' => 'required|numeric',
        ]);

        Forecasting::create($validated_data);
        
        return redirect('/data-aktual')->with('success', 'Data saham berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit_data',[
            'data_aktual' => Forecasting::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        $validated_data = $request->validate([
            'harga' => 'required|numeric',
        ]);

        Forecasting::where('id', $id)
                    ->update($validated_data);
        DB::table('hasil_forecasts')->delete();
        return redirect('/data-aktual')->with('success', 'Data saham berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Forecasting::destroy($id);
        DB::table('hasil_forecasts')->delete();
        return redirect('/data-aktual')->with('success', 'Data saham telah berhasil dihapus');
    }
}
