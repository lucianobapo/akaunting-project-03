<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInventoryItemGroupOptionValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_item_group_option_values', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->integer('item_group_id');
            $table->integer('item_group_option_id');
            $table->integer('option_id');
            $table->integer('option_value_id');

            $table->timestamps();
            $table->softDeletes();

            $table->index('company_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inventory_item_group_option_values');
    }
}
