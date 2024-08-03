<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    public $timestamps = false;
    protected $fillable = [
        'title','description','image','category_id','project_url','status','created_at','updated_at'
    ];
}
