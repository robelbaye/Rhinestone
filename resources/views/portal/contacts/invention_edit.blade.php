@extends('portal.layouts.app')

@section('content')
            <div class="card">
                <div class="card-body row">
                    <form class="row card-body" id="investor-form"
                        action="{{ url('investor-crud.edit' . '$investor->id') }}" method="POST">
                        @csrf
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-right">Inventor ID:</label>
                                <div class="col-sm-8">
                                    <input name="InventorID" type="text"
                                        class="form-control @error('InvestorID') is-invalid @enderror"
                                        placeholder="Inventor ID"
                                        value="{{ $investor->InvestorID }}"
                                        required disabled>
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
                                    <select name="title"
                                        class="form-control @error('title') is-invalid @enderror text-black"
                                        required>
                                        <option value="">{{ $investor->title }}</option>
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
                                    <input name="InvestorLastName" type="name" class="form-control"
                                        placeholder=" Surname"
                                        value="{{ $investor->InvestorLastName }}"
                                        required>
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
                                    <input name="InvestorGivenName" type="InvestorGivenName" class="form-control"
                                        placeholder=" Given name"
                                        value="{{ $investor->InvestorGivenName }}"
                                        required>
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
                                    <input name="InvestorPhone" id="phone" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" 
                                        class="form-control"
                                        value="{{ $investor->InvestorPhone }}"
                                        required>
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
                                    <input name="InvestorEmail" type="email" class="form-control"
                                        placeholder=" Inventor Email"
                                        value="{{ $investor->InvestorEmail }}"
                                        required>
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
                                    <input name="Contractor" type="text"
                                        class="form-control @error('Contractor') is-invalid @enderror"
                                        placeholder=" Investor's Contract"
                                        value="{{ $investor->Contractor }}"
                                        required>
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
                                    <input name="ContractorType" type="text"
                                        class="form-control @error('ContractorType') is-invalid @enderror"
                                        placeholder=" Investor's Contract Type"
                                        value="{{ $investor->ContractorType }}"
                                        required>
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
                                    <input name="Date_of_Termination" type="date"
                                        class="form-control @error('Date_of_Termination') is-invalid @enderror"
                                        placeholder=""
                                        value="{{ $investor->Date_of_Termination }}"
                                        required>
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
                                    <textarea cols="600" rows="3" class="form-control" id="Notes"
                                        placeholder="Notes" name="Notes"
                                        placeholder="Enter value here">{{ $investor->Notes }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-right">Nationality:</label>
                                <div class="col-sm-8">
                                    <select name="Nationality"
                                        class="form-control @error('Nationality') is-invalid @enderror text-black"
                                        required>
                                        <option value="">{{ $investor->Nationality }}</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}"
                                                {{ old('country') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-right">Home:</label>
                                <div class="col-sm-8">
                                    <input name="Home" type="text"
                                        class="form-control @error('Home') is-invalid @enderror"
                                        placeholder=" Home"
                                        value="{{ $investor->Home }}"
                                        required>
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
                                    <select name="Country"
                                        class="form-control @error('Country') is-invalid @enderror text-black"
                                        required>
                                        <option value="">{{ $investor->Country }}</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}"
                                                {{ old('country') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
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
                                    <input name="Zip_Code" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" 
                                        class="form-control @error('Zip_Code') is-invalid @enderror text-black"
                                        placeholder=" Zip/Postal Code"
                                        value="{{ $investor->Zip_Code }}"
                                        required>
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
                                    <input name="Employer_Name" type="text"
                                        class="form-control @error('Employer_Name') is-invalid @enderror"
                                        placeholder=" investor's employer_name"
                                        value="{{ $investor->Employer_Name }}"
                                        required>
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
                                    <input name="Date_of_Contract" type="date"
                                        class="form-control @error('Date_of_Contract') is-invalid @enderror"
                                        placeholder=" "
                                        value="{{ $investor->Date_of_Contract }}"
                                        required>
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
                                    <input name="Employer_Address" type="text"
                                        class="form-control @error('Employer_Address') is-invalid @enderror"
                                        placeholder=" investor's employer_address"
                                        value="{{ $investor->Employer_Address }}"
                                        required>
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
                                    <select name="Employer_Nationality"
                                        class="form-control @error('Employer_Nationality') is-invalid @enderror text-black"
                                        required>
                                        <option value="">{{ $investor->Employer_Nationality }}</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}"
                                                {{ old('country') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
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
                                    <input name="Email_of_Future_Contact" type="text"
                                        class="form-control @error('Email_of_Future_Contact') is-invalid @enderror"
                                        placeholder=" investor's Email of Future Contact"
                                        value="{{ $investor->Email_of_Future_Contact }}"
                                        required>
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
                                    <input name="Date_of_Commencement" type="date"
                                        class="form-control @error('Date_of_Commencement') is-invalid @enderror"
                                        placeholder=" "
                                        value="{{ $investor->Date_of_Commencement }}"
                                        required>
                                    @error('Date_of_Commencement')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="float-right">
                                <button form="investor-form" type="submit" class="btn btn-primary text-center">
                                    Update Inventor
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection