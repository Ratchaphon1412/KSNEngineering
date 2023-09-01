<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation_company extends Model
{
    use HasFactory;

    public function quotation() {
        return $this->belongsTo(Quotation::class);
    }
    public function company() {
        return $this->belongsTo(Company::class);
    }

}
