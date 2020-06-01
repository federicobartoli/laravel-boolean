<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
       protected $fillable = [
       'user_id',
       'category_id',
       'title',
       'summary',
       'body',
       'slug'
];
       public function category(){
       return $this->belongsTo('App\Category');
       }

       public function tags(){
       return $this->belonsToMany('App\Tag');
       }

       public function photos() {
              return $this->belongsToMany('App\Photo');
       }

       public function user(){
       return $this->belongsTo('App\User');
       }


}
