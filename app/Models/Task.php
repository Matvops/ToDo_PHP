<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    public $fillable = [
        'title',
        'priority'
    ];
    
    public function users(){
        return $this->belongsTo(User::class);
    }

    public function weeks(){
        return $this->belongsTo(Week::class);
    }
}
