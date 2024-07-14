<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Visa;
class Country extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = [
        'id',
        'name',
        'slug',
        'continent'
    ];
    public function visas()
    {
        return $this->hasMany(Visa::class);
    }
}
