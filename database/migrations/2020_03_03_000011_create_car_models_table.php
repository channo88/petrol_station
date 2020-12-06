<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->string('name', 100)->nullable()->default('Model X');
            $table->json('fuel_types');
            $table->smallInteger('cv')->nullable();
            $table->decimal('urban', 5, 2)->nullable()->default(123.45);
            $table->decimal('mix', 5, 2)->nullable()->default(123.45);
            $table->decimal('long_distance', 5, 2)->nullable()->default(123.45);
            $table->tinyInteger('litres');
            $table->foreingId('deleted_by');
            $table->foreign('deleted_by')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('car_models');
    }
}
