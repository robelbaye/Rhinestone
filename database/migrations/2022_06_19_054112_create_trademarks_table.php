<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrademarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trademarks', function (Blueprint $table) {
            $table->id();
            $table->string("CaseNo")->unique();
            $table->string("TrademarkName")->unique();
            $table->longText("Trademark");# a path to uploaded file
            $table->string("Country");
            $table->string("PrimaryAttorney");
            $table->string("SecondaryAttorney");
            $table->string("PrimaryParalegal");
            $table->string("SecondaryParalegal");
            $table->string("Agent");
            $table->string("TaxPaidBy");
            $table->date("ExpireDate")->nullable();
            $table->date("NextTaxDate");
            $table->string("TrademarkPriorityNo");
            $table->date("TrademarkPriorityDate");
            $table->string("TrademarkApplicationNo");
            $table->date("TrademarkApplicationDate");
            $table->string("TrademarkRegistrationNo");
            $table->date("TrademarkRegistrationDate");
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
        Schema::dropIfExists('trademarks');
    }
}
