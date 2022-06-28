<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            
            $table->string("type")->nullable();
            $table->text("name")->nullable();
            $table->text("title_uz")->nullable();
            $table->text("title_ru")->nullable();
            $table->text("title_en")->nullable();
            $table->bigInteger("price")->nullable();
            $table->bigInteger("articul")->nullable();
            $table->bigInteger("qr")->nullable();
            $table->string("size_toy")->nullable();
            $table->string("case_uz")->nullable();
            $table->string("case_ru")->nullable();
            $table->string("case_en")->nullable();
            $table->string("size_case")->nullable();
            $table->string("casegroup_uz")->nullable();
            $table->string("casegroup_ru")->nullable();
            $table->string("casegroup_en")->nullable();
            $table->string("weight")->nullable();
            $table->integer("count")->nullable();
            $table->json("img")->nullable();
            $table->string("file")->nullable();
            
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
