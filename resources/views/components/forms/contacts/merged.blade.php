@props(['countries'])

<div class="accordion accordion-bordered" id="accordion-4" role="tablist">
    <div class="card">
        <div class="card-header mb-2" role="tab" id="heading-10">
            <button form="addressbook-form" type="submit" id="create-btn" class=" collapse hidden float-right btn btn-success mr-5 position-relative" style="min-width:8%;z-index: 100">
                Save
            </button>
            <h6 class="font-weight-bold mb-0">
                <a data-bs-toggle="collapse" href="#collapse-10,#create-btn" aria-expanded="true" aria-controls="collapse-10">
                    <span class="btn btn-success">Add Address Book(s) </span>
                </a>
            </h6>
        </div>
        <div id="collapse-10" class="collapse hidden" role="tabpanel" aria-labelledby="heading-10" data-bs-parent="#accordion-4">
            <div class="card pt-3">
                <form class="row card-body" id="addressbook-form" action="{{ url('addressbook') }}" method="POST">
                    <!-- Invention Starts Hear -->
                    <fieldset>
                        <legend>Invention</legend>
                        <div class="card-body row">
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Inventor ID:</label>
                                    <div class="col-sm-8">
                                        <input name="InventorsID" type="InventorsID" class="form-control @error('InventorsID') is-invalid @enderror" placeholder="Inventor ID" value="{{ old('InventorsID') ?? ($addressbook->InventorsID ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('InventorsID')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Title:</label>
                                    <div class="col-sm-8">
                                        <select name="title" class="form-control @error('title') is-invalid @enderror text-black" required>
                                            <option value="">Select title</option>
                                            <option value="Mr.">Mr.</option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Miss.">Miss.</option>
                                            <option value="Prof.">Prof.</option>
                                            <option value="Dr.">Dr.</option>
                                        </select>
                                        @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Surname:</label>
                                    <div class="col-sm-8">
                                        <input name="InventorsLastName" id="InvestorLastName" type="InventorsLastName" class="form-control" placeholder=" Surname" value="{{ old('InventorsLastName') ?? ($addressbook->InventorsLastName ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="InvestorLastNameList"></div>
                                        @error('InventorsLastName')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Given name(s):</label>
                                    <div class="col-sm-8">
                                        <input name="InventorsGivenName" id="InvestorGivenName" type="InventorsGivenName" class="form-control" placeholder=" Given name" value="{{ old('InventorsGivenName') ?? ($addressbook->InventorsGivenName ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="InvestorGivenNameList"></div>
                                        @error('InventorsGivenName')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Inventor Phone:
                                    </label>
                                    <div class="col-sm-8">
                                        <input name="InventorsPhone" id="phone" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" class="form-control" value="{{ old('InventorsPhone') ?? ($addressbook->InventorsPhone ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="InvestorPhoneList"></div>
                                        @error('InventorsPhone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Inventor e-Mail:
                                    </label>
                                    <div class="col-sm-8">
                                        <input name="InventorsEmail" id="InvestorEmail" type="email" class="form-control" placeholder=" Inventor Email" value="{{ old('InvestorEmail') ?? ($addressbook->InventorsEmail ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="InvestorEmailList"></div>
                                        @error('InventorsEmail')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Contract:</label>
                                    <div class="col-sm-8">
                                        <input name="Inventors_Contractor" id="Contractor" type="text" class="form-control @error('Inventors_Contractor') is-invalid @enderror" placeholder=" Inventor's Contract" value="{{ old('Inventors_Contractor') ?? ($addressbook->Inventors_Contractor ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="ContractorList"></div>
                                        @error('Inventors_Contractor')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Type of Contract:</label>
                                    <div class="col-sm-8">
                                        <input name="Inventors_ContractorType" id="ContractorType" type="text" class="form-control @error('Inventors_ContractorType') is-invalid @enderror" placeholder=" Inventor's Contract Type" value="{{ old('Inventors_ContractorType') ?? ($addressbook->Inventors_ContractorType ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="ContractorTypeList"></div>
                                        @error('Inventors_ContractorType')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Date of Termination:</label>
                                    <div class="col-sm-8">
                                        <input name="Inventors_Date_of_Termination" type="date" class="form-control @error('Inventors_Date_of_Termination') is-invalid @enderror" placeholder="" value="{{ old('Inventors_Date_of_Termination') ?? ((isset($addressbook->Inventors_Date_of_Termination) ? $addressbook->Inventors_Date_of_Termination->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Inventors_Date_of_Termination')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Notes:</label>
                                    <div class="col-sm-8">
                                        <textarea cols="600" rows="3" class="form-control" id="Notes" placeholder="Notes" name="Inventors_Notes" placeholder="Enter value here">{{ $addressbook->Inventors_Notes ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Nationality:</label>
                                    <div class="col-sm-8">
                                        <select name="InventorsNationality" class="form-control @error('InventorsNationality') is-invalid @enderror text-black" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" {{ old('country') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Home:</label>
                                    <div class="col-sm-8">
                                        <input name="Inventors_Home" id="Home" type="text" class="form-control @error('Inventors_Home') is-invalid @enderror" placeholder=" Home" value="{{ old('Inventors_Home') ?? ($addressbook->Inventors_Home ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="HomeList"></div>
                                        @error('Inventors_Home')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Country:</label>
                                    <div class="col-sm-8">
                                        <select name="Inventors_Country" class="form-control @error('Inventors_Country') is-invalid @enderror text-black" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" {{ old('country') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('Inventors_Country')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Zip/Postal Code:</label>
                                    <div class="col-sm-8">
                                        <input name="Inventors_Zip_Code" id="Zip_Code" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" class="form-control @error('Inventors_Zip_Code') is-invalid @enderror text-black" placeholder=" Zip/Postal Code" value="{{ old('Inventors_Zip_Code') ?? ($addressbook->Inventors_Zip_Code ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="Zip_CodeList"></div>
                                        @error('Inventors_Zip_Code')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Employer Name:</label>
                                    <div class="col-sm-8">
                                        <input name="Inventors_Employer_Name" id="Employer_Name" type="text" class="form-control @error('Inventors_Employer_Name') is-invalid @enderror" placeholder=" Inventor's Employer Name" value="{{ old('Inventors_Employer_Name') ?? ($addressbook->Inventors_Employer_Name ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="Employer_NameList"></div>
                                        @error('Inventors_Employer_Name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Date of Contact:</label>
                                    <div class="col-sm-8">
                                        <input name="Inventors_Date_of_Contract" type="date" class="form-control @error('Inventors_Date_of_Contract') is-invalid @enderror" placeholder=" " value="{{ old('Inventors_Date_of_Contract') ?? ((isset($addressbook->Inventors_Date_of_Contract) ? $addressbook->Inventors_Date_of_Contract->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Inventors_Date_of_Contract')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Employer Address:</label>
                                    <div class="col-sm-8">
                                        <input name="Inventors_Employer_Address" id="Employer_Address" type="text" class="form-control @error('Inventors_Employer_Address') is-invalid @enderror" placeholder=" Inventor's Employer Address" value="{{ old('Inventors_Employer_Address') ?? ($addressbook->Inventors_Employer_Address ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="Employer_AddressList"></div>
                                        @error('Inventors_Employer_Address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Employer Nationality:</label>
                                    <div class="col-sm-8">
                                        <select name="Inventors_Employer_Nationality" class="form-control @error('Inventors_Employer_Nationality') is-invalid @enderror text-black" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" {{ old('country') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('Inventors_Employer_Nationality')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Email of Future Contact:</label>
                                    <div class="col-sm-8">
                                        <input name="Inventors_Email_of_Future_Contact" id="invEmail_of_Future_Contact" type="text" class="form-control @error('Inventors_Email_of_Future_Contact') is-invalid @enderror" placeholder=" Inventor's Email of Future Contact" value="{{ old('Inventors_Email_of_Future_Contact') ?? ($addressbook->Inventors_Email_of_Future_Contact ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="invEmail_of_Future_ContactList"></div>
                                        @error('Inventors_Email_of_Future_Contact')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Commencement Date:</label>
                                    <div class="col-sm-8">
                                        <input name="Inventors_Date_of_Commencement" type="date" class="form-control @error('Inventors_Date_of_Commencement') is-invalid @enderror" placeholder=" " value="{{ old('Inventors_Date_of_Commencement') ?? ((isset($addressbook->Inventors_Date_of_Commencement) ? $addressbook->Inventors_Date_of_Commencement->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Inventors_Date_of_Commencement')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <!-- Invention Ends Hear -->

                    <!-- Applicant Starts Hear -->
                    <fieldset>
                        <legend>Applicant</legend>
                        <div class="card-body row">
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Applicant ID: </label>
                                    <div class="col-sm-8">
                                        <input name="applicant_ID" id="applicant_ID" type="applicant_ID" class="form-control" placeholder=" Applicant ID" value="{{ old('applicant_ID') ?? ($addressbook->applicant_ID ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="applicant_IDList"></div>
                                        @error('applicant_ID')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Applicant Name </label>
                                    <div class="col-sm-8">
                                        <input name="applicant_name" id="applicant_name" type="applicant_name" class="form-control" placeholder=" Applicant Name" value="{{ old('applicant_name') ?? ($addressbook->applicant_name ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="applicant_nameList"></div>
                                        @error('applicant_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Applicant's Address</label>
                                    <div class="col-sm-8">
                                        <input name="applicant_address" id="applicant_address" type="text" class="form-control @error('applicant_address') is-invalid @enderror" placeholder=" Applicant's Address" value="{{ old('applicant_address') ?? ($addressbook->applicant_address ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="applicant_addressList"></div>
                                        @error('applicant_address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Applicant's Phone</label>
                                    <div class="col-sm-8">
                                        <input name="applicant_phone" id="applicant_phone" type="number" class="form-control @error('applicant_phone') is-invalid @enderror" placeholder=" Applicant's Address" value="{{ old('applicant_phone') ?? ($addressbook->applicant_phone ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="applicant_phoneList"></div>
                                        @error('applicant_phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Nationality</label>
                                    <div class="col-sm-8">
                                        <select name="applicant_nationality" class="form-control @error('applicant_nationality') is-invalid @enderror text-black" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" {{ old('applicant_nationality') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('applicant_nationality')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Country of Registration</label>
                                    <div class="col-sm-8">
                                        <select name="applicant_country_of_registration" class="form-control @error('applicant_country_of_registration') is-invalid @enderror text-black" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" {{ old('applicant_country_of_registration') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('applicant_country_of_registration')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Date of Incorporation</label>
                                    <div class="col-sm-8">
                                        <input name="applicant_date_of_incorporation" type="date" class="form-control @error('applicant_date_of_incorporation') is-invalid @enderror" placeholder=" " value="{{ old('applicant_date_of_incorporation') ?? ((isset($addressbook->applicant_date_of_incorporation) ? $addressbook->applicant_date_of_incorporation->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('applicant_date_of_incorporation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Notes </label>
                                    <div class="col-sm-8">
                                        <textarea cols="600" rows="3" class="form-control" id="note" placeholder="notes" name="applicant_note" placeholder="Enter value here">{{ $addressbook->applicant_note ?? '' }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Applicant's e-Mail</label>
                                    <div class="col-sm-8">
                                        <input name="applicant_email" id="applicant_email" type="email" class="form-control @error('applicant_email') is-invalid @enderror" placeholder=" Applicant's Address" value="{{ old('applicant_email') ?? ($sow->applicant_email ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="applicant_emailList"></div>
                                        @error('applicant_email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Applicant Status:
                                    </label>
                                    <div class="col-sm-8">
                                        <select name="applicant_status" class="form-control @error('applicant_status') is-invalid @enderror" required>
                                            <option value="">Select option</option>
                                            <option value="Active">Active</option>
                                            <option value="Deactive">Deactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <!-- Applicant Ends Hear -->

                    <!-- Licensee Starts Hear -->
                    <fieldset>
                        <legend>Licensee</legend>
                        <div class="card-body row">
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Licensee ID:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensee_ID" id="Licensee_ID" type="Licensee_ID" class="form-control" placeholder=" Licensee ID" value="{{ old('Licensee_ID') ?? ( $addressbook->Licensee_ID ?? ( app()->environment('local') ? '' : '' ) ) }}" required>
                                        <div id="Licensee_IDList"></div>
                                        @error('Licensee_ID')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Licensee Name:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensee_Name" id="Licensee_Name" type="Licensee_Name" class="form-control" placeholder=" Licensee Name" value="{{ old('Licensee_Name') ?? ( $addressbook->Licensee_Name ?? ( app()->environment('local') ? '' : '' ) ) }}" required>
                                        <div id="Licensee_NameList"></div>
                                        @error('Licensee_Name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Licensee's Address:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensee_Address" id="Licensee_Address" type="text" class="form-control @error('Licensee_Address') is-invalid @enderror" placeholder=" Licensee's Address" value="{{ old('Licensee_Address') ?? ($addressbook->Licensee_Address ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="Licensee_AddressList"></div>
                                        @error('Licensee_Address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Licensee's e-Mail:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensee_Email" id="Licensee_Email" type="email" class="form-control @error('Licensee_Email') is-invalid @enderror" placeholder=" Licensee's e-Mail" value="{{ old('Licensee_Email') ?? ($addressbook->Licensee_Email ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="Licensee_EmailList"></div>
                                        @error('Licensee_Email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Phone Number:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensee_Phone" id="licphone" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" class="form-control" value="{{ old('Licensee_Phone') ?? ($addressbook->Licensee_Phone ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Licensee_Phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Nationality:</label>
                                    <div class="col-sm-8">
                                        <select name="Licensee_Nationality" class="form-control @error('Licensee_Nationality') is-invalid @enderror text-black" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" {{ old('country') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('Licensee_Nationality')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Country of Registration:</label>
                                    <div class="col-sm-8">
                                        <select name="Licensee_Country_of_Registration" class="form-control @error('Licensee_Country_of_Registration') is-invalid @enderror text-black" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" {{ old('Licensee_Country_of_Registration') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('Licensee_Country_of_Registration')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Date of Incorporation:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensee_Date_of_Incorporation" type="date" class="form-control @error('Licensee_Date_of_Incorporation') is-invalid @enderror" placeholder="" value="{{ old('Licensee_Date_of_Incorporation') ?? ((isset($addressbook->Licensee_Date_of_Incorporation) ? $addressbook->Licensee_Date_of_Incorporation->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Licensee_Date_of_Incorporation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Notes:</label>
                                    <div class="col-sm-8">
                                        <textarea cols="600" rows="3" class="form-control" id="Notes" placeholder="Notes" name="Licensee_Notes" placeholder="Enter value here">{{ $addressbook->Licensee_Notes ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <!-- Licensee Ends Hear -->

                    <!-- Licensor Starts Hear -->
                    <fieldset>
                        <legend>Licensor</legend>
                        <div class="card-body row">
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Licensor ID:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensor_ID" id="Licensor_ID" type="Licensor_ID" class="form-control" placeholder=" Licensor ID" value="{{ old('Licensor_ID') ?? ($addressbook->Licensor_ID ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="Licensor_IDList"></div>
                                        @error('Licensor_ID')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Surname:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensor_Last_Name" id="Last_Name" type="Licensor_Last_Name" class="form-control" placeholder=" Surname" value="{{ old('Licensor_Last_Name') ?? ($addressbook->Licensor_Last_Name ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="Last_NameList"></div>
                                        @error('Licensor_Last_Name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Given Name:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensor_Given_Name" id="Given_Name" type="Licensor_Given_Name" class="form-control" placeholder=" Given Name" value="{{ old('Licensor_Given_Name') ?? ($addressbook->Licensor_Given_Name ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="Given_NameList"></div>
                                        @error('Licensor_Given_Name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Phone Number:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensor_Phone_Number" id="liphone" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" class="form-control" value="{{ old('Licensor_Phone_Number') ?? ($addressbook->Licensor_Phone_Number ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Licensor_Phone_Number')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Nationality:</label>
                                    <div class="col-sm-8">
                                        <select name="Licensor_Nationality" class="form-control @error('Licensor_Nationality') is-invalid @enderror text-black" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" {{ old('country') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('Licensor_Nationality')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Home Address:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensor_Home_Address" id="Home_Address" type="text" class="form-control @error('Licensor_Home_Address') is-invalid @enderror" placeholder=" Home Address" value="{{ old('Licensor_Home_Address') ?? ($addressbook->Licensor_Home_Address ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="Home_AddressList"></div>
                                        @error('Licensor_Home_Address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Employer Name:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensor_Employer" id="Employer" type="text" class="form-control @error('Licensor_Employer') is-invalid @enderror" placeholder=" Licensors Employer Name" value="{{ old('Licensor_Employer') ?? ($addressbook->Licensor_Employer ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="EmployerList"></div>
                                        @error('Licensor_Employer')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Employer Address:</label>
                                    <div class="col-sm-8">
                                        <select name="Licensor_Employer_Address" class="form-control @error('Licensor_Employer_Address') is-invalid @enderror" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->id }}" {{ old('country') == $country->id ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('Licensor_Employer_Address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Date of Termination:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensor_Date_of_Termination" type="date" class="form-control @error('Licensor_Date_of_Termination') is-invalid @enderror" placeholder="" value="{{ old('Licensor_Date_of_Termination') ?? ((isset($addressbook->Licensor_Date_of_Termination) ? $addressbook->Licensor_Date_of_Termination->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Licensor_Date_of_Termination')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Date of Commencement:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensor_Date_of_Commencement" type="date" class="form-control @error('Licensor_Date_of_Commencement') is-invalid @enderror" placeholder="" value="{{ old('Licensor_Date_of_Commencement') ?? ((isset($addressbook->Licensor_Date_of_Commencement) ? $addressbook->Licensor_Date_of_Commencement->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Licensor_Date_of_Commencement')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Contractor:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensor_Contractor" id="Contractor" type="text" class="form-control @error('Licensor_Contractor') is-invalid @enderror" placeholder=" Licensor's Contractor" value="{{ old('Licensor_Contractor') ?? ($addressbook->Licensor_Contractor ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="ContractorList"></div>
                                        @error('Licensor_Contractor')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Contractor Type:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensor_ContractorType" id="ContractorType" type="text" class="form-control @error('Licensor_ContractorType') is-invalid @enderror" placeholder=" Licensor's Contractor Type" value="{{ old('Licensor_ContractorType') ?? ($addressbook->Licensor_ContractorType ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="ContractorTypeList"></div>
                                        @error('Licensor_ContractorType')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Date of Contract:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensor_Date_of_Contract" type="date" class="form-control @error('Licensor_Date_of_Contract') is-invalid @enderror" placeholder="" value="{{ old('Licensor_Date_of_Contract') ?? ((isset($addressbook->Licensor_Date_of_Contract) ? $addressbook->Licensor_Date_of_Contract->format('Y-m-d') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Licensor_Date_of_Contract')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Email of Future Contact:</label>
                                    <div class="col-sm-8">
                                        <input name="Licensor_Email_of_Future_Contact" id="Email_of_Future_Contact" type="email" class="form-control @error('Licensor_Email_of_Future_Contact') is-invalid @enderror" placeholder=" Licensors Employer Name" value="{{ old('Licensor_Email_of_Future_Contact') ?? ($addressbook->Licensor_Email_of_Future_Contact ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="liseEmail_of_Future_ContactList"></div>
                                        @error('Licensor_Email_of_Future_Contact')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Notes:</label>
                                    <div class="col-sm-8">
                                        <textarea cols="600" rows="3" class="form-control" id="Notes" placeholder="Notes" name="Licensor_Notes" placeholder="Enter value here">{{ $addressbook->Licensor_Notes ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <!-- Licensor Ends Hear -->

                    <!-- Agent Starts Hear -->
                    <fieldset>
                        <legend>Agent</legend>
                        <div class="card-body row">
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Foreign Associate ID: </label>
                                    <div class="col-sm-8">
                                        <input name="agent_ID" type="agent_ID" class="form-control" placeholder=" Agent ID" value="{{ old('agent_ID') ?? ($addressbook->agent_ID ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('agent_ID')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Agent Name: </label>
                                    <div class="col-sm-8">
                                        <input name="agent_name" id="agent_name" type="agent_name" class="form-control" placeholder=" Agent Name" value="{{ old('agent_name') ?? ($addressbook->agent_name ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="agent_nameList"></div>
                                        @error('agent_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Foreign Associate Address: </label>
                                    <div class="col-sm-8">
                                        <input name="agent_address" id="agent_address" type="text" class="form-control @error('agent_address') is-invalid @enderror" placeholder=" Agent's address" value="{{ old('agent_address') ?? ($addressbook->agent_address ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="agent_addressList"></div>
                                        @error('agent_address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Nationality: </label>
                                    <div class="col-sm-8">
                                        <select name="agent_nationality" class="form-control @error('agent_nationality') is-invalid @enderror" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" {{ old('agent_nationality') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('agent_nationality')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Contact Person: </label>
                                    <div class="col-sm-8">
                                        <input name="agent_contact_person" id="agent_contact_person" type="text" class="form-control @error('agent_contact_person') is-invalid @enderror" placeholder=" Contact person" value="{{ old('agent_contact_person') ?? ($addressbook->agent_contact_person ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="agent_contact_personList"></div>
                                        @error('agent_contact_person')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">

                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Telephone Number: </label>
                                    <div class="col-sm-8">
                                        <input name="agent_phone" id="telphone" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" class="form-control @error('agent_phone') is-invalid @enderror" value="{{ old('agent_phone') ?? ($addressbook->agent_phone ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('agent_phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Email Address: </label>
                                    <div class="col-sm-8">
                                        <input name="agent_email" id="agent_email" type="email" class="form-control @error('agent_email') is-invalid @enderror" placeholder=" Agent's e-Mail" value="{{ old('agent_email') ?? ($addressbook->email ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="agent_emailList"></div>
                                        @error('agent_email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Fax Number: </label>
                                    <div class="col-sm-8">
                                        <input name="agent_fax_number" id="agent_fax_number" type="agent_fax_number" class="form-control @error('agent_fax_number') is-invalid @enderror" placeholder=" Agent's Fax Number" value="{{ old('agent_fax_number') ?? ($addressbook->agent_fax_number ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="agent_fax_numberList"></div>
                                        @error('agent_fax_number')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Office Contact: </label>
                                    <div class="col-sm-8">
                                        <input name="agent_office_phone" id="agent_office_phone" type="phone" class="form-control @error('agent_office_phone') is-invalid @enderror" placeholder=" agent's office_contact" value="{{ old('agent_office_phone') ?? ($addressbook->agent_office_phone ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="agent_office_phoneList"></div>
                                        @error('agent_office_phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Email of Future Contact: </label>
                                    <div class="col-sm-8">
                                        <input name="agent_future_email" id="agent_future_email" type="email" class="form-control @error('agent_future_email') is-invalid @enderror" placeholder=" Agents's email_of_future_contact" value="{{ old('agent_future_email') ?? ($addressbook->agent_future_email ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="agent_future_emailList"></div>
                                        @error('agent_future_email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Agent Status:
                                    </label>
                                    <div class="col-sm-8">
                                        <select name="agent_status" class="form-control @error('agent_status') is-invalid @enderror" required>
                                            <option value="">Select option</option>
                                            <option value="Active">Active</option>
                                            <option value="Deactive">Deactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
                {{ csrf_field() }}
            </div>
        </div>
    </div>
</div>