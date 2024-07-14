<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class Visa extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'processing_time',
        'stay_period',
        'validity',
        'visa_category',
        'entry',
        'popular',
     ];
     public function country()
     {
         return $this->belongsTo(Country::class);
     }
}
