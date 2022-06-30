<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patents', function (Blueprint $table) {
            $table->id();
            $table->string("FamilyNo")->unique();
            $table->string("InternalTitle")->unique();
            $table->string("FormalTitle")->unique();
            $table->string("Status");
            $table->string("Substatus");
            $table->string("TypeofFiling");
            $table->string("TypeofSubFiling");
            $table->string("Attorney1");
            $table->string("Attorney2");
            $table->string("Paralegal1");
            $table->string("Paralegal2");
            $table->string("isLicenced");
            $table->string("Licensor");
            $table->string("CostCenter");
            $table->string("CostCenterCode");
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
        Schema::dropIfExists('patents');
    }
}
