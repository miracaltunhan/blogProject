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
        Schema::create('news', function (Blueprint $table) {
            $table->id(); // Otomatik artan birincil anahtar
            $table->string('title'); // Haber başlığı
            $table->text('content'); // Haber içeriği
            $table->string('image')->nullable(); // Haber görseli (isteğe bağlı)
            $table->date('published_at')->nullable(); // Yayın tarihi (isteğe bağlı)
            $table->timestamps(); // Oluşturulma ve güncellenme tarihleri
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
