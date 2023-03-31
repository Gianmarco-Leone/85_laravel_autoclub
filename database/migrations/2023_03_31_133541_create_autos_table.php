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
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->string('marca', 20);
            $table->string('modello', 30);
            $table->string('cilindrata', 10);
            $table->string('telaio', 17)->unique();
            $table->string('targa', 10)->nullable();
            $table->enum('stato', ['nuovo', 'usato']);
            $table->string('alimentazione', 20);
            $table->mediumInteger('prezzo')->unsigned();
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
        Schema::dropIfExists('autos');
    }
};