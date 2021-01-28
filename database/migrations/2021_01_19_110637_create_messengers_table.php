<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messengers', function (Blueprint $table) {
            $table->id();
            $table->string('user_from');
            $table->string('user_to');
            $table->string('content');
            $table->enum('belong',[\App\Models\Messenger::BELONG_USER,\App\Models\Messenger::BELONG_ADMIN]);
            $table->enum('viewed',[\App\Models\Messenger::NOT_SEEN,\App\Models\Messenger::SEEN]);
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
        Schema::dropIfExists('messengers');
    }
}
