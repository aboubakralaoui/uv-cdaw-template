<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vue extends Model
{
    protected $table = "vues";
    protected $primaryKey = "id";
    protected $fillable = ['id_utilisateurs','id_media'];
}
