<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->text('logo_company');
            $table->text('description');
            $table->string('home_no');
            $table->string('streat_no');
            $table->string('village');
            $table->string('district');
            $table->string('commune');
            $table->string('province');
            $table->string('phone_one');
            $table->string('phone_two');
            $table->string('email');
            $table->string('facebook');
            $table->string('website');
            $table->boolean('status')->default(1);
            $table->bigInteger('updated_by');
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
        Schema::dropIfExists('shops');
    }
}
