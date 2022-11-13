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
        Schema::create('apprenants_brief', function (Blueprint $table) {
            $table->unsignedBigInteger('id_brief');
            $table->unsignedBigInteger('id_apprenant');
            $table->foreign('id_brief')->references('id')->on('briefs');
            $table->foreign('id_apprenant')->references('id')->on('apprenants');
            $table->primary(['id_brief', 'id_apprenant']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenants_brief');
    }
};
