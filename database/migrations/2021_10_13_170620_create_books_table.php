<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->longText("description");
            //rysio stulpelis.
            //rysio stulpelis turi tureti tipa unsignedBigInteger
            //migracija su rysio stulpeliu turi buti velesne/veliausia
            $table->unsignedBigInteger("author_id");

            $table->foreign("author_id")->references("id")->on("authors");


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
        Schema::dropIfExists('books');
    }
}
