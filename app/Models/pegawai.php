<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class pegawai extends Model
{

    protected $guarded = [
        'id'
    ];

    public function cutis(): BelongsTo
    {
        return $this->belongsTo(Cuti::class);
    }
    public function atasans(): BelongsTo
    {
        return $this->belongsTo(atasan::class);
    }
}
