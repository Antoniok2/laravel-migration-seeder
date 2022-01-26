<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();

            $table ->string('album');
            $table ->date('creation_album') -> nullable();
            $table ->date('publication_album');
            $table ->bigInteger('views') -> unsigned() -> default(0);
            $table ->bigInteger('sells') -> unsigned() -> default(0);
            $table ->string('cover') -> nullable();


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
        Schema::dropIfExists('albums');
    }
}
