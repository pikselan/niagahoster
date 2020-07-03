<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hosting_category extends Model
{
    //
    protected $table = 'hosting_categories';
    protected $fillable = ['name_category','price','discount'];
}
