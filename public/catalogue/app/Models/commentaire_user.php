<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentaire_user extends Model
{
    protected $table = 'commentaire_user';
    protected $fillable = ['id_utilisateur','id_commentaire'];
    protected $connection = 'mysql';
    use HasFactory;
}
