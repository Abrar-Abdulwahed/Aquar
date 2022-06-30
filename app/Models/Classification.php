<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'is_active'
    ];

    public function scopeActive($q){
        return $this->where('is_active', 1);
    }
}
