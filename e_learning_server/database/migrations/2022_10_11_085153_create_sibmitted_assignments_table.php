<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sibmitted_assignments', function (Blueprint $table) {
            $table-> foreignId("assignment_id")->constrained()->references("id")->on('courses');
            $table-> foreignId("student_id")->constrained()->references("id")->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sibmitted_assignments');
    }
};
