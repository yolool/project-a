<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivreHistory extends Model
{

    protected $fillable = ['livre_id', 'description'];
    use HasFactory;
}
