<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->string('receiver');
            $table->string('sender');
            $table->string('subject');
            $table->text('body');
            $table->string('attachment_id');
            $table->boolean('read')->default(0);
            $table->boolean('starred')->default(0);
            $table->boolean('important')->default(0);
            $table->boolean('trash')->default(0);

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
        Schema::dropIfExists('emails');
    }
}
