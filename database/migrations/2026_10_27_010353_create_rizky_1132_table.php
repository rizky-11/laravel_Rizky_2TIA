
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Rizky_1132', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('profesi');
            $table->text('tentang');
            $table->string('email')->nullable();
            $table->string('telepon')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Rizky_1132');
    }
};
