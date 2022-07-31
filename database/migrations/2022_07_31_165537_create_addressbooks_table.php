<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addressbooks', function (Blueprint $table) {
            $table->id();
            $table->string("InventorsID")->unique();
            $table->string("InventorsLastName");
            $table->string("InventorsGivenName");
            $table->string("InventorsPhone");
            $table->string("InventorsEmail");
            $table->date("Inventors_Date_of_Termination");
            $table->string("Inventors_Contractor");
            $table->string("Inventors_ContractorType");
            $table->date("Inventors_Date_of_Contract");
            $table->date("Inventors_Date_of_Commencement");
            $table->string("InventorsNationality");
            $table->string("Inventors_Home");
            $table->string("Inventors_Country");
            $table->string("Inventors_Zip_Code");
            $table->string("Inventors_Employer_Name");
            $table->string("Inventors_Employer_Address");
            $table->string("Inventors_Employer_Nationality");
            $table->string("Inventors_Email_of_Future_Contact");
            $table->string("Inventors_Notes");
            $table->string('applicant_ID')->unique();
            $table->string('applicant_name');
            $table->string('applicant_email');
            $table->string('applicant_phone');
            $table->string('applicant_address');
            $table->string('applicant_nationality');
            $table->string('applicant_country_of_registration');
            $table->string('applicant_date_of_incorporation');
            $table->string('applicant_note');
            $table->string('applicant_status');
            $table->string('Licensor_ID')->unique();
            $table->string('Licensor_Last_Name');
            $table->string('Licensor_Given_Name');
            $table->string('Licensor_Nationality');
            $table->string('Licensor_Phone_Number');
            $table->string('Licensor_Home_Address');
            $table->string('Licensor_Employer');
            $table->string('Licensor_Employer_Address');
            $table->date('Licensor_Date_of_Termination');
            $table->date('Licensor_Date_of_Commencement');
            $table->string('Licensor_Contractor');
            $table->string('Licensor_ContractorType');
            $table->date('Licensor_Date_of_Contract');
            $table->string('Licensor_Email_of_Future_Contact');
            $table->string('Licensor_Notes');
            $table->string('Licensee_ID')->unique();
            $table->string('Licensee_Name');
            $table->string('Licensee_Address');
            $table->string('Licensee_Email');
            $table->string('Licensee_Phone');
            $table->string('Licensee_Nationality');
            $table->string('Licensee_Country_of_Registration');
            $table->date('Licensee_Date_of_Incorporation');
            $table->string('Licensee_Notes');
            $table->string('agent_ID')->unique();
            $table->string('agent_name');
            $table->string('agent_address');
            $table->string('agent_nationality');
            $table->string('agent_contact_person');
            $table->string('agent_phone')->unique();
            $table->string('agent_email')->unique();
            $table->string('agent_fax_number');
            $table->string('agent_office_phone');
            $table->string('agent_future_email');
            $table->string('agent_status');
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
        Schema::dropIfExists('addressbooks');
    }
}
