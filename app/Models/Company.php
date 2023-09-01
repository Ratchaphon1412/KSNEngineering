<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    public function quotations():HasMany {
        return $this->hasMany(Quotation::class);
    }

    public function quotation_companies():HasMany {
        return $this->hasMany(Quotation_company::class);
    }

    public function troubleshootings():HasMany {
        return $this->hasMany(Troubleshooting::class);
    }
}
