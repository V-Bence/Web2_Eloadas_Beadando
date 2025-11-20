<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eredmeny extends Model
{
    protected $table = 'eredmeny';
    public $timestamps = false;
    protected $fillable = ['datum','pilotaaz','helyezes','hiba','csapat','tipus','motor'];
}
