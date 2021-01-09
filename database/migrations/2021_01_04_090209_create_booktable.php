<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooktable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booktable', function (Blueprint $table) {
            $table->bigincrements('b_id');
            $table->string('b_name',255)->require();
            $table->string('b_author',255)->default('N/A');
            $table->longText('b_desc')->default('No Available Description');
            $table->char('b_type',1)->require();
            $table->string('b_genre',255)->require();
            $table->longtext('b_amazon')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booktable');
    }
}
