<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    public function service_images():HasMany {
        return $this->hasMany(Service_image::class);
    }


    public function orders():HasMany {
        return $this->hasMany(Order::class);
    }

}
