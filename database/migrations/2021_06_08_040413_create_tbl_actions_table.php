<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_actions', function (Blueprint $table) {
            $table->id();
            $table->string('table_name');
            $table->bigInteger('permission_type_id');
            $table->json('old_value')->nullable();
            $table->json('new_value')->nullable();
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
        Schema::dropIfExists('tbl_actions');
    }
}
