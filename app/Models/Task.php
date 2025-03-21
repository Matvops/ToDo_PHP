<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function users(){
        return $this->belongsTo(User::class);
    }

    public function weeks(){
        return $this->belongsTo(Week::class);
    }
}
