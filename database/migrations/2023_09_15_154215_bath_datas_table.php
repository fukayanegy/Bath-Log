<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * お風呂場の情報を管理するためのデータベース
     */
    public function up()
    {
        Schema::create('bath_datas', function (Blueprint $table) {
            $table->id();
            $table->string('store_name');
            $table->string('nearest_station')->nullable();
            $table->string('store_type')->nullable();
            $table->integer('regular_closing_day');
            $table->integer('min_charge')->nullable();
            $table->integer('max_charge')->nullable();
            $table->integer('phone_number')->nullable();
            $table->string('address');
            $table->time('business_hours')->nullable();
            $table->integer('payment_method')->nullable();
            $table->integer('max_users')->nullable();
            $table->string('home_page')->nullable();
            $table->integer('post_user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('bath_datas');
    }
};
