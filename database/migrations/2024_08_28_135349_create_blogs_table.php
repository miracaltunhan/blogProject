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
        Schema::create('blogs', function (Blueprint $table) {
            // Blog tablosuna id kolonunu ekliyoruz
            $table->id();

            // Blog başlığı ve içeriği için gerekli kolonları oluşturuyoruz
            $table->string('title');
            $table->text('content');

            // Blog görseli için opsiyonel bir kolon (nullable)
            $table->string('image')->nullable();

            // 'categories' tablosuna dış anahtar referansı ekliyoruz
            $table->foreignId('category_id')->nullable()
                ->constrained('categories')
                ->onDelete('set null'); // Kategori silinirse null yap

            $table->unsignedBigInteger('author_id')->nullable(); // author_id alanı nullable
            $table->foreign('author_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null'); // Yazar silinirse null yap

            // Zaman damgalarını ekliyoruz (created_at, updated_at)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {

        Schema::dropIfExists('blogs');
    }
};
