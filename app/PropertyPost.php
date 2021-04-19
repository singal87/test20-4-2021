<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyPost extends Model
{
    //

    protected $fillable = [
        'title','description','videolink',
    ];
}
