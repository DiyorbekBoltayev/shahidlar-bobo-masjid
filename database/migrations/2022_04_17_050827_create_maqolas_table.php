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
        Schema::create('maqolas', function (Blueprint $table) {
            $table->id();
            $table->string('mavzu')->nullable();
            $table->text('matn')->nullable();
            $table->string('rasm')->nullable();
            $table->string('autor')->nullable();
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
        Schema::dropIfExists('maqolas');
    }
};
