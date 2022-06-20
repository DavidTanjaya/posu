<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')->constrained()->onUpdate('cascade')->onDelete('cascade');


            $table->foreignId('umkm_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            $table->string('name');
            $table->text('path_photo')->nullable();
            $table->integer('capital_price');
            $table->integer('selling_price');

            $table->tinyInteger('discount')->default(0);
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
        Schema::dropIfExists('menus');
    }
}
