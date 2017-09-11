<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['post_id', 'body', 'user_id'];
    
    public function post(){
        return $this->belongTo(Post::class);
    }
}
