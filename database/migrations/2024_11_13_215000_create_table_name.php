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
        Schema::create('variant', function (Blueprint $table) {
            $table->id();
            $table->string("color", 50)->nullable(false);
            $table->integer("size")->nullable(false);
            $table->bigInteger("price")->nullable(false);
            $table->integer("weight")->nullable(false);
            $table->string("fileName", "200")->nullable(false);
            $table->integer("quantity")->nullable(false);
            $table->text("url");
            $table->bigInteger('article_id')->unsigned()->index();
            $table->foreign('article_id')->references('id')->on('article')->onDelete('cascade');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variant');
    }
};
