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
        Schema::create('discount', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('name', 100)->unique();
            $table->text("desc");
            $table->decimal("discount_percent");
            $table->boolean("is_active");
            $table->timestamps("created_at");
            $table->timestamps("updated_at");
            $table->timestamps("deleted_at");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
