<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $table = "commentaires";
    protected $primaryKey = "id";
    protected $fillable = ['texte'];
    use HasFactory;
}
