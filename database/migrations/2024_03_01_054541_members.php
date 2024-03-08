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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('barangay');
            $table->string('sitio');
            $table->string('precint#');
            $table->string('sitio_leader');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('nickname');
            $table->string('lastname');
            $table->string('age');
            $table->string('fb_account');
            $table->string('contact');
            $table->string('address');
            $table->string('occupation');
            $table->json('voted_on_2023');
            $table->json('organization');
            $table->json('beneficiary');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
