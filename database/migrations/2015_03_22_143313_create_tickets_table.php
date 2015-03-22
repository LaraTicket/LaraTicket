<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')
                ->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            
            $table->integer('status_id')
                ->unsigned();
            $table->foreign('status_id')
                ->references('id')
                ->on('ticket_statuses');
            
            $table->integer('assignee_id')
                ->unsigned();
            $table->foreign('assignee_id')
                ->references('id')
                ->on('users');
            
            $table->text('content');

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
        Schema::drop('tickets');
    }

}
