<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('iso_code', 2)->nullable(false);
            $table->string('iso_code_3', 3)->nullable(false);
            $table->string('name', 50)->nullable(false);
            $table->string('capital', 100)->nullable(false);
            $table->string('country_numeric_prefix', 2)->nullable(false);
            $table->string('lang_code', 2)->nullable(false);
            $table->string('lang_name', 100)->nullable(false);
            $table->string('currency_code', 3)->nullable(false);
            $table->string('currency_name', 25)->nullable(false);
            $table->string('currency_symbol', 25)->nullable(false);
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
        Schema::dropIfExists('countries');
    }
}
