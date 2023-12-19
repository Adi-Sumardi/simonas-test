<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    protected $fillable = [
        'id', 'province_id', 'name'
    ];
    public function province()
    {
        return $this->belongsTo(Province::class, 'id_province', 'id');
    }

}

