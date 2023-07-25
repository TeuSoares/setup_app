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
        Schema::create('tasks', function (Blueprint $table) {
            $table->uuid("id_task")->primary();
            $table->foreignUuid("fk_id_user")->constrained("users", "id_user");
            $table->date("date");
            $table->string("title", 80);
            $table->text("description")->nullable();
            $table->string("status", 10)->default("aberta");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
