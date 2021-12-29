<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //uno a muchos
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //unos a muchos 
    public function category (){
        return $this->belongsTo(Category::class);
    }
      // RELACIÓN POLIMÓRFICA DE UNO A UNO
      public function image()
      {
          return $this->morphOne(Image::class, 'imageable');
      }
       // RELACIÓN DE UNO A MUCHOS POLIMÓRIFCA 
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
     // RELACIÓN DE MUCHOS A MUCHOS POLIMÓRIFCA 
     public function tags()
     {
         return $this->morphToMany(Tag::class, 'taggable');
     }
}
