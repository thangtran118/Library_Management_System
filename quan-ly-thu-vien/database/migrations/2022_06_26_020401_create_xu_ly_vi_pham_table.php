<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXuLyViPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xu_ly_vi_pham', function (Blueprint $table) {
            $table->id();
            $table->integer('phieu_muon_id');
            $table->string('li_do_vi_pham');
            $table->string('hinh_thuc_xu_ly');
            $table->integer('da_xu_ly')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xu_ly_vi_pham');
    }
}
