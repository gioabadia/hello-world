<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=[
        'title','content','author_id'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
  public function owner()
  {
      return $this->belongsTo(User::class,'id');
  }
}
