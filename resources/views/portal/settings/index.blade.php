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
            <li class="nav-item">
                <a class="nav-link" id="pills-accounttype-tab" data-bs-toggle="pill" href="#pills-accounttype" role="tab"
                    aria-controls="pills-accounttype" aria-selected="false"><b> Account Type </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-userslist-tab" data-bs-toggle="pill" href="#pills-userslist" role="tab"
                    aria-controls="pills-userslist" aria-selected="false"><b> Users List </b></a>
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
                                            placeholder=" Agent ID"
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
                                            placeholder=" Agent Name"
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
                                            placeholder=" applicant's address"
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
                                            placeholder=" Contact person"
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
                                            placeholder=" Agent's e-Mail"
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
                                        placeholder=" Agent's Fax Number"
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
                                            placeholder=" agent's office_contact"
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
                                            placeholder=" investor's email_of_future_contact"
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
            <!-- accounttype -->
            <div class="tab-pane fade" id="pills-accounttype" role="tabpanel" aria-labelledby="pills-accounttype-tab">
                <x-forms.settings.accounttype
                    id="create-accounttype-modal"
                    class="btn btn-primary btn-sm"
                    title="Create Account Type"
                />
                <div class="table-responsive">
                    <table id="DevroAccounttype" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Account Type</th>
                                <th>IsActive</th>
                                <th>Role</th>
                                <th>Date of Register</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>1</td>
                                <td>Administrator</td>
                                <td>Yes</td>
                                <td>Super-Admin</td>
                                <td>30/06/2022</td>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm"
                                        href="#">
                                        <span class="material-icons">visibility</span>
                                    </a>
                                    <a class="btn btn-outline-warning btn-sm"
                                        href="#">
                                        <span class="material-icons">edit</span>
                                    </a>
                                    <a class="btn btn-outline-danger btn-sm"
                                        href="#">
                                        <span class="material-icons">delete</span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- accountList -->
            <div class="tab-pane fade" id="pills-userslist" role="tabpanel" aria-labelledby="pills-userslist-tab">
                <div class="table-responsive">
                        <table id="Devrolist" class="table table-striped table-bordered" style="width:100%">
                            <thead class="text-center">
                                <tr>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>e-Mail</th>
                                    <th>Phone</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($users as $userlist)
                                <tr>
                                    <td>{{$userlist->name}}</td>
                                    <td>{{$userlist->lastname}}</td>
                                    <td>{{$userlist->email}}</td>
                                    <td>{{$userlist->phone}}</td>
                                    <td>
                                        <a class="btn btn-outline-primary btn-sm"
                                            href="#">
                                            <span class="material-icons">visibility</span>
                                        </a>
                                        <a class="btn btn-outline-warning btn-sm"
                                            href="#">
                                            <span class="material-icons">edit</span>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm"
                                            href="#">
                                            <span class="material-icons">key</span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    $(document).ready(function() {
        $('#DevroAccounttype').DataTable();
        $('#Devrolist').DataTable();
    });
</script>