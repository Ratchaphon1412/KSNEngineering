<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function service() {
        return $this->belongsTo(Service::class);
    }
    public function product() {
        return $this->belongsTo(Product::class);
    }
    public function quotation() {
        return $this->belongsTo(Quotation::class);
    }

}
