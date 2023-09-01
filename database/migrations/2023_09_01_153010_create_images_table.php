<?php

use App\Models\Product;
use App\Models\Service;
use App\Models\Troubleshooting;
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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->foreignIdFor(Service::class)->nullable();
            $table->foreignIdFor(Troubleshooting::class)->nullable();
            $table->foreignIdFor(Product::class)->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
