<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('event', function (Blueprint $table) {
          $table->increments('id');
          $table->string('event_name', 90);
          $table->string('event_details', 130);
          $table->string('event_date', 90);
          $table->string('event_time', 90);
          $table->string('event_location', 90);
          $table->string('event_distance', 90);
          $table->string('contact_info_social_facebook', 90);
          $table->string('contact_info_social_twitter', 90);
          $table->string('event_thumbnail', 120);
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
        Schema::dropIfExists('event');
    }
}
