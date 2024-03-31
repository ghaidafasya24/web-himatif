<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oprec extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Oprec()
    {
        return $this->belongsTo(Oprec::class, 'id_oprec');
    }
}
