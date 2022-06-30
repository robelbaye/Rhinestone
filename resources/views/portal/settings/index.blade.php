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
            <li class="nav-item">
                <a class="nav-link" id="pills-accoutsetting-tab" data-bs-toggle="pill" href="#pills-accoutsetting" role="tab"
                    aria-controls="pills-accoutsetting" aria-selected="false"><b> My Profile </b></a>
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
                                    <label class="col-sm-3 col-form-label">Company Address </label>
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
                                    <label class="col-sm-3 col-form-label">Street Name</label>
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
                                    <label class="col-sm-3 col-form-label">zip/Postal Code</label>
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
            <!-- accoutsetting -->
            <div class="tab-pane fade" id="pills-accoutsetting" role="tabpanel" aria-labelledby="pills-accoutsetting-tab">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-4 pb-5">
                            <!-- Account Sidebar-->
                            <div class="author-card pb-3">
                                <div class="author-card-cover" style="background-image: url(https://bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg);"></div>
                                <div class="author-card-profile">
                                    <div class="author-card-avatar"><img src="{{ asset('assets/images/avatar-default-icon.png') }}" alt="profile">
                                    </div>
                                    <div class="author-card-details">
                                        <h5 class="author-card-name text-lg">{{ Auth::user()->name }}<span> {{ Auth::user()->lastname }}</span></h5><span class="author-card-position">Joined February 06, 2017</span>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard">
                                <nav class="list-group list-group-flush">
                                    <a class="list-group-item active" href="#"><i class="fe-icon-user text-muted"></i>Profile Settings</a>
                                </nav>
                            </div>
                        </div>
                        <!-- Profile Settings-->
                        <div class="col-lg-8 pb-5">
                            <form class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="account-fn">First Name</label>
                                        <input class="form-control" type="text" id="account-fn" value="{{ Auth::user()->name }}" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="account-ln">Last Name</label>
                                        <input class="form-control" type="text" id="account-ln" value="{{ Auth::user()->lastname }}" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="account-email">E-mail Address</label>
                                        <input class="form-control" type="email" id="account-email" value="{{ Auth::user()->email }}" disabled="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="account-phone">Phone Number</label>
                                        <input class="form-control" type="text" id="account-phone" value="{{ Auth::user()->phone }}" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="account-pass">New Password</label>
                                        <input class="form-control" type="password" id="account-pass">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="account-confirm-pass">Confirm Password</label>
                                        <input class="form-control" type="password" id="account-confirm-pass">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr class="mt-2 mb-3">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <button class="btn btn-style-1 btn-primary" type="button" data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <style type="text/css">
                .widget-author {
                margin-bottom: 58px;
                }
                .author-card {
                position: relative;
                padding-bottom: 48px;
                background-color: #fff;
                box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .09);
                }
                .author-card .author-card-cover {
                position: relative;
                width: 100%;
                height: 100px;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                }
                .author-card .author-card-cover::after {
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                content: '';
                opacity: 0.5;
                }
                .author-card .author-card-cover > .btn {
                position: absolute;
                top: 12px;
                right: 12px;
                padding: 0 10px;
                }
                .author-card .author-card-profile {
                display: table;
                position: relative;
                margin-top: -22px;
                padding-right: 15px;
                padding-bottom: 16px;
                padding-left: 20px;
                z-index: 5;
                }
                .author-card .author-card-profile .author-card-avatar, .author-card .author-card-profile .author-card-details {
                display: table-cell;
                vertical-align: middle;
                }
                .author-card .author-card-profile .author-card-avatar {
                width: 85px;
                border-radius: 50%;
                box-shadow: 0 8px 20px 0 rgba(0, 0, 0, .15);
                overflow: hidden;
                }
                .author-card .author-card-profile .author-card-avatar > img {
                display: block;
                width: 100%;
                }
                .author-card .author-card-profile .author-card-details {
                padding-top: 20px;
                padding-left: 15px;
                }
                .author-card .author-card-profile .author-card-name {
                margin-bottom: 2px;
                font-size: 14px;
                font-weight: bold;
                }
                .author-card .author-card-profile .author-card-position {
                display: block;
                color: #8c8c8c;
                font-size: 12px;
                font-weight: 600;
                }
                .author-card .author-card-info {
                margin-bottom: 0;
                padding: 0 25px;
                font-size: 13px;
                }
                .author-card .author-card-social-bar-wrap {
                position: absolute;
                bottom: -18px;
                left: 0;
                width: 100%;
                }
                .author-card .author-card-social-bar-wrap .author-card-social-bar {
                display: table;
                margin: auto;
                background-color: #fff;
                box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .11);
                }
                .btn-style-1.btn-white {
                    background-color: #fff;
                }
                .list-group-item i {
                    display: inline-block;
                    margin-top: -1px;
                    margin-right: 8px;
                    font-size: 1.2em;
                    vertical-align: middle;
                }
                .mr-1, .mx-1 {
                    margin-right: .25rem !important;
                }

                .list-group-item.active:not(.disabled) {
                    border-color: #e7e7e7;
                    background: #fff;
                    color: #ac32e4;
                    cursor: default;
                    pointer-events: none;
                }
                .list-group-flush:last-child .list-group-item:last-child {
                    border-bottom: 0;
                }

                .list-group-flush .list-group-item {
                    border-right: 0 !important;
                    border-left: 0 !important;
                }

                .list-group-flush .list-group-item {
                    border-right: 0;
                    border-left: 0;
                    border-radius: 0;
                }
                .list-group-item.active {
                    z-index: 2;
                    color: #fff;
                    background-color: #007bff;
                    border-color: #007bff;
                }
                .list-group-item:last-child {
                    margin-bottom: 0;
                    border-bottom-right-radius: .25rem;
                    border-bottom-left-radius: .25rem;
                }
                a.list-group-item, .list-group-item-action {
                    color: #404040;
                    font-weight: 600;
                }
                .list-group-item {
                    padding-top: 16px;
                    padding-bottom: 16px;
                    -webkit-transition: all .3s;
                    transition: all .3s;
                    border: 1px solid #e7e7e7 !important;
                    border-radius: 0 !important;
                    color: #404040;
                    font-size: 12px;
                    font-weight: 600;
                    letter-spacing: .08em;
                    text-transform: uppercase;
                    text-decoration: none;
                }
                .list-group-item {
                    position: relative;
                    display: block;
                    padding: .75rem 1.25rem;
                    margin-bottom: -1px;
                    background-color: #fff;
                    border: 1px solid rgba(0,0,0,0.125);
                }
                .list-group-item.active:not(.disabled)::before {
                    background-color: #ac32e4;
                }

                .list-group-item::before {
                    display: block;
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 3px;
                    height: 100%;
                    background-color: transparent;
                    content: '';
                }

                </style>
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