<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Quotation extends Model
{
    use HasFactory;

    public function orders():HasMany {
        return $this->hasMany(Order::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function quotation_company():HasOne {
        return $this->hasOne(Quotation_company::class);
    }
    


}
