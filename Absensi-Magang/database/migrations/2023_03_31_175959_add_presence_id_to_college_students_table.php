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
        Schema::table('college_students', function (Blueprint $table) {
            $table->unsignedBigInteger('presence_id')->required()->after('id');
            $table->foreign('presence_id')->references('id')->on('companies')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('college_students', function (Blueprint $table) {
            $table->foreign(['presence_id']);
            $table->dropColumn('presence_id');
        });
    }
};
