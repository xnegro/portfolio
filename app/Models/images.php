<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $fillable = ['belongto_id', 'image'];

    use HasFactory;
}
