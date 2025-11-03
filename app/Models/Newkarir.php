<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newkarir extends Model
{
    use HasFactory;

    protected $fillable = [
        'cv',
        'name',
        'email',
        'phone',
        'address',
        'currentCompany',
        'linkedin',
        'portfolio',
        'position_id',
    ];

    public function position() {
        return $this->belongsTo(Position::class);
    }
}
