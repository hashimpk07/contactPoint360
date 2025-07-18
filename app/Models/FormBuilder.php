<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormBuilder extends Model
{
    use HasFactory;
   
    protected $fillable = ['title', 'content'];
    protected $casts    = ['content' => 'array'];
}
