<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;
    public function projects(){
        return $this->belongsToMany("App\Models\Admin\Project");
    }
}
