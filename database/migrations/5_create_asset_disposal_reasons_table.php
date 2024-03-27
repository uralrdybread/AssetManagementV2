<?php

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
        Schema::create('asset_disposal_reasons', function (Blueprint $table) {
            $table->id();
            $table->enum('reason', ['Obsolete', 'Damaged', 'Failure', 'End of Life', 'Other'])->default('Other');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asset_disposal_reasons');
    }
};
