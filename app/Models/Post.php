<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','title','body','image'
    ];

    public function post_author(){
        return $this->belongsTo('App\Models\User','user_id');

    }
}
