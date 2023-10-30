<?php

use App\Models\authors;
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
        Schema::create('contens', function (Blueprint $table) {
            $table->id();

            // $table->unsignedBigInteger('categories_id');
 
            // $table->foreign('categories_id')->references('id')->on('categories');


            $table->string('title',50);
            $table->string('authors');
            $table->text('excerpt');
            $table->text('content');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            
            
                
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contens');
    }
};




