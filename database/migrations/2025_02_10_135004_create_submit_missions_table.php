<?php

use App\States\Pending;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
  /**
  * Run the migrations.
  */
  public function up(): void
  {
    Schema::create('submitmissions', function (Blueprint $table) {
      $table->id();
      $table->decimal('amount', 20, 2);
      $table->string('state');
      $table->timestamps();
    });
  }

  /**
  * Reverse the migrations.
  */
  public function down(): void
  {
    Schema::dropIfExists('submitmissions');
  }
};

$table->string('state')->default(Pending::class);