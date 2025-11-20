<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pilota extends Model
{
    protected $table = 'pilota';
    protected $primaryKey = 'az';
    public $timestamps = false;

    protected $fillable = [
        'nev', 'nem', 'szuldat', 'nemzet',
    ];
}