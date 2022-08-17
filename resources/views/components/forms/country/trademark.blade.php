@props(['users', 'countries', 'paralegals'])

<div class="accordion accordion-bordered" id="accordion-4" role="tablist">
    <div class="card">
        <div class="card-header" role="tab" id="heading-10">
            <button form="Trademark" type="submit" value="Submit" id="create-btn" class=" collapse hidden float-right btn btn-success mr-5 position-relative" style="min-width:8%;z-index: 100">
                Create Trademark
            </button>
            <h6 class="font-weight-bold mb-0">
                <a data-bs-toggle="collapse" href="#collapse-10,#create-btn" aria-expanded="true" aria-controls="collapse-10">
                    <span class="btn btn-success">Add Trademark</span>
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
                        <a class="btn btn-outline-primary btn-sm" href="family">
                            <span class="material-icons" style="font-size: 15px;">arrow_forward</span>
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-outline-primary btn-sm" href="#">
                            <span class="material-icons" style="font-size: 15px;">print</span>
                        </a>
                    </td>

                    <td>
                        <button form="Trademark" type="reset"  class="btn btn-outline-primary btn-sm" href="#">
                            <span class="material-icons" style="font-size: 15px;">backspace</span>
                        </button>
                    </td>
                </tr>
            </table>
            <div class="card pt-3">
                <div class="card-body row">
                    <form class="row card-body" id="Trademark" name="Trademark" action="{{ route('trademark.store') }}" method="POST">
                        @csrf
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label ">Case No: </label>
                                <div class="col-sm-4">
                                    <input name="CaseNo" class="form-control" placeholder=" Case no" value="{{ old('CaseNo') ?? ($applicant->CaseNo ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('CaseNo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <label class="col-sm-2 col-form-label ">Country</label>
                                <div class="col-md-4">
                                    <select name="Country" class="form-control @error('Country') is-invalid @enderror text-black" required>
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $country)
                                        <option value="{{ $country->id }}" {{ old('Country') == $country->id ? 'selected' : '' }}>
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
                            <div class="form-group row ">
                                <label class="col-sm-2 col-form-label ">Trademark Name: </label>
                                <div class="col-sm-4 col-md-10">
                                    <input name="TrademarkName" type="title" class="form-control" placeholder=" Trademark Name " value="{{ old('TrademarkName') ?? ($user->TrademarkName ?? (app()->environment('local') ? '' : '')) }}" required>
                                </div>
                                @error('TrademarkName')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label ">Trademark: </label>
                                <div class="col-sm-4 col-md-10">
                                    <input id="imageInput" type="file" accept="image/*" class="form-control" placeholder=" Trademark" value="{{ old('TrademarkName') ?? ($user->TrademarkName ?? (app()->environment('local') ? '' : '')) }}" required>
                                    <img id="preview" class="m-2" style="max-width: 98%;max-height: 50vh;display:none;" src="#" alt="patent preview" />
                                    <input type="hidden" name="Trademark" id="trademarkValue"/>
                                    <script type="text/javascript">
                                        document.getElementById('imageInput').addEventListener("change", function(){
                                            const input = document.getElementById('imageInput');
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();

                                                reader.onload = function (e) {
                                                    var preview = document.getElementById('preview');
                                                    var trademarkValue = document.getElementById('trademarkValue');
                                                    preview.setAttribute('src', e.target.result);
                                                    trademarkValue.setAttribute('value',e.target.result);
                                                    preview.style.display='block';

                                                }

                                                reader.readAsDataURL(input.files[0]);

                                            }
                                        });
                                    </script>
                                </div>
                                @error('Trademark')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label ">Attorney-1:</label>
                                <div class="col-md-3">
                                    <select name="PrimaryAttorney" class="form-control @error('PrimaryAttorney') is-invalid @enderror text-dark" required>
                                        <option value="">Select a Attorney-1</option>
                                        @foreach ($users as $userslist)
                                            <option value="{{ $userslist->id }}" {{ old('PrimaryAttorney') == $userslist->id ? 'selected' : '' }}>
                                                {{ $userslist->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('PrimaryAttorney')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <label class="col-sm-2 col-form-label ">Agent: </label>
                                <div class="col-md-3">
                                    <select name="Agent" class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                        <option selected>Select Agent</option>
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
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label ">Attorney-2:</label>
                                <div class="col-md-3">
                                    <select name="SecondaryAttorney" class="form-control @error('SecondaryAttorney') is-invalid @enderror text-dark" required>
                                        <option value="">Select a Attorney-2</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}" {{ old('SecondaryAttorney') == $userslist->id ? 'selected' : '' }}>
                                            {{ $userslist->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label ">Paralegal-1:</label>
                                <div class="col-md-3">
                                    <select name="PrimaryParalegal" class="form-control @error('PrimaryParalegal') is-invalid @enderror text-dark" required>
                                        <option value="">Select a Paralegal-1</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}" {{ old('PrimaryParalegal') == $userslist->id ? 'selected' : '' }}>
                                            {{ $userslist->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label ">Paralegal-2:</label>
                                <div class="col-md-3">
                                    <select name="SecondaryParalegal" class="form-control @error('SecondaryParalegal') is-invalid @enderror text-dark" required>
                                        <option value="">Select a Paralegal-2</option>
                                        @foreach ($users as $userslist)
                                        <option value="{{ $userslist->id }}" {{ old('SecondaryParalegal') == $userslist->id ? 'selected' : '' }}>
                                            {{ $userslist->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class=" row ">
                                <div class="form-group row col-md-6">
                                    <label class="col-md-5 col-form-label">Trademark Priority No: </label>
                                    <input class="col-md-7  form-control" name="TrademarkPriorityNo" type="text" pattern="\d*" maxlength="8" onkeypress="return isNumber(event)" onpaste="return false;" placeholder="Priority No " value="{{ old('TrademarkPriorityNo') ?? ($designs->TrademarkPriorityNo ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('TrademarkPriorityNo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group row col-md-6">
                                    <label class="col-md-3 col-form-label">Date: </label>
                                    <input class="col-md-9 mr-0 w-100 form-control @error('TrademarkPriorityDate') is-invalid @enderror"  name="TrademarkPriorityDate" type="date" placeholder=" 72" value="{{ old('TrademarkPriorityDate') ?? ((isset($sow->TrademarkPriorityDate) ? $sow->TrademarkPriorityDate->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('TrademarkPriorityDate')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class=" row ">
                                <div class="form-group row col-md-6">
                                    <label class="col-md-5 col-form-label">Trademark Application No: </label>
                                    <input class="col-md-7  form-control" name="TrademarkApplicationNo"
                                           type="text" pattern="\d*" maxlength="8" onkeypress="return isNumber(event)"
                                           onpaste="return false;" placeholder="Application No"
                                           value="{{ old('TrademarkPriorityNo') ?? ($designs->TrademarkApplicationNo ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('TrademarkApplicationNo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group row col-md-6">
                                    <label class="col-md-3 col-form-label">Date: </label>
                                    <input class="col-md-9 mr-0 w-100 form-control @error('TrademarkApplicationDate') is-invalid @enderror"
                                           name="TrademarkApplicationDate" type="date" placeholder=" 72"
                                           value="{{ old('TrademarkApplicationDate') ?? ((isset($sow->TrademarkApplicationDate) ? $sow->TrademarkApplicationDate->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('TrademarkApplicationDate')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class=" row ">
                                <div class="form-group row col-md-6">
                                    <label class="col-md-5 col-form-label">Trademark Registration No: </label>
                                    <input class="col-md-7  form-control" name="TrademarkRegistrationNo" type="text"
                                           pattern="\d*" maxlength="8" onkeypress="return isNumber(event)" onpaste="return false;"
                                           placeholder="Registration No"
                                           value="{{ old('TrademarkPriorityNo') ?? ($designs->TrademarkPriorityNo ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('TrademarkRegistrationNo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group row col-md-6">
                                    <label class="col-md-3 col-form-label">Date: </label>
                                    <input class="col-md-9 mr-0 w-100 form-control @error('TrademarkRegistrationDate') is-invalid @enderror"
                                           name="TrademarkRegistrationDate" type="date"
                                           value="{{ old('TrademarkRegistrationDate') ?? ((isset($sow->TrademarkRegistrationDate) ? $sow->TrademarkRegistrationDate->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('TrademarkRegistrationDate')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Next Tax Date: </label>
                                <input name="NextTaxDate" type="date" class="col-md-9 form-control @error('NextTaxDate') is-invalid @enderror" placeholder=" 72" value="{{ old('NextTaxDate') ?? ((isset($sow->NextTaxDate) ? $sow->NextTaxDate->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                @error('NextTaxDate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Taxes Paid By: </label>
                                <input name="TaxPaidBy" type="TaxPaidBy" class="col-md-9 form-control" placeholder=" Taxes Paid By"
                                       value="{{ old('TaxPaidBy') ?? ($designs->TaxPaidBy ?? (app()->environment('local') ? '' : '')) }}" required>
                                @error('TaxPaidBy')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Does it expire? </label>
                                <select name="DoesItExpire" id="doesItExpire" class="col-md-9 form-control @error('Country') is-invalid @enderror text-black" required>
                                    <option value="false">No</option>
                                    <option value="true">Yes</option>
                                </select>
                            </div>

                            <div class="form-group row" style="display: none" id="expireDateInputGroup">
                                <label class="col-md-3 col-form-label">Expired Date: </label>
                                <input name="ExpireDate" id="expireDateInput" type="date" class="col-md-9 form-control @error('ExpireDate') is-invalid @enderror"
                                       value="{{ old('ExpireDate') ?? ((isset($sow->ExpireDate) ? $sow->ExpireDate->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" >
                                @error('ExpireDate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <script type="text/javascript">
                                var doesitexpire = document.getElementById('doesItExpire');
                                var expireDateInputGroup = document.getElementById('expireDateInputGroup');
                                var expireDateInput = document.getElementById('expireDateInput');
                                doesitexpire.addEventListener('change',function(){
                                    if(doesItExpire.value=='true'){
                                        expireDateInputGroup.style.display='flex';
                                    }else{
                                        expireDateInputGroup.style.display='none';
                                        expireDateInput.value=undefined;
                                    }
                                })
                            </script>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>