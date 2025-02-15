<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('club_name')->unique();
            $table->string('patron'); // Teacher in charge
            $table->decimal('registration_fee', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clubs');
    }
};
