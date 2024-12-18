<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class atasan extends Model
{

    protected $guarded = [

        'id'
    ];
    public function pegawais(): HasMany
    {
        return $this->hasMany(pegawai::class);
    }
    public function cutis(): BelongsTo
    {
        return $this->belongsTo(Cuti::class);
    }
}
