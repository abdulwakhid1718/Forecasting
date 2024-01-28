<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forecasting extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function hasil_forecast() {
        return $this->hasMany(HasilForecast::class);
    }
}
