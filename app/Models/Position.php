<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    public function responsibilities() {
        return $this->belongsToMany(Responsibility::class, 'position_responsibility');
    }

    public function qualifications() {
        return $this->belongsToMany(Qualification::class, 'position_qualification');
    }

    public function specialqualifications() {
        return $this->belongsToMany(SpecialQualification::class, 'position_special_qualification');
    }

    public function newkarirs() {
        return $this->hasMany(Newkarir::class);
    }
}
