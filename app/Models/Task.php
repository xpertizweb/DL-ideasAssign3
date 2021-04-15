<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    public function catagory() {
        return $this->belongsTo('App\Models\Catagory','catagories_id','id');
    }
}
