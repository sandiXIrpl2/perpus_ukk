<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // In database/migrations/xxxx_xx_xx_create_ddcs_table.php

public function up()
{
    Schema::create('ddcs', function (Blueprint $table) {
        $table->id();
        $table->string('kode');
        $table->string('nama');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('ddcs');
}

};
