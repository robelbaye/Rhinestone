<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressBook extends Model
{
    use HasFactory;
        protected $fillable = [
        //Inventors 
        "InventorsID",
        "InventorsLastName",
        "InventorsGivenName",
        "InventorsPhone",
        "InventorsEmail",
        "Inventors_Date_of_Termination",
        "Inventors_Contractor",
        "Inventors_ContractorType",
        "Inventors_Date_of_Contract",
        "Inventors_Date_of_Commencement",
        "InventorsNationality",
        "Inventors_Home",
        "Inventors_Country",
        "Inventors_Zip_Code",
        "Inventors_Employer_Name",
        "Inventors_Employer_Address",
        "Inventors_Employer_Nationality",
        "Inventors_Email_of_Future_Contact",
        "Inventors_Notes",
        // Applicant 
        "applicant_ID",
        "applicant_name",
        "applicant_email",
        "applicant_phone",
        "applicant_address",
        "applicant_nationality",
        "applicant_country_of_registration",
        "applicant_date_of_incorporation",
        "applicant_note",
        "applicant_status",
        // Licensor
        "Licensor_ID",
        "Licensor_Last_Name",
        "Licensor_Given_Name",
        "Licensor_Nationality",
        "Licensor_Phone_Number",
        "Licensor_Home_Address",
        "Licensor_Employer",
        "Licensor_Employer_Address",
        "Licensor_Date_of_Termination",
        "Licensor_Date_of_Commencement",
        "Licensor_Contractor",
        "Licensor_ContractorType",
        "Licensor_Date_of_Contract",
        "Licensor_Email_of_Future_Contact",
        "Licensor_Notes",
        // Licensee
        "Licensee_ID",
        "Licensee_Name",
        "Licensee_Address",
        "Licensee_Email",
        "Licensee_Phone",
        "Licensee_Nationality",
        "Licensee_Country_of_Registration",
        "Licensee_Date_of_Incorporation",
        "Licensee_Notes",
        // Agent
        "agent_ID",
        "agent_name",
        "agent_address",
        "agent_nationality",
        "agent_contact_person",
        "agent_phone",
        "agent_email",
        "agent_fax_number",
        "agent_office_phone",
        "agent_future_email",
        "agent_status"
    ];
}
