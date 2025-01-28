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
    Schema::table('perpustakaans', function (Blueprint $table) {
        $table->string('new_column')->nullable(); // Menambahkan kolom baru
    });
}

public function down()
{
    Schema::table('perpustakaans', function (Blueprint $table) {
        $table->dropColumn('new_column'); // Menghapus kolom baru saat rollback
    });
}
};
