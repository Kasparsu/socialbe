<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Like extends Pivot
{

    public $incrementing = true;

    protected $table = 'likes';

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
