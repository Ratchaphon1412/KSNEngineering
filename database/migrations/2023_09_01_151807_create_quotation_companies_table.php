<?php

use App\Models\Company;
use App\Models\Quotation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quotation_companies', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Quotation::class);
            $table->foreignIdFor(Company::class);
            $table->string('purchase_order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotation_companies');
    }
};
