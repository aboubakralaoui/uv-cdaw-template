<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jaime extends Model
{
    protected $table = "jaimes";
    protected $primaryKey = "id";
    protected $fillable = ['id_utilisateurs','id_media'];

}
