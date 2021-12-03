<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playliste_user extends Model
{
    
        protected $table = 'playliste_user';
        protected $fillable = ['id_playliste','id_user'];
    use HasFactory;
}
