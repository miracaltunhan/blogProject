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

            $table->id();


            $table->string('title');
            $table->text('content');


            $table->string('image')->nullable();


            $table->foreignId('category_id')
                ->constrained('categories')
                ->onDelete('set null'); // Kategori silinirse null yap


            $table->unsignedBigInteger('author_id')->nullable();
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
