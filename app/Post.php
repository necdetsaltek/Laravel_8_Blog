<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name defination
    protected $table = 'Posts';

    // Primary Key defination
    public $primaryKey = 'id';    

    // Timestamps  defination
    public $timestamps = true;

}