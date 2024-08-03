<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    public $timestamps = false;
    protected $fillable = [
        'title','description','date','image','quote','is_publish','upload_by','created_at','updated_at'
    ];
}
