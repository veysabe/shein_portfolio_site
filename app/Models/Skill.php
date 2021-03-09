<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'sort'
    ];

    public function works()
    {
        return $this->belongsToMany(Work::class);
    }

    public function scopeWorks($query, $id = array()) {
        return $query->whereIn('id', $id);
    }
}
