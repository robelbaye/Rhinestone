@extends('portal.layouts.app')

@section('content')
            <div class="card">
                <div class="card-body row">
                    <form class="row card-body"
                        action="{{ url('apptcrud/' . $applicant->id) }}" method="POST">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        
                        <div class="col-6">
                            <input type="hidden" name="id" id="id" value="{{$applicant->id}}" id="id"/>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-right">Applicant ID: </label>
                                <div class="col-sm-8">
                                    <input name="applicant_ID" type="applicant_ID" class="form-control"
                                        placeholder=" Applicant ID"
                                        value="{{$applicant->applicant_ID}}"
                                        required disabled>
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
                                    <input name="applicant_name" type="applicant_name" class="form-control"
                                        placeholder=" Applicant Name"
                                        value="{{$applicant->applicant_name}}"
                                        required>
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
                                    <input name="applicant_address" type="text"
                                        class="form-control @error('applicant_address') is-invalid @enderror"
                                        placeholder=" Applicant's Address"
                                        value="{{$applicant->applicant_address}}"
                                        required>
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
                                    <input name="applicant_phone" type="number"
                                        class="form-control @error('applicant_phone') is-invalid @enderror"
                                        placeholder=" Applicant's Address"
                                        value="{{$applicant->applicant_phone}}"
                                        required>
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
                                    <select name="applicant_nationality"
                                        class="form-control @error('applicant_nationality') is-invalid @enderror text-black"
                                        required>
                                        <option value="">{{$applicant->applicant_nationality}}</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}"
                                                {{ old('applicant_nationality') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
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
                                    <select name="country_of_registration"
                                        class="form-control @error('country_of_registration') is-invalid @enderror text-black"
                                        required>
                                        <option value="">{{$applicant->country_of_registration}}</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}"
                                                {{ old('country_of_registration') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
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
                                    <input name="date_of_incorporation" type="date"
                                        class="form-control @error('date_of_incorporation') is-invalid @enderror"
                                        placeholder=""
                                        value="{{$applicant->date_of_incorporation}}"
                                        required>
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
                                    <textarea cols="600" rows="3" class="form-control" id="note"
                                        placeholder="notes" name="note"
                                        placeholder="Enter value here">{{$applicant->note}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-right">Applicant's e-Mail</label>
                                <div class="col-sm-8">
                                    <input name="applicant_email" type="email"
                                        class="form-control @error('applicant_email') is-invalid @enderror"
                                        placeholder=" Applicant's Address"
                                        value="{{$applicant->applicant_email}}"
                                        required>
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
                                    <select name="applicant_status"
                                        class="form-control @error('applicant_status') is-invalid @enderror text-black"
                                        required>
                                        <option value="">{{$applicant->applicant_status}}</option>
                                        <option value="Active">Active</option>
                                        <option value="Deactive">Deactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary text-center">
                                    Update Applicant
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection