@props(['users', 'countries', 'paralegals'])

<div class="accordion accordion-bordered" id="accordion-4" role="tablist">
    <div class="card">
        <div class="card-header mb-2" role="tab" id="heading-10">
            <button form="design-form" type="submit" id="create-btn" class=" collapse hidden float-right btn btn-success mr-5 position-relative" style="min-width:8%;z-index: 100">
                Save
            </button>
            <h6 class="font-weight-bold mb-0">
                <a data-bs-toggle="collapse" href="#collapse-10,#create-btn" aria-expanded="true" aria-controls="collapse-10">
                    <span class="btn btn-success">Add Family</span>
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
                        <!-- <a class="btn btn-outline-primary btn-sm" href="#">
                            <span class="material-icons" style="font-size: 15px;">print</span>
                        </a> -->
                    </td>
                </tr>
            </table>
            <div class="card pt-3" style="margin-bottom: -80px;">
                <div class="card-body row">
                    <form class="row card-body" id="design-form" action="{{ route('design-crud.store') }}" method="POST">
                        @csrf

                        <div class="col-12">
                            <!-- Line-1 -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Priority/Application No:</label>
                                <div class="col-md-2">
                                    <input name="DesignPriorityNo" type="text" class="form-control" placeholder=" Priority App/n No" value="{{ old('DesignPriorityNo') ?? ($designs->DesignPriorityNo ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('DesignPriorityNo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Priority Provisional Date:</label>
                                <div class="col-md-2">
                                    <input name="ADate" type="date" class="form-control @error('ADate') is-invalid @enderror" placeholder=" 72" value="{{ old('ADate') ?? ((isset($sow->ADate) ? $sow->ADate->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('ADate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Next Annuity Due:</label>
                                <div class="col-sm-2">
                                    <input name="ADate" type="date" class="form-control @error('ADate') is-invalid @enderror" placeholder=" 72" value="{{ old('ADate') ?? ((isset($sow->ADate) ? $sow->ADate->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('ADate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <!-- Line-2 -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Prouisional PCT App/n No: </label>
                                <div class="col-md-2">
                                    <input name="RegistrationNo" type="text" class="form-control" placeholder="PCT App/n No" value="{{ old('RegistrationNo') ?? ($designs->RegistrationNo ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('RegistrationNo')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">PCT Application Date: </label>
                                <div class="col-md-2">
                                    <input name="ADate" type="date" class="form-control @error('ADate') is-invalid @enderror" placeholder=" 72" value="{{ old('ADate') ?? ((isset($sow->ADate) ? $sow->ADate->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('ADate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right text-black">Annuity No: </label>
                                <div class="col-md-2">
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
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                    </select>
                                </div>
                                @error('NoofDrawing')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <!-- Line-3 -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Application No: </label>
                                <div class="col-md-2">
                                    <input name="InternalTitle" type="InternalTitle" class="form-control" placeholder=" Application No" value="{{ old('InternalTitle') ?? ($designs->InternalTitle ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('InternalTitle')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <label class="col-sm-2 col-form-label text-right">Application Date: </label>
                                <div class="col-md-2">
                                    <input name="ADate" type="date" class="form-control @error('ADate') is-invalid @enderror" placeholder=" 72" value="{{ old('ADate') ?? ((isset($sow->ADate) ? $sow->ADate->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('ADate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right text-black">Tax Paid By: </label>
                                <div class="col-md-2">
                                    <select name="SecondaryAttorney" class="form-control @error('SecondaryAttorney') is-invalid @enderror text-dark" required>
                                        <option value="">Select Option</option>
                                        @foreach ($users as $attorneys)
                                        <option value="{{ $attorneys->id }}" {{ old('SecondaryAttorney') == $attorneys->id ? 'selected' : '' }}>
                                            {{ $attorneys->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Line-4 -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Publication No: </label>
                                <div class="col-md-2">
                                    <input name="InternalTitle" type="InternalTitle" class="form-control" placeholder=" Publication No" value="{{ old('InternalTitle') ?? ($designs->InternalTitle ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('InternalTitle')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <label class="col-sm-2 col-form-label text-right">Publication Date: </label>
                                <div class="col-md-2">
                                    <input name="ADate" type="date" class="form-control @error('ADate') is-invalid @enderror" placeholder=" 72" value="{{ old('ADate') ?? ((isset($sow->ADate) ? $sow->ADate->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('ADate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Patent Term No.of Days: </label>
                                <div class="col-md-2">
                                    <input name="InternalTitle" type="InternalTitle" class="form-control" placeholder="Term No.of Days" value="{{ old('InternalTitle') ?? ($designs->InternalTitle ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('InternalTitle')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Line-5 -->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Granted No: </label>
                                <div class="col-md-2">
                                    <input name="InternalTitle" type="InternalTitle" class="form-control" placeholder=" Granted No" value="{{ old('InternalTitle') ?? ($designs->InternalTitle ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('InternalTitle')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <label class="col-sm-2 col-form-label text-right">Granted Date: </label>
                                <div class="col-md-2">
                                    <input name="ADate" type="date" class="form-control @error('ADate') is-invalid @enderror" placeholder=" 72" value="{{ old('ADate') ?? ((isset($sow->ADate) ? $sow->ADate->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('ADate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <label class="col-sm-2 col-form-label text-right">Large / Small Entity: </label>
                                <div class="col-md-2">
                                    <select name="TypeofFiling" class="form-control @error('TypeofFiling') is-invalid @enderror text-black" required>
                                        <option selected>Select option</option>
                                        <option value="Large">Large</option>
                                        <option value="Small">Small</option>
                                    </select>
                                </div>
                                @error('TypeofFiling')
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