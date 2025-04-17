<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $fillable = ['pet_id', 'type', 'time','other_description'];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}

