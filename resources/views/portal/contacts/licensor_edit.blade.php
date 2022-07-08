@extends('portal.layouts.app')

@section('content')
            <div class="card">
                <div class="card-body row">
                    <form class="row card-body" id="licensor-form"
                        action="{{ url('licensor-crud.edit' . '$$licensor->id') }}" method="POST">
                        @csrf
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-right">Licensor ID:</label>
                                <div class="col-sm-8">
                                    <input name="Licensor_ID" type="Licensor_ID" class="form-control"
                                        placeholder=" Licensor ID"
                                        value="{{ $licensor->Licensor_ID }}"
                                        required>
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
                                    <input name="Last_Name" type="Last_Name" class="form-control"
                                        placeholder=" Surname"
                                        value="{{ $licensor->Last_Name }}"
                                        required>
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
                                    <input name="Given_Name" type="Given_Name" class="form-control"
                                        placeholder=" Given Name"
                                        value="{{ $licensor->Given_Name }}"
                                        required>
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
                                    <input name="Phone_Number" id="liphone" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" 
                                        class="form-control"
                                        value="{{ $licensor->Phone_Number }}"
                                        required>
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
                                    <select name="Nationality"
                                        class="form-control @error('Nationality') is-invalid @enderror text-black" required>
                                        <option value="">{{ $licensee->Nationality }}</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}"
                                                {{ old('country') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
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
                                    <input name="Home_Address" type="text"
                                        class="form-control @error('Home_Address') is-invalid @enderror"
                                        placeholder=" Home Address"
                                        value="{{ $licensor->Home_Address }}"
                                        required>
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
                                    <input name="Employer" type="text"
                                        class="form-control @error('Employer') is-invalid @enderror"
                                        placeholder=" Licensors Employer Name"
                                        value="{{ $licensor->Employer }}"
                                        required>
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
                                    <select name="Employer_Address"
                                        class="form-control @error('Employer_Address') is-invalid @enderror" required>
                                        <option value="">{{ $licensee->Employer_Address }}</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}"
                                                {{ old('country') == $country->id ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
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
                                    <input name="Date_of_Termination" type="date"
                                        class="form-control @error('Date_of_Termination') is-invalid @enderror"
                                        placeholder=""
                                        value="{{ $licensor->Date_of_Termination }}"
                                        required>
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
                                    <input name="Date_of_Commencement" type="date"
                                        class="form-control @error('Date_of_Commencement') is-invalid @enderror"
                                        placeholder=""
                                        value="{{ $licensor->Date_of_Commencement }}"
                                        required>
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
                                    <input name="Contractor" type="text"
                                        class="form-control @error('Contractor') is-invalid @enderror"
                                        placeholder=" Applicant's Contractor"
                                        value="{{ $licensor->Contractor }}"
                                        required>
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
                                    <input name="ContractorType" type="text"
                                        class="form-control @error('ContractorType') is-invalid @enderror"
                                        placeholder=" Applicant's Contractor Type"
                                        value="{{ $licensor->ContractorType }}"
                                        required>
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
                                    <input name="Date_of_Contract" type="date"
                                        class="form-control @error('Date_of_Contract') is-invalid @enderror"
                                        placeholder=""
                                        value="{{ $licensor->Date_of_Contract }}"
                                        required>
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
                                    <input name="Email_of_Future_Contact" type="email"
                                        class="form-control @error('Email_of_Future_Contact') is-invalid @enderror"
                                        placeholder=" Licensors Employer Name"
                                        value="{{ $licensor->Email_of_Future_Contact }}"
                                        required>
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
                                    <textarea cols="600" rows="3" class="form-control" id="Notes" placeholder="Notes"
                                        name="Notes"
                                        placeholder="Enter value here">{{ $licensor->Notes}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="float-right">
                                <button form="licensor-form" type="submit" class="btn btn-primary text-center">
                                    Update Licensor
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection