<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media_playliste extends Model
{
    protected $table = 'media_playliste';
    protected $fillable = ['id_playliste','id_media'];
    use HasFactory;
}
