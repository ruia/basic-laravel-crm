<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('ref')->unique(); //TODO: maybe change this to become the id of the table and add a new column part-number?
            $table->string('name');
            $table->string('bar_code')->nullable()->unique();
            $table->decimal('price_without_vat', 9,3)->nullable();
            $table->bigInteger('vat_id')->unsigned()->default(1);
            $table->boolean('inactive')->default(false); //FIXME: improve inactive on the rest of the model?
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('vat_id')->references('id')->on('vats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
