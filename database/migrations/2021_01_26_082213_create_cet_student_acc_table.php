<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCetStudentAccTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cet_student_acc', function (Blueprint $table) {
            $table->id();
            $table->string('tendangnhap');
            $table->string('Hoten');
            $table->string('Email');
            $table->enum('Trangthai',[\App\Models\CetStudentAcc::TT_CHUA_ACTIVE,\App\Models\CetStudentAcc::TT_DA_ACTIVE]);
            $table->string('password');
            $table->string('verify');
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
        Schema::dropIfExists('cet_student_acc');
    }
}
