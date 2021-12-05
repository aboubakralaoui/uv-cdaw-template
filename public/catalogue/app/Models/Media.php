<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = "media";
    protected $primaryKey = "id_media";
    protected $fillable = ['type','titre','duree','annee','Description' ];
}
