<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentaire_media extends Model
{
    protected $table = 'commentaire_media';
    protected $fillable = ['id_media','id_commentaire'];
    protected $connection = 'mysql';
    use HasFactory;
}
