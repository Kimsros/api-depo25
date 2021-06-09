<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('telephone')->nullable();
            $table->bigInteger('role_id')->nullable();
            $table->bigInteger('pricing_id')->nullable();
            $table->bigInteger('bank_id')->nullable();
            $table->rememberToken();
            $table->boolean('status')->default(1);
            $table->bigInteger('updated_by')->nullable();
            $table->timestamps();
        });

        DB::table('users')->insert(
            [
                'email'=>'administrator@khbmedia.asia',
                'password'=>Hash::make('ASDasd12345$$'),
                'first_name'=> 'my',
                'last_name'=> 'sey',
                'telephone'=> '09876543',
                'bank_id'=> '1',
                'role_id'=>1,
                'pricing_id'=>1,
                'status'=>1,
                'updated_by'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
