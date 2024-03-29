@props(['users', 'countries', 'paralegals'])

<div class="accordion accordion-bordered" id="accordion-4" role="tablist">
    <div class="card">
        <div class="card-header mb-2" role="tab" id="heading-10">
            <button form="design-form" type="submit" id="create-btn" class=" collapse hidden float-right btn btn-success mr-5 position-relative" style="min-width:8%;z-index: 100">
            Save
            </button>
            <h6 class="font-weight-bold mb-0">
                <a data-bs-toggle="collapse" href="#collapse-10,#create-btn" aria-expanded="true" aria-controls="collapse-10">
                    <span class="btn btn-success">Add Design</span>
                </a>
            </h6>
        </div>

        <div id="collapse-10" class="collapse hidden" role="tabpanel" aria-labelledby="heading-10" data-bs-parent="#accordion-4">
            <table align="center" cellpadding="10px" style="margin-top: -40px; margin-bottom: 2%;">
                <tr>
                    <td><a class="btn btn-outline-primary btn-sm" href="#">
                            Audit trail
                        </a></td>
                    <td><a class="btn btn-outline-primary btn-sm" href="#">
                            <span class="material-icons" style="font-size: 15px;">copy_all</span>
                        </a></td>
                    <td><a class="btn btn-outline-primary btn-sm" href="#">
                            Customer special instruction
                        </a></td>
                    <td>
                        <a class="btn btn-outline-primary btn-sm" href="patent">
                            <span class="material-icons" style="font-size: 15px;">arrow_back</span>
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-outline-primary btn-sm" href="trademark">
                            <span class="material-icons" style="font-size: 15px;">arrow_forward</span>
                        </a>
                    </td>
                    <td>
                        <button class="btn btn-outline-primary btn-sm" href="#">
                            <span class="material-icons" style="font-size: 15px;">print</span>
                        </button>
                    </td>
                    <td>
                        <button title="Save" form="design-form" type="submit" class="btn btn-outline-primary btn-sm" href="#">
                            <span class="material-icons" style="font-size: 15px;">save</span>
                        </button>
                    </td>
                    <td>
                        <button form="design-form" type="reset"  class="btn btn-outline-primary btn-sm" href="#">
                            <span class="material-icons" style="font-size: 15px;">backspace</span>
                        </button>
                    </td>
                </tr>
            </table>
            <div class="card pt-3" style="margin-bottom: -80px;">
                <div class="card-body row">
                    <form class="row card-body" id="design-form" action="{{ route('design-crud.store') }}" method="POST">
                        @csrf

                        <div class="col-12 row">

                            <div class="col-md-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 row col-sm-12 form-group">
                                        <label class="col-md-4 col-form-label text-right">Case No: </label>
                                        <input class="col-md-8 form-control" name="CaseNo" type="CaseNo" placeholder=" Cost No" value="{{ old('CaseNo') ?? ($designs->CaseNo ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('CaseNo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 row col-sm-12 form-group">
                                        <label class="col-md-4 col-form-label text-right">Country: </label>
                                        <div class="col-md-8">
                                            <select name="Country" class="form-control @error('Country') is-invalid @enderror text-black" required>
                                                <option value="">Country</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->name }}" {{ old('Country') == $country->name ? 'selected' : '' }}>
                                                        {{ $country->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('Country')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 row col-sm-12 form-group">
                                        <label class="col-md-4 col-form-label text-right">Internal Title: </label>
                                        <input name="InternalTitle" type="InternalTitle" class="col-md-8 form-control" placeholder=" Internal Title" value="{{ old('InternalTitle') ?? ($designs->InternalTitle ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('InternalTitle')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 row col-sm-12 form-group ">
                                        <label class="col-md-4 col-form-label text-right">Formal Title: </label>
                                        <input name="FormalTitle" type="FormalTitle" class="col-md-8 form-control" placeholder=" Formal Title" value="{{ old('FormalTitle') ?? ($designs->FormalTitle ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('FormalTitle')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 row col-sm-12 form-group">
                                        <div class="border mx-3">Figure 1</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 row col-sm-12 form-group">
                                        <label class="col-md-4 col-form-label text-right">Type Of Filing: </label>
                                        <div class="col-md-8 p-0">
                                            <select name="TypeofFiling" class="form-control @error('TypeofFiling') is-invalid @enderror text-black" required>
                                                <option selected>Select option</option>
                                                <option value="Design">Design</option>
                                            </select>
                                            @error('TypeofFiling')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <label class="col-md-4 col-form-label text-right">Status: </label>
                                        <select name="Status" class="col-md-8 form-control @error('Status') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Open">Open</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Filed">Filed</option>
                                            <option value="Allowed">Allowed</option>
                                            <option value="Granted(Live)">Granted(Live)</option>
                                            <option value="Abandoned">Abandoned</option>
                                            <option value="Granted(DEA)">Granted(DEA)</option>
                                            <option value="Conuerted">Conuerted</option>
                                            <option value="Expired">Expired</option>
                                            <option value="Published">Published</option>
                                        </select>
                                        @error('Status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <label class="col-md-4 col-form-label text-right">Sub Filing Type: </label>
                                        <select name="SubTypeofFiling" class="col-md-8 col-sm-12 form-control @error('SubTypeofFiling') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Design">Registered</option>
                                            <option value="Design">Un-Registered</option>
                                        </select>
                                        @error('SubTypeofFiling')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <label class="col-md-4 col-form-label text-right">Sub Status: </label>
                                        <div class="col-md-8 col-sm-12 p-0">
                                            <select name="SubStatus" class="form-control @error('SubStatus') is-invalid @enderror text-black" required>
                                                <option selected>Select option</option>
                                                <option value="Licenced In">Licenced In</option>
                                                <option value="Licenced Out">Licenced Out</option>
                                                <option value="Opposition For">Opposition For</option>
                                                <option value="Opposition Against">Opposition Against</option>
                                            </select>

                                            @error('SubStatus')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 row col-sm-12 form-group">


                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6 row col-sm-12">
                                <div class="col-md-6 row col-sm-12">
                                    <label class="col-md-4 col-form-label ">Primary Attorney: </label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <select name="PrimaryAttorney" class="form-control @error('PrimaryAttorney') is-invalid @enderror text-dark" required>
                                            <option value="">Primary Attorney</option>
                                            @foreach ($users as $attorneys)
                                                <option value="{{ $attorneys->id }}" {{ old('PrimaryAttorney') == $attorneys->id ? 'selected' : '' }}>
                                                    {{ $attorneys->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('PrimaryAttorney')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <label class="col-md-4  col-form-label ">Secondary Attorney: </label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <select name="SecondaryAttorney" class="form-control @error('SecondaryAttorney') is-invalid @enderror text-dark" required>
                                            <option value="">Secondary Attorney</option>
                                            @foreach ($users as $attorneys)
                                                <option value="{{ $attorneys->id }}" {{ old('SecondaryAttorney') == $attorneys->id ? 'selected' : '' }}>
                                                    {{ $attorneys->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('SecondaryAttorney')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <label class="col-md-4  col-form-label ">Primary Paralegal: </label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <select name="PrimaryParalegal" class="form-control @error('PrimaryParalegal') is-invalid @enderror text-black" required>
                                            <option selected>Primary Paralegal</option>
                                            @foreach ($users as $attorneys)
                                                <option value="{{ $attorneys->id }}" {{ old('PrimaryParalegal') == $attorneys->id ? 'selected' : '' }}>
                                                    {{ $attorneys->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="col-md-4  col-form-label ">Secondary Paralegal: </label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <select name="SecondaryParalegal" class="form-control @error('SecondaryParalegal') is-invalid @enderror text-black" required>
                                            <option selected>Secondary Paralegal</option>
                                            @foreach ($users as $attorneys)
                                                <option value="{{ $attorneys->id }}" {{ old('SecondaryParalegal') == $attorneys->id ? 'selected' : '' }}>
                                                    {{ $attorneys->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('SecondaryParalegal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>


                                </div>
                                <div class="col-md-6 row  col-sm-12">
                                    <label class="col-sm-12 col-md-4 col-form-label ">Agent: </label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <select name="Agent" class="form-control @error('Agent') is-invalid @enderror text-dark" required>
                                            <option value="">Agent</option>
                                            @foreach ($users as $attorneys)
                                                <option value="{{ $attorneys->id }}" {{ old('Agent') == $attorneys->id ? 'selected' : '' }}>
                                                    {{ $attorneys->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('Agent')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                    <label class="col-sm-12 col-md-4 col-form-label ">Agent Ref: </label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <select name="AgentRef" class="form-control @error('AgentRef') is-invalid @enderror text-dark" required>
                                            <option value="">Agent</option>
                                            @foreach ($users as $attorneys)
                                                <option value="{{ $attorneys->id }}" {{ old('AgentRef') == $attorneys->id ? 'selected' : '' }}>
                                                    {{ $attorneys->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('AgentRef')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                    <label class="col-sm-12 col-md-4 col-form-label ">Agent 2: </label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <select name="Agent2" class="form-control @error('Agent2') is-invalid @enderror text-dark" required>
                                            <option value="">Agent</option>
                                            @foreach ($users as $attorneys)
                                                <option value="{{ $attorneys->id }}" {{ old('Agent2') == $attorneys->id ? 'selected' : '' }}>
                                                    {{ $attorneys->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('Agent2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                    <label class="col-sm-12 col-md-4 col-form-label ">Agent 2 Ref: </label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <select name="Agent2Ref" class="form-control @error('Agent2Ref') is-invalid @enderror text-dark" required>
                                            <option value="">Agent</option>
                                            @foreach ($users as $attorneys)
                                                <option value="{{ $attorneys->id }}" {{ old('Agent2Ref') == $attorneys->id ? 'selected' : '' }}>
                                                    {{ $attorneys->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('Agent2Ref')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>
                                <div class="col-md-6 row col-sm-12">
                                    <label class="col-sm-12 col-md-4 col-form-label ">Cost Center</label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <select name="CostCenter" class="form-control @error('CostCenter') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Design">Cost-1</option>
                                            <option value="Design">Cost-2</option>
                                        </select>
                                        @error('CostCenter')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <label class="col-sm-12 col-md-4 col-form-label ">Licence: </label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <select name="Licence" class="form-control @error('Licence') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="Design">Yes</option>
                                            <option value="Design">No</option>
                                        </select>
                                        @error('Licence')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <label class="col-sm-12 col-md-4 col-form-label ">No Of Drawings: </label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <select name="NoofDrawing" class="form-control @error('NoofDrawing') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>

                                        @error('NoofDrawing')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <label class="col-sm-12 col-md-4 col-form-label">No Of View: </label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <select name="NoofView" class="form-control @error('NoofView') is-invalid @enderror text-black" required>
                                            <option selected>Select option</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                        @error('NoofView')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6 row col-sm-12">
                                    <label class="col-sm-12 col-md-4 col-form-label ">Cost Center Code: </label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <input name="CostCenterCode" type="text" pattern="\d*" maxlength="8" onkeypress="return isNumber(event)"
                                               onpaste="return false;" class="form-control" placeholder=" Cost Center Code"
                                               value="{{ old('CostCenterCode') ?? ($designs->CostCenterCode ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('CostCenterCode')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <label class="col-sm-12 col-md-4 col-form-label ">Next Taxes Date: </label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <input name="NextTaxDate" type="date" class="form-control @error('NextTaxDate') is-invalid @enderror"
                                               value="{{ old('NextTaxDate') ?? ((isset($sow->NextTaxDate) ? $sow->NextTaxDate->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}"
                                               required>
                                        @error('NextTaxDate')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <label class="col-sm-12 col-md-4 col-form-label ">Next Annualy No: </label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <input name="NextAnnualyNo" type="NextAnnualyNo" class="form-control"
                                               value="{{ old('NextAnnualyNo') ?? ($designs->NextAnnualyNo ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('NextAnnualyNo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <label class="col-sm-12 col-md-4 col-form-label ">Taxes Paid By: </label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <input name="TaxPaidBy" type="TaxPaidBy" class="form-control w-100" placeholder=" Taxes Paid By"
                                               value="{{ old('TaxPaidBy') ?? ($designs->TaxPaidBy ?? (app()->environment('local') ? '' : '')) }}" required>
                                        @error('TaxPaidBy')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <label class="col-sm-12 col-md-4 col-form-label">Expired Date: </label>
                                    <div class="col-md-8 col-sm-12 p-0">
                                        <input name="ExpireDate" type="date" class="form-control @error('ExpireDate') is-invalid @enderror"
                                               value="{{ old('ExpireDate') ?? ((isset($sow->ExpireDate) ? $sow->ExpireDate->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>

                                        @error('ExpireDate')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-12">

                           <!-- Line-8 -->
                            <div class="form-group row">
                                <div>
                                    <b><u>Other Status</u></b>
                                </div>
                            </div>
                            <!-- Line-9 -->
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label text-right">Design Priority No: </label>
                                <div class="col-md-2">
                                    <input name="DesignPriorityNo" type="text" pattern="\d*" maxlength="8" onkeypress="return isNumber(event)" onpaste="return false;" class="form-control" placeholder=" Design Priority No" value="{{ old('DesignPriorityNo') ?? ($designs->DesignPriorityNo ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('DesignPriorityNo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <label class="col-sm-1 col-form-label text-right">Country: </label>
                                <div class="col-md-2">
                                    <select name="PCountry" class="form-control @error('PCountry') is-invalid @enderror text-black" required>
                                        <option value="">Country</option>
                                        @foreach ($countries as $country)
                                        <option value="{{ $country->name }}" {{ old('primary_attorney') == $country->name ? 'selected' : '' }}>
                                            {{ $country->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('PCountry')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <label class="col-sm-1 col-form-label text-right">Date: </label>
                                <div class="col-md-2">
                                    <input name="PDate" type="date" class="form-control @error('PDate') is-invalid @enderror" placeholder=" 72" value="{{ old('PDate') ?? ((isset($sow->PDate) ? $sow->PDate->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('PDate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <!-- Line-10 -->
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label text-right">Design Application No: </label>
                                <div class="col-md-2">
                                    <input name="DesignAppNo" type="text" pattern="\d*" maxlength="8" onkeypress="return isNumber(event)" onpaste="return false;" class="form-control" placeholder=" Design Application No" value="{{ old('DesignAppNo') ?? ($designs->DesignAppNo ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('DesignAppNo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <label class="col-sm-1 col-form-label text-right">Country: </label>
                                <div class="col-md-2">
                                    <select name="ACountry" class="form-control @error('ACountry') is-invalid @enderror text-black" required>
                                        <option value="">Country</option>
                                        @foreach ($countries as $country)
                                        <option value="{{ $country->name }}" {{ old('primary_attorney') == $country->name ? 'selected' : '' }}>
                                            {{ $country->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('ACountry')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <label class="col-sm-1 col-form-label text-right">Date: </label>
                                <div class="col-md-2">
                                    <input name="ADate" type="date" class="form-control @error('ADate') is-invalid @enderror" placeholder=" 72" value="{{ old('ADate') ?? ((isset($sow->ADate) ? $sow->ADate->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('ADate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <!-- Line-9 -->
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label text-right">Registration No: </label>
                                <div class="col-md-2">
                                    <input name="RegistrationNo" type="text" pattern="\d*" maxlength="8" onkeypress="return isNumber(event)" onpaste="return false;" class="form-control" placeholder=" Registration No" value="{{ old('RegistrationNo') ?? ($designs->RegistrationNo ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('RegistrationNo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <label class="col-sm-1 col-form-label text-right">Country: </label>
                                <div class="col-md-2">
                                    <select name="RCountry" class="form-control @error('RCountry') is-invalid @enderror text-black" required>
                                        <option value="">Country</option>
                                        @foreach ($countries as $country)
                                        <option value="{{ $country->name }}" {{ old('RCountry') == $country->name ? 'selected' : '' }}>
                                            {{ $country->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('RCountry')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <label class="col-sm-1 col-form-label text-right">Date: </label>
                                <div class="col-md-2">
                                    <input name="RDate" type="date" class="form-control @error('RDate') is-invalid @enderror" placeholder=" 72" value="{{ old('RDate') ?? ((isset($sow->RDate) ? $sow->RDate->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('RDate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>