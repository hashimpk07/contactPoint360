<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    use HasFactory;

    protected $fillable = ['form_builder_id', 'form'];
    protected $casts = ['form' => 'array'];
}
