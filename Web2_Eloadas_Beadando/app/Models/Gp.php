<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gp extends Model
{
    protected $table = 'gp';
    public $timestamps = false;
    protected $fillable = ['datum', 'nev', 'helyszin'];
}
