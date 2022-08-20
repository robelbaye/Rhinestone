@props(['users', 'countries', 'paralegals'])

<div class="accordion accordion-bordered" id="accordion-4" role="tablist">
    <div class="card">
        <div class="card-header" role="tab" id="heading-10">
            <button form="patent" type="submit" id="create-btn" class="collapse hidden float-right btn btn-success mr-5 position-relative" style="z-index: 100">Create Patent Country</button>
            <h6 class="font-weight-bold mb-0">
                <a data-bs-toggle="collapse" href="#collapse-10,#create-btn" aria-expanded="true" aria-controls="collapse-10" >
                    <span class="btn btn-success" >Add Patent</span>
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
                        <a class="btn btn-outline-primary btn-sm" href="#">
                            <span class="material-icons" style="font-size: 15px;">print</span>
                        </a>
                    </td>

                    <td>
                        <button title="Save" form="patent" type="submit" class="btn btn-outline-primary btn-sm" href="#">
                            <span class="material-icons" style="font-size: 15px;">save</span>
                        </button>
                    </td>
                    <td>
                        <button form="patent" type="reset"  class="btn btn-outline-primary btn-sm" href="#">
                            <span class="material-icons" style="font-size: 15px;">backspace</span>
                        </button>
                    </td>
                </tr>
            </table>
            <div class="card pt-3" style="margin-bottom: -80px;">
                <div class="card-body row">
                    <form class="row card-body" name="patent" id="patent" action="{{ route('patent-crud.store') }}" method="POST">
                        @csrf
                        <div class="col-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label text-right">Family No: </label>
                                <div class="col-sm-8">
                                    <input name="FamilyNo" type="FamilyNo" class="form-control" placeholder=" Family No" value="{{ old('FamilyNo') ?? ($patents->FamilyNo ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                    <select name="Status" class="form-control @error('Status') is-invalid @enderror text-black" required>
                                        <option selected>Select option</option>
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
                                    <select name="Substatus" class="form-control @error('Substatus') is-invalid @enderror text-black" required>
                                        <option selected>Select option</option>
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
                                    <select name="TypeofFiling" class="form-control @error('TypeofFiling') is-invalid @enderror text-black" required>
                                        <option selected>Select option</option>
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
                                    <select name="TypeofSubFiling" class="form-control @error('TypeofSubFiling') is-invalid @enderror text-black" required>
                                        <option selected>Select option</option>
                                        <option value="Open">1</option>
                                        <option value="Pending">2</option>
                                        <option value="Filed">3</option>
                                        <option value="Abandoned">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Internal Title: </label>
                                <div class="col-sm-8">
                                    <input name="InternalTitle" type="InternalTitle" class="form-control" placeholder=" Internal Title" value="{{ old('title') ?? ($patents->InternalTitle ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                    <input name="FormalTitle" type="FormalTitle" class="form-control" placeholder=" Formal Title" value="{{ old('FormalTitle') ?? ($patents->FormalTitle ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                    <select name="Attorney1" class="form-control @error('Attorney1') is-invalid @enderror text-dark" required>
                                        <option value="">Select a Attorney-1</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}" {{ old('Attorney1') == $userslist->id ? 'selected' : '' }}>
                                            {{ $userslist->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Attorney-2:</label>
                                <div class="col-md-4">
                                    <select name="Attorney2" class="form-control @error('Attorney2') is-invalid @enderror text-dark" required>
                                        <option value="">Select a Attorney-2</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}" {{ old('Attorney2') == $userslist->id ? 'selected' : '' }}>
                                            {{ $userslist->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Paralegal-1:</label>
                                <div class="col-md-4">
                                    <select name="Paralegal1" class="form-control @error('Paralegal1') is-invalid @enderror text-dark" required>
                                        <option value="">Select a Paralegal-1</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}" {{ old('Paralegal1') == $userslist->id ? 'selected' : '' }}>
                                            {{ $userslist->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Paralegal-2:</label>
                                <div class="col-md-4">
                                    <select name="Paralegal2" class="form-control @error('Paralegal2') is-invalid @enderror text-dark" required>
                                        <option value="">Select a Paralegal-2</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}" {{ old('Paralegal2') == $userslist->id ? 'selected' : '' }}>
                                            {{ $userslist->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label text-right">Licenced :</label>
                                <div class="col-sm-3">
                                    <select name="isLicenced" class="form-control @error('isLicenced') is-invalid @enderror text-black" required>
                                        <option selected>Select option</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <label class="col-sm-2 col-form-label text-right">Cost Center Code: </label>
                                <div class="col-md-3">
                                    <input name="CostCenter" type="CostCenter" class="form-control" placeholder=" Cost Code" value="{{ old('CostCenter') ?? ($patents->CostCenter ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('CostCenter')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                            <div class="form-group row">



                                <label class="col-sm-2 col-form-label text-right">Licensor:</label>
                                <div class="col-sm-3">
                                    <select name="Licensor" class="form-control @error('Licensor') is-invalid @enderror text-dark" required>
                                        <option value="">Select a Licensor</option>
                                        @foreach ($users as $userslist)
                                            <option value="{{ $userslist->id }}" {{ old('Licensor') == $userslist->id ? 'selected' : '' }}>
                                                {{ $userslist->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <label class="col-sm-2 col-form-label text-right">Cost Center No: </label>
                                <div class="col-md-3">
                                    <input name="CostCenterCode" type="text" pattern="\d*" maxlength="8" onkeypress="return isNumber(event)" onpaste="return false;" class="form-control" placeholder=" Cost No" value="{{ old('CostCenterCode') ?? ($patents->CostCenterCode ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('CostCenterCode')
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