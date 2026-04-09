<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */


    public function up()
    {
        Schema::table('seo_pages', function (Blueprint $table) {
            $table->boolean('status')->default(1);
            $table->softDeletes(); // adds deleted_at
        });
    }

    public function down()
    {
        Schema::table('seo_pages', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropSoftDeletes();
        });
    }
};
