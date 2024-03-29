<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'judul_berita',
        'tanggal_publish',
        'deskripsi',
        'gambar',
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class, 'id_news');
    }
}
