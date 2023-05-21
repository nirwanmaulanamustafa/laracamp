<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('camp_id')->unsigned(); <<
            // $table->unsignedBigInteger('camp_id'); <<

            // cara cepat langsung foreign key tanpa harus banyak code seperti dibawah
            $table->foreignId('camp_id')->constrained();
            $table->string('name',60);
            $table->timestamps();

            // Create Foriegn Key Camp Benefits to Camps
            // $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
}
