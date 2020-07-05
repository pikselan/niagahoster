<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

class AddBestAndDataToHostingCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hosting_categories', function (Blueprint $table) {
            //
            $table->boolean('best')->default(0)->after('name_category');
            $table->json('data')->nullable()->after('discount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hosting_categories', function (Blueprint $table) {
            //
            $table->dropColumn(['best',  'data']);
        });
    }
}
