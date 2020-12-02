<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeoplesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('peoples', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->integer('age');
      $table->string('civil_state');
      $table->string('CPF');
      $table->string('city');
      $table->string('state');
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
    Schema::table('peoples', function (Blueprint $table) {
      //
    });
  }
}
