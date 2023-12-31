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
        Schema::create('usertable', function (Blueprint $table) {
            $table->bigIncrements('id');  
            $table->string('first_name');  
            $table->string('last_name');  
            $table->string('gender');  
            $table->string('qualifications');  
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usertable');
    }
};
