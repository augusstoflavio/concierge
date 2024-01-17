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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string("email")->nullable(false);
            $table->string("url")->nullable(false);
            $table->string("method")->nullable(false);
            $table->string("data")->nullable(false);
            $table->uuid("system_id")->nullable(false);
            $table->foreign('system_id')->references('id')->on('systems');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
