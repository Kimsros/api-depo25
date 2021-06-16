<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTableOfPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_of_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('number_of_order')->nullable();
            $table->boolean('status')->default(1);
            $table->bigInteger('updated_by')->nullable();
            $table->timestamps();
        });
        DB::table('table_of_permissions')->insert([
            [
                'name'=>"Dashboard",
                'number_of_order'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>"User",
                'number_of_order'=>2,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>"Product",
                'number_of_order'=>3,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>"Product Category",
                'number_of_order'=>4,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>"Brand",
                'number_of_order'=>5,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>"Sale",
                'number_of_order'=>6,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>"Blog System",
                'number_of_order'=>7,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>"Pricing",
                'number_of_order'=>8,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>"Shop",
                'number_of_order'=>9,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>"Report",
                'number_of_order'=>10,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>"Setting",
                'number_of_order'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_of_permissions');
    }
}
