<?php

namespace App\Models;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Auteur extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function livres()
    {
        return $this->hasMany(Livre::class, 'auteur_id');
    }
}
