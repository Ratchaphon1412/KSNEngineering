<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function troubleshooting() {
        return $this->belongsTo(Troubleshooting::class);
    }
    public function service() {
        return $this->belongsTo(Service::class);
    }
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
