<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'email', 'jabatan'
    ];

    public function inovasi()
    {
        return $this->hasMany(Inovasi::class);
    }
}
