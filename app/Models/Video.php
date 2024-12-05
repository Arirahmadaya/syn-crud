<?php

// app/Models/Video.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    // Menambahkan kolom-kolom yang boleh diassign secara massal
    protected $fillable = ['title', 'description', 'youtube_id'];
}
