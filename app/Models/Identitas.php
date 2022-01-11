<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function datamobil()
    {
    return $this->belongsTo(Datamobil::class);
    }

    public function supir()
    {
    return $this->belongsTo(Supir::class);
    }

    public function user()
    {
    return $this->belongsTo(User::class, 'user_id', 'id');
    }
}


