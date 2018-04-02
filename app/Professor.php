<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    // Table Name (default is plural of class name aka Post = posts)
    protected $table = 'professors';
    // Primary Key (default is id)
    protected $primaryKey = 'id';
    // Timestamps (default is true)
    public $timestamps = true;
    
}
