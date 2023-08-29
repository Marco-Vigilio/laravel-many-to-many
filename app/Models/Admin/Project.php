<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'slug'
    ];

    public function technologies(){
        return $this->belongsToMany("App\Models\Admin\Technologies");
    }
}
