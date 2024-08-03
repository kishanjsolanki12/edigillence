<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hiringinfo extends Model
{
    use HasFactory;
    protected $table = 'hiring_info';
    public $timestamps = false;
    protected $fillable = [
        'name','email','resume','mobile','hiringfor','created_at','updated_at'
    ];
}
