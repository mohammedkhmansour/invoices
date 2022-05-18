<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $guarded = [];
    public function section()
    {
    return $this->belongsTo('App\sections');
    }
    
}
