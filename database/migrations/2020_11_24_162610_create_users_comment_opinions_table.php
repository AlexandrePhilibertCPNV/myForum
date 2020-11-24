

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserscommentopinionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_comment_opinions', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('user_id');
            $table->integer('opinion_id');
            $table->string('comment', 5000);
            $table->integer('points')->default('0');
            $table->index(["opinion_id"]);
            $table->index(["user_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_comment_opinions');
    }
}

