@extends('portal.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Setting's</h4>
        <ul class="nav nav-tabs nav-tabs-success" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link text active" id="pills-setting-tab" data-bs-toggle="pill" href="#pills-setting"
                    role="tab" aria-controls="pills-setting" aria-selected="false"><b> General Settings </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-cost-tab" data-bs-toggle="pill" href="#pills-cost" role="tab"
                    aria-controls="pills-cost" aria-selected="true"><b> Utility Settings </b></a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <!-- General Setting -->
            <div class="tab-pane fade show active" id="pills-setting" role="tabpanel" aria-labelledby="pills-setting-tab">
                <div class="card">
                    <div class="card-body row">
                        <form class="row card-body" id="agent-form"
                            action="{{ route('agent-crud.store') }}" method="POST">
                            @csrf
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Company Name </label>
                                    <div class="col-sm-9">
                                        <input name="agent_ID" type="agent_ID" class="form-control"
                                            placeholder=" Company Name"
                                            value="{{ old('agent_ID') ?? ($agent->agent_ID ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                        @error('agent_ID')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Company Address </label>
                                    <div class="col-sm-9">
                                        <input name="agent_name" type="agent_name" class="form-control"
                                            placeholder=" Company Address"
                                            value="{{ old('agent_name') ?? ($agent->agent_name ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                        @error('agent_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Street Name</label>
                                    <div class="col-sm-9">
                                        <input name="agent_address" type="text"
                                            class="form-control @error('agent_address') is-invalid @enderror"
                                            placeholder=" Street Name"
                                            value="{{ old('agent_address') ?? ($agent->agent_address ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                        @error('agent_address')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">zip/Postal Code</label>
                                    <div class="col-sm-9">
                                        <input name="agent_contact_person" type="text"
                                            class="form-control @error('agent_contact_person') is-invalid @enderror"
                                            placeholder=" zip/Postal Code"
                                            value="{{ old('agent_contact_person') ?? ($agent->agent_contact_person ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
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
                                    <label class="col-sm-3 col-form-label">Telephone Number</label>
                                    <div class="col-sm-9">
                                        <input name="agent_phone" id="telphone" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" 
                                            class="form-control @error('agent_phone') is-invalid @enderror"
                                            value="{{ old('agent_phone') ?? ($agent->agent_phone ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                        @error('agent_phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email Address</label>
                                    <div class="col-sm-9">
                                        <input name="agent_email" type="email"
                                            class="form-control @error('agent_email') is-invalid @enderror"
                                            placeholder=" Company e-Mail"
                                            value="{{ old('agent_email') ?? ($agent->email ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                        @error('agent_email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Fax Number </label>
                                    <div class="col-sm-9">
                                    <input name="agent_fax_number" type="agent_fax_number"
                                        class="form-control @error('agent_fax_number') is-invalid @enderror"
                                        placeholder=" Company's Fax Number"
                                        value="{{ old('agent_fax_number') ?? ($agent->agent_fax_number ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('agent_fax_number')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Office Contact</label>
                                    <div class="col-sm-9">
                                        <input name="agent_office_phone" type="phone"
                                            class="form-control @error('agent_office_phone') is-invalid @enderror"
                                            placeholder=" Office Contact"
                                            value="{{ old('agent_office_phone') ?? ($agent->agent_office_phone ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                        @error('agent_office_phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <div class="float-right">
                                    <button form="agent-form" type="submit" class="btn btn-primary text-center">
                                        Update Settings
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Cost Setting -->
            <div class="tab-pane fade" id="pills-cost" role="tabpanel" aria-labelledby="pills-cost-tab">
                <div class="card">
                    <div class="card-body row">
                        <form class="row card-body" id="agent-form"
                            action="{{ route('agent-crud.store') }}" method="POST">
                            @csrf
                            <div class="col-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Foreign Associate ID </label>
                                    <div class="col-sm-9">
                                        <input name="agent_ID" type="agent_ID" class="form-control"
                                            placeholder=""
                                            value="{{ old('agent_ID') ?? ($agent->agent_ID ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                        @error('agent_ID')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Agent Name </label>
                                    <div class="col-sm-9">
                                        <input name="agent_name" type="agent_name" class="form-control"
                                            placeholder=""
                                            value="{{ old('agent_name') ?? ($agent->agent_name ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                        @error('agent_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Foreign Associate Address</label>
                                    <div class="col-sm-9">
                                        <input name="agent_address" type="text"
                                            class="form-control @error('agent_address') is-invalid @enderror"
                                            placeholder=""
                                            value="{{ old('agent_address') ?? ($agent->agent_address ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                        @error('agent_address')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Contact Person</label>
                                    <div class="col-sm-9">
                                        <input name="agent_contact_person" type="text"
                                            class="form-control @error('agent_contact_person') is-invalid @enderror"
                                            placeholder=""
                                            value="{{ old('agent_contact_person') ?? ($agent->agent_contact_person ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
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
                                    <label class="col-sm-3 col-form-label">Telephone Number</label>
                                    <div class="col-sm-9">
                                        <input name="agent_phone" id="telphone" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" 
                                            class="form-control @error('agent_phone') is-invalid @enderror"
                                            value="{{ old('agent_phone') ?? ($agent->agent_phone ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                        @error('agent_phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email Address</label>
                                    <div class="col-sm-9">
                                        <input name="agent_email" type="email"
                                            class="form-control @error('agent_email') is-invalid @enderror"
                                            placeholder=""
                                            value="{{ old('agent_email') ?? ($agent->email ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                        @error('agent_email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Fax Number </label>
                                    <div class="col-sm-9">
                                    <input name="agent_fax_number" type="agent_fax_number"
                                        class="form-control @error('agent_fax_number') is-invalid @enderror"
                                        placeholder=""
                                        value="{{ old('agent_fax_number') ?? ($agent->agent_fax_number ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('agent_fax_number')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Office Contact</label>
                                    <div class="col-sm-9">
                                        <input name="agent_office_phone" type="phone"
                                            class="form-control @error('agent_office_phone') is-invalid @enderror"
                                            placeholder=""
                                            value="{{ old('agent_office_phone') ?? ($agent->agent_office_phone ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                        @error('agent_office_phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email of Future Contact </label>
                                    <div class="col-sm-9">
                                        <input name="agent_future_email" type="email"
                                            class="form-control @error('agent_future_email') is-invalid @enderror"
                                            placeholder=""
                                            value="{{ old('agent_future_email') ?? ($agent->agent_future_email ?? (app()->environment('local') ? '' : '')) }}"
                                            required>
                                        @error('agent_future_email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Agent Status:
                                    </label>
                                    <div class="col-sm-9">
                                        <select name="agent_status"
                                            class="form-control @error('agent_status') is-invalid @enderror"
                                            required>
                                            <option value="">Select option</option>
                                            <option value="Active">Active</option>
                                            <option value="Deactive">Deactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <div class="float-right">
                                    <button form="agent-form" type="submit" class="btn btn-primary text-center">
                                        Save Utility Settings
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection