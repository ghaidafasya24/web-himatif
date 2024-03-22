<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery';
    protected $primaryKey = 'id_gallery';

    protected $fillable = [
        'judul_gallery',
        'tanggal_publish',
        'deskripsi',
        'gambar',
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class, 'id_gallery');
    }
}
