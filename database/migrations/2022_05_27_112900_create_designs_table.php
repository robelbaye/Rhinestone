<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designs', function (Blueprint $table) {
            $table->id();
            $table->string("CaseNo")->unique();
            $table->string("InternalTitle")->unique();
            $table->string("FormalTitle")->unique();
            $table->string("TypeofFiling");
            $table->string("SubTypeofFiling");
            $table->string("Status");
            $table->string("SubStatus");
            $table->string("Country");
            $table->string("PrimaryAttorney");
            $table->string("SecondaryAttorney");
            $table->string("PrimaryParalegal");
            $table->string("SecondaryParalegal");
            $table->string("Agent");
            $table->string("AgentRef");
            $table->string("Agent2");
            $table->string("Agent2Ref");
            $table->string("CostCenter");
            $table->string("CostCenterCode");
            $table->string("Licence");
            $table->string("NoofDrawing");
            $table->string("NoofView");
            $table->date("NextTaxDate");
            $table->string("NextAnnualyNo");
            $table->string("TaxPaidBy");
            $table->date("ExpireDate");
            $table->string("DesignPriorityNo");
            $table->string("PCountry");
            $table->date("PDate");
            $table->string("DesignAppNo");
            $table->string("ACountry");
            $table->date("ADate");
            $table->string("RegistrationNo");
            $table->string("RCountry");
            $table->date("RDate");
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
        Schema::dropIfExists('designs');
    }
}
