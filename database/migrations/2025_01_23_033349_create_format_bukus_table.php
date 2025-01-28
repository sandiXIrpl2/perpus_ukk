<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('format_bukus', function (Blueprint $table) {
        $table->id(); // This will create an auto-incrementing primary key field
        $table->string('nama'); // Add any other columns for 'nama' or 'deskripsi'
        $table->text('deskripsi'); // Example column for description
        $table->timestamps(); // Adds created_at and updated_at columns
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('format_bukus');
    }
};
