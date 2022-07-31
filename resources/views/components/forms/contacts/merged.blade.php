@props(['countries'])

<div class="accordion accordion-bordered" id="accordion-4" role="tablist">
    <div class="card">
        <div class="card-header mb-2" role="tab" id="heading-10">
            <button form="agent-form" type="submit" id="create-btn" class=" collapse hidden float-right btn btn-success mr-5 position-relative" style="min-width:8%;z-index: 100">
                Save
            </button>
            <h6 class="font-weight-bold mb-0">
                <a data-bs-toggle="collapse" href="#collapse-10,#create-btn" aria-expanded="true" aria-controls="collapse-10">
                    <span class="btn btn-success">Add Address Book(s) </span>
                </a>
            </h6>
        </div>
        <div id="collapse-10" class="collapse hidden" role="tabpanel" aria-labelledby="heading-10" data-bs-parent="#accordion-4">
            <div class="card">
                <form class="row card-body" id="agent-form" action="{{ route('agent-crud.store') }}" method="POST">
                    <!-- Invention Starts Hear -->
                    <fieldset>
                        <legend>Invention</legend>
                        <div class="card-body row">
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Inventor ID:</label>
                                    <div class="col-sm-8">
                                        <input name="InvestorID" type="InvestorID" class="form-control @error('InvestorID') is-invalid @enderror" placeholder="Inventor ID" value="{{ old('InvestorID') ?? ($investor->InvestorID ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('InvestorID')
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
                                        <input name="InvestorLastName" id="InvestorLastName" type="name" class="form-control" placeholder=" Surname" value="{{ old('InvestorLastName') ?? ($investor->InvestorLastName ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="InvestorLastNameList"></div>
                                        @error('InvestorLastName')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Given name(s):</label>
                                    <div class="col-sm-8">
                                        <input name="InvestorGivenName" id="InvestorGivenName" type="InvestorGivenName" class="form-control" placeholder=" Given name" value="{{ old('InvestorGivenName') ?? ($investor->InvestorGivenName ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="InvestorGivenNameList"></div>
                                        @error('InvestorGivenName')
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
                                        <input name="InvestorPhone" id="phone" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" class="form-control" value="{{ old('InvestorPhone') ?? ($investor->InvestorPhone ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="InvestorPhoneList"></div>
                                        @error('InvestorPhone')
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
                                        <input name="InvestorEmail" id="InvestorEmail" type="email" class="form-control" placeholder=" Inventor Email" required>
                                        <div id="InvestorEmailList"></div>
                                        @error('InvestorEmail')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Contract:</label>
                                    <div class="col-sm-8">
                                        <input name="Contractor" id="Contractor" type="text" class="form-control @error('Contractor') is-invalid @enderror" placeholder=" Inventor's Contract" value="{{ old('Contractor') ?? ($investor->Contractor ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="ContractorList"></div>
                                        @error('Contractor')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Type of Contract:</label>
                                    <div class="col-sm-8">
                                        <input name="ContractorType" id="ContractorType" type="text" class="form-control @error('ContractorType') is-invalid @enderror" placeholder=" Inventor's Contract Type" value="{{ old('ContractorType') ?? ($investor->ContractorType ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="ContractorTypeList"></div>
                                        @error('ContractorType')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Date of Termination:</label>
                                    <div class="col-sm-8">
                                        <input name="Date_of_Termination" type="date" class="form-control @error('Date_of_Termination') is-invalid @enderror" placeholder="" value="{{ old('Date_of_Termination') ?? ((isset($investor->Date_of_Termination) ? $investor->Date_of_Termination->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Date_of_Termination')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Notes:</label>
                                    <div class="col-sm-8">
                                        <textarea cols="600" rows="3" class="form-control" id="Notes" placeholder="Notes" name="Notes" placeholder="Enter value here">{{ $investor->Notes ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Nationality:</label>
                                    <div class="col-sm-8">
                                        <select name="Nationality" class="form-control @error('Nationality') is-invalid @enderror text-black" required>
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
                                        <input name="Home" id="Home" type="text" class="form-control @error('Home') is-invalid @enderror" placeholder=" Home" value="{{ old('Home') ?? ($investor->Home ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="HomeList"></div>
                                        @error('Home')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Country:</label>
                                    <div class="col-sm-8">
                                        <select name="Country" class="form-control @error('Country') is-invalid @enderror text-black" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" {{ old('country') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('Country')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Zip/Postal Code:</label>
                                    <div class="col-sm-8">
                                        <input name="Zip_Code" id="Zip_Code" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" class="form-control @error('Zip_Code') is-invalid @enderror text-black" placeholder=" Zip/Postal Code" value="{{ old('Zip_Code') ?? ($investor->Zip_Code ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="Zip_CodeList"></div>
                                        @error('Zip_Code')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Employer Name:</label>
                                    <div class="col-sm-8">
                                        <input name="Employer_Name" id="Employer_Name" type="text" class="form-control @error('Employer_Name') is-invalid @enderror" placeholder=" Inventor's Employer Name" value="{{ old('Employer_Name') ?? ($investor->Employer_Name ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="Employer_NameList"></div>
                                        @error('Employer_Name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Date of Contact:</label>
                                    <div class="col-sm-8">
                                        <input name="Date_of_Contract" type="date" class="form-control @error('Date_of_Contract') is-invalid @enderror" placeholder=" " value="{{ old('Date_of_Contract') ?? ((isset($investor->Date_of_Contract) ? $investor->Date_of_Contract->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Date_of_Contract')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Employer Address:</label>
                                    <div class="col-sm-8">
                                        <input name="Employer_Address" id="Employer_Address" type="text" class="form-control @error('Employer_Address') is-invalid @enderror" placeholder=" Inventor's Employer Address" value="{{ old('Employer_Address') ?? ($investor->Employer_Address ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="Employer_AddressList"></div>
                                        @error('Employer_Address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Employer Nationality:</label>
                                    <div class="col-sm-8">
                                        <select name="Employer_Nationality" class="form-control @error('Employer_Nationality') is-invalid @enderror text-black" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" {{ old('country') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('Employer_Nationality')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Email of Future Contact:</label>
                                    <div class="col-sm-8">
                                        <input name="Email_of_Future_Contact" id="invEmail_of_Future_Contact" type="text" class="form-control @error('Email_of_Future_Contact') is-invalid @enderror" placeholder=" Inventor's Email of Future Contact" value="{{ old('Email_of_Future_Contact') ?? ($investor->Email_of_Future_Contact ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="invEmail_of_Future_ContactList"></div>
                                        @error('Email_of_Future_Contact')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Commencement Date:</label>
                                    <div class="col-sm-8">
                                        <input name="Date_of_Commencement" type="date" class="form-control @error('Date_of_Commencement') is-invalid @enderror" placeholder=" " value="{{ old('Date_of_Commencement') ?? ((isset($investor->Date_of_Commencement) ? $investor->Date_of_Commencement->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Date_of_Commencement')
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
                                        <input name="applicant_ID" id="applicant_ID" type="applicant_ID" class="form-control" placeholder=" Applicant ID" value="{{ old('applicant_ID') ?? ($applicant->applicant_ID ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                        <input name="applicant_name" id="applicant_name" type="applicant_name" class="form-control" placeholder=" Applicant Name" value="{{ old('applicant_name') ?? ($applicant->applicant_name ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                        <input name="applicant_address" id="applicant_address" type="text" class="form-control @error('applicant_address') is-invalid @enderror" placeholder=" Applicant's Address" value="{{ old('applicant_address') ?? ($applicant->applicant_address ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                        <input name="applicant_phone" id="applicant_phone" type="number" class="form-control @error('applicant_phone') is-invalid @enderror" placeholder=" Applicant's Address" value="{{ old('applicant_phone') ?? ($applicant->applicant_phone ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                        <select name="country_of_registration" class="form-control @error('country_of_registration') is-invalid @enderror text-black" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" {{ old('country_of_registration') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('country_of_registration')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Date of Incorporation</label>
                                    <div class="col-sm-8">
                                        <input name="date_of_incorporation" type="date" class="form-control @error('date_of_incorporation') is-invalid @enderror" placeholder=" " value="{{ old('date_of_incorporation') ?? ((isset($applicant->date_of_incorporation) ? $applicant->date_of_incorporation->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('date_of_incorporation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Notes </label>
                                    <div class="col-sm-8">
                                        <textarea cols="600" rows="3" class="form-control" id="note" placeholder="notes" name="note" placeholder="Enter value here">{{ $applicant->note ?? '' }}</textarea>
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
                                        <input name="Licensee_ID" id="Licensee_ID" type="Licensee_ID" class="form-control" placeholder=" Licensee ID" value="{{ old('Licensee_ID') ?? ( $investor->Licensee_ID ?? ( app()->environment('local') ? '' : '' ) ) }}" required>
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
                                        <input name="Licensee_Name" id="Licensee_Name" type="Licensee_Name" class="form-control" placeholder=" Licensee Name" value="{{ old('Licensee_Name') ?? ( $licencee->Licensee_Name ?? ( app()->environment('local') ? '' : '' ) ) }}" required>
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
                                        <input name="Licensee_Address" id="Licensee_Address" type="text" class="form-control @error('Licensee_Address') is-invalid @enderror" placeholder=" Licensee's Address" value="{{ old('Licensee_Address') ?? ($licensee->Licensee_Address ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                        <input name="Licensee_Email" id="Licensee_Email" type="email" class="form-control @error('Licensee_Email') is-invalid @enderror" placeholder=" Licensee's e-Mail" value="{{ old('Licensee_Email') ?? ($licensee->Licensee_Email ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                        <input name="Licensee_Phone" id="licphone" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" class="form-control" value="{{ old('Licensee_Phone') ?? ($licensee->Licensee_Phone ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                        <select name="Nationality" class="form-control @error('Nationality') is-invalid @enderror text-black" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" {{ old('country') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('Nationality')
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
                                        <select name="Country_of_Registration" class="form-control @error('Country_of_Registration') is-invalid @enderror text-black" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" {{ old('Country_of_Registration') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('Country_of_Registration')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Date of Incorporation:</label>
                                    <div class="col-sm-8">
                                        <input name="Date_of_Incorporation" type="date" class="form-control @error('Date_of_Incorporation') is-invalid @enderror" placeholder="" value="{{ old('Date_of_Incorporation') ?? ((isset($licensee->Date_of_Incorporation) ? $licensee->Date_of_Incorporation->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Date_of_Incorporation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Notes:</label>
                                    <div class="col-sm-8">
                                        <textarea cols="600" rows="3" class="form-control" id="Notes" placeholder="Notes" name="Notes" placeholder="Enter value here">{{ $licensee->Notes ?? '' }}</textarea>
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
                                        <input name="Licensor_ID" id="Licensor_ID" type="Licensor_ID" class="form-control" placeholder=" Licensor ID" value="{{ old('Licensor_ID') ?? ($licensor->Licensor_ID ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                        <input name="Last_Name" id="Last_Name" type="Last_Name" class="form-control" placeholder=" Surname" value="{{ old('Last_Name') ?? ($licensor->Last_Name ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="Last_NameList"></div>
                                        @error('Last_Name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Given Name:</label>
                                    <div class="col-sm-8">
                                        <input name="Given_Name" id="Given_Name" type="Given_Name" class="form-control" placeholder=" Given Name" value="{{ old('Given_Name') ?? ($licensor->Given_Name ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="Given_NameList"></div>
                                        @error('Given_Name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Phone Number:</label>
                                    <div class="col-sm-8">
                                        <input name="Phone_Number" id="liphone" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" class="form-control" value="{{ old('Phone_Number') ?? ($licensor->Phone_Number ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Phone_Number')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Nationality:</label>
                                    <div class="col-sm-8">
                                        <select name="Nationality" class="form-control @error('Nationality') is-invalid @enderror text-black" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}" {{ old('country') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('Nationality')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Home Address:</label>
                                    <div class="col-sm-8">
                                        <input name="Home_Address" id="Home_Address" type="text" class="form-control @error('Home_Address') is-invalid @enderror" placeholder=" Home Address" value="{{ old('Home_Address') ?? ($licensor->Home_Address ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="Home_AddressList"></div>
                                        @error('Home_Address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Employer Name:</label>
                                    <div class="col-sm-8">
                                        <input name="Employer" id="Employer" type="text" class="form-control @error('Employer') is-invalid @enderror" placeholder=" Licensors Employer Name" value="{{ old('Employer') ?? ($licensor->Employer ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="EmployerList"></div>
                                        @error('Employer')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Employer Address:</label>
                                    <div class="col-sm-8">
                                        <select name="Employer_Address" class="form-control @error('Employer_Address') is-invalid @enderror" required>
                                            <option value="">Select a country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->id }}" {{ old('country') == $country->id ? 'selected' : '' }}>
                                                {{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('Employer_Address')
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
                                        <input name="Date_of_Termination" type="date" class="form-control @error('Date_of_Termination') is-invalid @enderror" placeholder="" value="{{ old('Date_of_Termination') ?? ((isset($licensor->Date_of_Termination) ? $licensor->Date_of_Termination->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Date_of_Termination')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Date of Commencement:</label>
                                    <div class="col-sm-8">
                                        <input name="Date_of_Commencement" type="date" class="form-control @error('Date_of_Commencement') is-invalid @enderror" placeholder="" value="{{ old('Date_of_Commencement') ?? ((isset($licensor->Date_of_Commencement) ? $licensor->Date_of_Commencement->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Date_of_Commencement')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Contractor:</label>
                                    <div class="col-sm-8">
                                        <input name="Contractor" id="Contractor" type="text" class="form-control @error('Contractor') is-invalid @enderror" placeholder=" Licensor's Contractor" value="{{ old('Contractor') ?? ($licensor->Contractor ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="ContractorList"></div>
                                        @error('Contractor')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Contractor Type:</label>
                                    <div class="col-sm-8">
                                        <input name="ContractorType" id="ContractorType" type="text" class="form-control @error('ContractorType') is-invalid @enderror" placeholder=" Licensor's Contractor Type" value="{{ old('ContractorType') ?? ($licensor->ContractorType ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="ContractorTypeList"></div>
                                        @error('ContractorType')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Date of Contract:</label>
                                    <div class="col-sm-8">
                                        <input name="Date_of_Contract" type="date" class="form-control @error('Date_of_Contract') is-invalid @enderror" placeholder="" value="{{ old('Date_of_Contract') ?? ((isset($licensor->Date_of_Contract) ? $licensor->Date_of_Contract->format('Y-m-d') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('Date_of_Contract')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Email of Future Contact:</label>
                                    <div class="col-sm-8">
                                        <input name="liseEmail_of_Future_Contact" id="Email_of_Future_Contact" type="email" class="form-control @error('Email_of_Future_Contact') is-invalid @enderror" placeholder=" Licensors Employer Name" value="{{ old('Email_of_Future_Contact') ?? ($licensor->Email_of_Future_Contact ?? (app()->environment('local') ? '' : '')) }}" required>
                                        <div id="liseEmail_of_Future_ContactList"></div>
                                        @error('Email_of_Future_Contact')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label text-right">Notes:</label>
                                    <div class="col-sm-8">
                                        <textarea cols="600" rows="3" class="form-control" id="Notes" placeholder="Notes" name="Notes" placeholder="Enter value here">{{ $licensor->notes ?? '' }}</textarea>
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
                                        <input name="agent_ID" type="agent_ID" class="form-control" placeholder=" Agent ID" value="{{ old('agent_ID') ?? ($agent->agent_ID ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                        <input name="agent_name" id="agent_name" type="agent_name" class="form-control" placeholder=" Agent Name" value="{{ old('agent_name') ?? ($agent->agent_name ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                        <input name="agent_address" id="agent_address" type="text" class="form-control @error('agent_address') is-invalid @enderror" placeholder=" Agent's address" value="{{ old('agent_address') ?? ($agent->agent_address ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                        <input name="agent_contact_person" id="agent_contact_person" type="text" class="form-control @error('agent_contact_person') is-invalid @enderror" placeholder=" Contact person" value="{{ old('agent_contact_person') ?? ($agent->agent_contact_person ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                        <input name="agent_phone" id="telphone" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" class="form-control @error('agent_phone') is-invalid @enderror" value="{{ old('agent_phone') ?? ($agent->agent_phone ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                        <input name="agent_email" id="agent_email" type="email" class="form-control @error('agent_email') is-invalid @enderror" placeholder=" Agent's e-Mail" value="{{ old('agent_email') ?? ($agent->email ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                        <input name="agent_fax_number" id="agent_fax_number" type="agent_fax_number" class="form-control @error('agent_fax_number') is-invalid @enderror" placeholder=" Agent's Fax Number" value="{{ old('agent_fax_number') ?? ($agent->agent_fax_number ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                        <input name="agent_office_phone" id="agent_office_phone" type="phone" class="form-control @error('agent_office_phone') is-invalid @enderror" placeholder=" agent's office_contact" value="{{ old('agent_office_phone') ?? ($agent->agent_office_phone ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                        <input name="agent_future_email" id="agent_future_email" type="email" class="form-control @error('agent_future_email') is-invalid @enderror" placeholder=" Agents's email_of_future_contact" value="{{ old('agent_future_email') ?? ($agent->agent_future_email ?? (app()->environment('local') ? '' : '')) }}" required>
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