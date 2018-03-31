<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
     // Table Name (default is plural of class name aka Post = posts)
     protected $table = 'reviews';
     // Primary Key (default is id)
     protected $primaryKey = 'id';
     // Timestamps (default is true)
     public $timestamps = true;

     public function user() {
        return $this->belongsTo('App\User');
    }
}
