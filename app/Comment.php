<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
        'content','article_id','author_id'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class,'id');
    }
}
