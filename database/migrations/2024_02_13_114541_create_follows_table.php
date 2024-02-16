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
        Schema::create('follows', function (Blueprint $table) {
          $table->id();
          // 🔽 user_id（誰が）カラムとfollowing_id（誰を）を追加する
          $table->foreignId('user_id')->constrained()->cascadeOnDelete();
          $table->foreignId('following_id')->constrained('users')->cascadeOnDelete();
          $table->unique(['user_id', 'following_id']);
          $table->timestamps();
        });
      }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follows');
    }
};
