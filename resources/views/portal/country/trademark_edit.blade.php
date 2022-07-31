@extends('portal.layouts.app')

@section('content')
<div class="card">
                <div class="card-body row">
					<form class="row card-body"
						action="{{ url('patentcrud/' .$patents->id) }}" method="POST">
						{{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        
                        <div class="col-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Family No: </label>
                                <div class="col-sm-8">
                                    <input name="FamilyNo" type="FamilyNo" class="form-control"
                                        placeholder=" Family No"
                                        value="{{ $patents->FamilyNo }}"
                                        required>
                                    @error('FamilyNo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Status:</label>
                                <div class="col-sm-5">
                                    <select name="Status"
                                        class="form-control @error('Status') is-invalid @enderror text-black" required>
                                        <option selected value="{{ $patents->Status }}">{{ $patents->Status }}</option>
                                        <option value="Open">Open</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Filed">Filed</option>
                                        <option value="Abandoned">Abandoned</option>
                                        <option value="Sold">Sold</option>
                                        <option value="Licenced">Licenced</option>
                                        <option value="OnHold">OnHold</option>
                                        <option value="Opposed">Opposed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Sub-Status:</label>
                                <div class="col-sm-5">
                                    <select name="Substatus"
                                        class="form-control @error('Substatus') is-invalid @enderror text-black" required>
                                        <option selected value="{{ $patents->Substatus }}">{{ $patents->Substatus }}</option>
                                        <option value="Open">Open</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Filed">Filed</option>
                                        <option value="Abandoned">Abandoned</option>
                                        <option value="Sold">Sold</option>
                                        <option value="Licenced">Licenced</option>
                                        <option value="OnHold">OnHold</option>
                                        <option value="Opposed">Opposed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Type of Filing:</label>
                                <div class="col-sm-5">
                                    <select name="TypeofFiling"
                                        class="form-control @error('TypeofFiling') is-invalid @enderror text-black" required>
                                        <option selected value="{{ $patents->TypeofFiling }}">{{ $patents->TypeofFiling }}</option>
                                        <option value="Open">Patent</option>
                                        <option value="Pending">Design</option>
                                        <option value="Filed">Trademark</option>
                                        <option value="Abandoned">Copyright</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Sub Filing Type:</label>
                                <div class="col-sm-5">
                                    <select name="TypeofSubFiling"
                                        class="form-control @error('TypeofSubFiling') is-invalid @enderror text-black" required>
                                        <option selected value="{{ $patents->TypeofSubFiling }}">{{ $patents->TypeofSubFiling }}</option>
                                        <option value="Open">Sample-1</option>
                                        <option value="Pending">Sample-2</option>
                                        <option value="Filed">Sample-3</option>
                                        <option value="Abandoned">Sample-4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Internal Title: </label>
                                    <div class="col-sm-8">
                                        <input name="InternalTitle" type="InternalTitle" class="form-control"
                                            placeholder=" Internal Title"
                                            value="{{ $patents->InternalTitle }}" required>
                                    </div>
                                @error('InternalTitle')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Formal Title : </label>
                                    <div class="col-sm-8">
                                        <input name="FormalTitle" type="FormalTitle" class="form-control"
                                            placeholder=" Formal Title"
                                            value="{{ $patents->FormalTitle }}" required>
                                    </div>
                                @error('FormalTitle')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Attorney-1:</label>
                                <div class="col-md-4">
                                    <select name="Attorney1"
                                        class="form-control @error('Attorney1') is-invalid @enderror text-dark" required>
                                        <option selected value="{{ $patents->Attorney1 }}">{{ $patents->Attorney1 }}</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}"
                                        {{ old('Attorney1') == $userslist->id ? 'selected' : '' }}>
                                        {{ $userslist->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Attorney-2:</label>
                                <div class="col-md-4">
                                    <select name="Attorney2"
                                        class="form-control @error('Attorney2') is-invalid @enderror text-dark" required>
                                        <option selected value="{{ $patents->Attorney1 }}">{{ $patents->Attorney1 }}</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}"
                                        {{ old('Attorney2') == $userslist->id ? 'selected' : '' }}>
                                        {{ $userslist->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Paralegal-1:</label>
                                <div class="col-md-4">
                                    <select name="Paralegal1"
                                        class="form-control @error('Paralegal1') is-invalid @enderror text-dark" required>
                                        <option selected value="{{ $patents->Paralegal1 }}">{{ $patents->Paralegal1 }}</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}"
                                        {{ old('Paralegal1') == $userslist->id ? 'selected' : '' }}>
                                        {{ $userslist->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Paralegal-2:</label>
                                <div class="col-md-4">
                                    <select name="Paralegal2"
                                        class="form-control @error('Paralegal2') is-invalid @enderror text-dark" required>
                                        <option selected value="{{ $patents->Paralegal2 }}">{{ $patents->Paralegal2 }}</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}"
                                        {{ old('Paralegal2') == $userslist->id ? 'selected' : '' }}>
                                        {{ $userslist->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Licenced :</label>
                                <div class="col-sm-3">
                                    <select name="isLicenced"
                                        class="form-control @error('isLicenced') is-invalid @enderror text-black" required>
                                        <option selected value="{{ $patents->isLicenced }}">{{ $patents->isLicenced }}</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <label class="col-sm-2 col-form-label text-right">Licensor:</label>
                                <div class="col-sm-3">
                                    <select name="Licensor"
                                        class="form-control @error('Licensor') is-invalid @enderror text-dark" required>
                                        <option selected value="{{ $patents->Licensor }}">{{ $patents->Licensor }}</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}"
                                        {{ old('Licensor') == $userslist->id ? 'selected' : '' }}>
                                        {{ $userslist->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Cost Center Code: </label>
                                    <div class="col-md-3">
                                        <input name="CostCenter" type="CostCenter" class="form-control"
                                            placeholder=" Cost Code"
                                            value="{{ $patents->CostCenter }}" required>
                                    </div>
                                @error('CostCenter')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Cost Center No: </label>
                                    <div class="col-md-3">
                                        <input name="CostCenterCode" type="text" pattern="\d*" maxlength="8" onkeypress="return isNumber(event)" onpaste="return false;"  class="form-control"
                                            placeholder=" Cost No"
                                            value="{{ $patents->CostCenterCode }}" required>
                                    </div>
                                @error('CostCenterCode')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="footer">
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary text-center">
                                    Update Patent
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection