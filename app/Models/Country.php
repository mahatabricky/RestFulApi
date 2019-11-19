<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";
    //public $timestamp = false;
    
    protected $fillable =['name','ISO','short_name','code'];
}
