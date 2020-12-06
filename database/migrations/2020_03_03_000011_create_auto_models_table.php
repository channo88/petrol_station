<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('auto_type_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('name', 100)->nullable()->default('Model X');
            $table->json('fuel_types');
            $table->smallInteger('cv')->nullable();
            $table->decimal('urban', 5, 2)->nullable()->default(123.45);
            $table->decimal('mix', 5, 2)->nullable()->default(123.45);
            $table->decimal('long_distance', 5, 2)->nullable()->default(123.45);
            $table->tinyInteger('litres');
            $table->foreignId('deleted_by')->nullable()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('auto_models');
    }
}
