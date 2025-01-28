<?php
  
  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;
  
  class CreateUsersTable extends Migration
  {
      public function up()
      {
          Schema::create('users', function (Blueprint $table) {
              $table->id(); // Kolom id, auto-increment
              $table->string('name'); // Kolom nama pengguna
              $table->string('email')->unique(); // Kolom email pengguna, harus unik
              $table->string('password'); // Kolom password pengguna
              $table->rememberToken(); // Kolom untuk "remember me" token
              $table->timestamps(); // Kolom created_at dan updated_at
          });
      }
  
      public function down()
      {
          Schema::dropIfExists('users'); // Menghapus tabel jika rollback
      }
  }