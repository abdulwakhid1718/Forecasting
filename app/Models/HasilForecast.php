<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilForecast extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function forecastings(){
        return $this->belongsTo(Forecasting::class);
    }
}
