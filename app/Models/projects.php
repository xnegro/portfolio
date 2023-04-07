<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    protected $fillable = ['title', 'price', 'description', 'service_id'];

    use HasFactory;
}
