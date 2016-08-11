<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
             $table->string("name",60)->unique();
            $table->string("tetle",60);
            $table->string("detail");
            $table->integer("price");
            $table->unsignedInteger("Categories ID");
            $table->unsignedInteger("Brands ID");
            $table->string('created_at_ip');
            $table->string('updated_at_ip');
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
        Schema::drop('products');
    }
}
