<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model {
    
    protected $table = 'tbl_breed';
    protected $guarded = [];
    public $timestamps = false;
}
