

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpinionshasreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opinions_has_references', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reference_id');
            $table->integer('opinion_id');
            $table->unique(["reference_id", "opinion_id"]);
            $table->index(["opinion_id"]);
            $table->index(["reference_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opinions_has_references');
    }
}

