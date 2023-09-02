<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Troubleshooting_image extends Model
{
    use HasFactory;
    public function troubleshooting() {
        return $this->belongsTo(Troubleshooting::class);
    }
}
