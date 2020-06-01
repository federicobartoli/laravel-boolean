<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
       protected $fillable = [
       'user_id',
       'article_id',
       'name'
];

       public function articles(){
       return $this->belonsToMany('App\Article');
       }

       public function user(){
       return $this->belongsTo('App\User');
       }
}
