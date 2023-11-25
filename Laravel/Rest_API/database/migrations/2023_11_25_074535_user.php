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
              Schema::create("user",function(Blueprint $table)
              {
                  $table->bigIncrements('id');
                  $table->string('name')->nullable;
                  $table->string('class')->nullable;
                  $table->string('gmail')->nullable;
                  $table->string('phone')->nullable;
                  $table->text('address')->nullable;
                  $table->string('country')->nullable;
                  $table->string('state')->nullable;
                  $table->timestamps(); 
    
                 });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //` 
        Schema::dropIfExists('user');
    }
};
