<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    protected $fillable = [
      'post_id',
      'email',
      'body',
      'is_active',
      'author'
    ];

    public function replies(){
      return $this->hasMany('App\CommentReply');
    }

    public function post(){
      return $this->belongsTo('App\Post');
    }
    public function user(){
      return $this->belongsTo('App\User');
    }

    public function authorPhoto($name){
      $user = User::where('name', $name)->get()->first();
      $path = $user->photo->path;
      return $path;
    }
}