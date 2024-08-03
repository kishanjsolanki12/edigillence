<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hiring extends Model
{
    use HasFactory;
    protected $table = 'hiring';
    public $timestamps = false;
    protected $fillable = [
        'title','description','eduction','position','skill','experience','image','service_icon','start_date','end_date','status','created_at','updated_at'
    ];
}
