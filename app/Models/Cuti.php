<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cuti extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'id'
    ];



    // protected $fillable = [
    //     'nama',
    //     'keterangan',
    //     'tanggal_izin',
    //     'jeniscuti',
    //     'nrk'
    // ];

    public function pegawais(): HasMany
    {
        return $this->hasMany(pegawai::class);
    }
    public function atasans(): HasMany
    {
        return $this->hasMany(atasan::class);
    }
}
