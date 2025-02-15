<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('membership_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->foreignId('club_id')->constrained('clubs')->onDelete('cascade');
            $table->enum('action', ['Joined', 'Left']);
            $table->date('log_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('membership_logs');
    }
};
