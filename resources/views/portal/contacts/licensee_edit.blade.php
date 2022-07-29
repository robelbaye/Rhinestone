@extends('portal.layouts.app')

@section('content')
            <div class="card">
                <div class="card-body row">
                    <form class="row card-body"
                        action="{{ url('licenseecrud/' .$licensee->id) }}" method="POST">
						{{ method_field('PATCH') }}
                        {{ csrf_field() }}

                        <div class="col-6">
                            <input type="hidden" name="id" id="id" value="{{ $licensee->id }}" id="id"/>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-right">Licensee ID:</label>
                                <div class="col-sm-8">
                                    <input name="Licensee_ID" type="Licensee_ID" class="form-control" placeholder=" Licensee ID" 
                                    value="{{ $licensee->Licensee_ID }}" required disabled>
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
                                    <input name="Licensee_Name" type="Licensee_Name" 
                                    class="form-control" placeholder=" Licensee Name" 
                                    value="{{ $licensee->Licensee_Name }}" required>
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
                                    <input name="Licensee_Address" type="text"
                                        class="form-control @error('Licensee_Address') is-invalid @enderror"
                                        placeholder=" Licensee's Address"
                                        value="{{ $licensee->Licensee_Address }}"
                                        required>
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
                                    <input name="Licensee_Email" type="email"
                                        class="form-control @error('Licensee_Email') is-invalid @enderror"
                                        placeholder=" Licensee's e-Mail"
                                        value="{{ $licensee->Licensee_Email }}"
                                        required>
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
                                    <input name="Licensee_Phone" id="licphone" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" 
                                        class="form-control"
                                        value="{{ $licensee->Licensee_Phone }}"
                                        required>
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
                                    <select name="Nationality"
                                        class="form-control @error('Nationality') is-invalid @enderror text-black"
                                        required>
                                        <option value="{{ $licensee->Nationality }}">{{ $licensee->Nationality }}</option>
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
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-right">Country of Registration:</label>
                                <div class="col-sm-8">
                                    <select name="Country_of_Registration"
                                        class="form-control @error('Country_of_Registration') is-invalid @enderror text-black"
                                        required>
                                        <option value="{{ $licensee->Country_of_Registration }}">{{ $licensee->Country_of_Registration }}</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}"
                                                {{ old('Country_of_Registration') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
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
                                    <input name="Date_of_Incorporation" type="date"
                                        class="form-control @error('Date_of_Incorporation') is-invalid @enderror"
                                        placeholder=""
                                        value="{{ $licensee->Date_of_Incorporation }}"
                                        required>
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
                                    <textarea cols="600" rows="3" class="form-control" id="Notes"
                                        placeholder="Notes" name="Notes"
                                        placeholder="Enter value here" required>{{ $licensee->Notes}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary text-center">
                                    Update Licensee
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection