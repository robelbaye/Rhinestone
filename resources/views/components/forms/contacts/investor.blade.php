@props(['countries'])

<div class="accordion accordion-bordered" id="accordion-4" role="tablist">
    <div class="card">
        <div class="card-header mb-2" role="tab" id="heading-10">
            <button form="investor-form" type="submit" id="create-btn" class=" collapse hidden float-right btn btn-success mr-5 position-relative" style="min-width:8%;z-index: 100">
                Save
            </button>
            <h6 class="font-weight-bold mb-0">
                <a data-bs-toggle="collapse" href="#collapse-10,#create-btn" aria-expanded="true" aria-controls="collapse-10">
                    <span class="btn btn-success">Add Inventor </span>
                </a>
            </h6>
        </div>
        <div id="collapse-10" class="collapse hidden" role="tabpanel" aria-labelledby="heading-10" data-bs-parent="#accordion-4">
            <div class="card" style="margin-bottom: -80px;">
                <div class="card-body row">
                    <form class="row card-body" id="investor-form" action="{{ route('investor-crud.store') }}" method="POST">
                        @csrf
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
                                    <input name="InvestorLastName" type="name" class="form-control" placeholder=" Surname" value="{{ old('InvestorLastName') ?? ($investor->InvestorLastName ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                    <input name="InvestorGivenName" type="InvestorGivenName" class="form-control" placeholder=" Given name" value="{{ old('InvestorGivenName') ?? ($investor->InvestorGivenName ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                    <input name="InvestorEmail" type="email" class="form-control" placeholder=" Inventor Email" value="{{ old('InvestorEmail') ?? ($investor->InvestorEmail ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                    <input name="Contractor" type="text" class="form-control @error('Contractor') is-invalid @enderror" placeholder=" Inventor's Contract" value="{{ old('Contractor') ?? ($investor->Contractor ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                    <input name="ContractorType" type="text" class="form-control @error('ContractorType') is-invalid @enderror" placeholder=" Inventor's Contract Type" value="{{ old('ContractorType') ?? ($investor->ContractorType ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                    <input name="Home" type="text" class="form-control @error('Home') is-invalid @enderror" placeholder=" Home" value="{{ old('Home') ?? ($investor->Home ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                    <input name="Zip_Code" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" class="form-control @error('Zip_Code') is-invalid @enderror text-black" placeholder=" Zip/Postal Code" value="{{ old('Zip_Code') ?? ($investor->Zip_Code ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                    <input name="Employer_Name" type="text" class="form-control @error('Employer_Name') is-invalid @enderror" placeholder=" Inventor's Employer Name" value="{{ old('Employer_Name') ?? ($investor->Employer_Name ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                    <input name="Employer_Address" type="text" class="form-control @error('Employer_Address') is-invalid @enderror" placeholder=" Inventor's Employer Address" value="{{ old('Employer_Address') ?? ($investor->Employer_Address ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                    <input name="Email_of_Future_Contact" type="text" class="form-control @error('Email_of_Future_Contact') is-invalid @enderror" placeholder=" Inventor's Email of Future Contact" value="{{ old('Email_of_Future_Contact') ?? ($investor->Email_of_Future_Contact ?? (app()->environment('local') ? '' : '')) }}" required>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>