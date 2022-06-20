<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain', function (Blueprint $table) {
            $table->id();
            $table->string('domainname');
            $table->string('ns1');
            $table->string('srv1')->nullable();
            $table->string('ns2');
            $table->string('srv2')->nullable();
            $table->string('ns3')->nullable();
            $table->string('srv3')->nullable();
            $table->string('ns4')->nullable();
            $table->string('srv4')->nullable();
            $table->string('ns5')->nullable();
            $table->string('srv5')->nullable();
            $table->string('ns6')->nullable();
            $table->string('srv6')->nullable();
            $table->string('ns7')->nullable();
            $table->string('srv7')->nullable();
            $table->string('ns8')->nullable();
            $table->string('srv8')->nullable();
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
        Schema::dropIfExists('domain');
    }
};
