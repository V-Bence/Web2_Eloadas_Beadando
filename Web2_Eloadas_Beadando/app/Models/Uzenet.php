<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uzenet extends Model
{
    protected $table = 'uzenetek';
    public $timestamps = true; // lesz created_at
    protected $fillable = ['nev', 'email', 'uzenet'];
}