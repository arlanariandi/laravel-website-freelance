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
        Schema::create('order', function (Blueprint $table) {
            $table->id();

            $table->integer('buyer_id')->nullable();
            $table->integer('freelancer_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->longText('file')->nullable();
            $table->longText('note')->nullable();
            $table->date('expired')->nullable();
            $table->integer('order_status_id')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
