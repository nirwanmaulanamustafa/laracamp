<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModifWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modif_webs', function (Blueprint $table) {
            $table->id();
            $table->string('title',40);
            $table->string('logo_landscape')->default('logo_landscape.svg')->nullable();
            $table->string('logo_square')->default('logo_square.svg');
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
        Schema::dropIfExists('modif_webs');
    }
}
