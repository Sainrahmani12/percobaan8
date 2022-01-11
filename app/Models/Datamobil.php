<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datamobil extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pesanan()
    {
    return $this->hasMany(Identitas::class,  'id', 'datamobil_id');
    }

    public function tagihan()
    {
    return $this->hasMany(Tagihan::class,  'id', 'datamobil_id');
    }
}
