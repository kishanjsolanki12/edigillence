<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;
    protected $table = 'industry';
    public $timestamps = false;
    protected $fillable = [
        'title','description','image','status','created_at','updated_at'
    ];
}
