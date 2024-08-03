<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category_masters';
    public $timestamps = false;
    protected $fillable = [
        'title','description','image','status','created_at','updated_at'
    ];

    /*public function technologies()
    {
       return $this->hasMany('App\Technology');
    }*/
    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
}
