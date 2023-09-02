<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Troubleshooting extends Model
{
    use HasFactory;

    public function troubleshooting_images():HasMany {
        return $this->hasMany(Troubleshooting_image::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
