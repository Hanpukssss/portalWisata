<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tourist_places', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->longText('description')->nullable();
            $table->string('location')->nullable();
            $table->integer('ticket_price')->nullable();
            $table->string('open_time')->nullable();
            $table->string('close_time')->nullable();
            $table->string('image')->nullable(); // path file di /public/images/
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tourist_places');
    }
};
