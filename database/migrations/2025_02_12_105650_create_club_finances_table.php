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
        Schema::create('club_finances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('club_id')->constrained()->onDelete('cascade');
            $table->decimal('total_revenue', 10, 2);
            $table->decimal('activities_fund', 10, 2);
            $table->decimal('annual_party_fund', 10, 2);
            $table->decimal('savings', 10, 2);
            $table->decimal('school_contribution', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('club_finances');
    }
};
