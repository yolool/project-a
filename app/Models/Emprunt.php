<?php

namespace App\Models;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Emprunt extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function livre()
    {
        return $this->belongsTo(Livre::class, 'livre_id');
    }
}
