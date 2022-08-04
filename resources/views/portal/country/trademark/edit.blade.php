@extends('portal.layouts.app')

@section('content')
<div class="card">
                <div class="card-body row">
					<form class="row card-body" id="Trademark" name="Trademark" action="{{ route('trademark.update',$trademark->id) }}" method="POST">
                        @method('PATCH')
                        @csrf

                        <div class="col-md-6 col-sm-12">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label ">Case No: </label>
                                <div class="col-sm-4">
                                    <input name="CaseNo" class="form-control" placeholder=" Case no" value="{{ old('CaseNo') ?? ($trademark->CaseNo ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                            <option value="{{ $country->id }}" {{ old('Country') ?? $trademark->Country == $country->id ? 'selected' : '' }}>
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
                                    <input name="TrademarkName" type="title" class="form-control" placeholder=" Trademark Name " value="{{ old('TrademarkName') ?? ($trademark->TrademarkName ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                    <input id="imageInput" type="file" accept="image/*" class="form-control" placeholder=" Trademark"  >
                                    <img id="preview" class="m-2" style="max-width: 98%;max-height: 50vh;{{$trademark->Trademark ?? 'display:none;'}}" src="{{ old('Trademark') ?? ($trademark->Trademark) }}" alt="patent preview" />
                                    <input type="hidden" value="{{ old('Trademark') ?? ($trademark->Trademark) }}" name="Trademark" id="trademarkValue"/>
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
                                            <option value="{{ $userslist->id }}" {{ old('PrimaryAttorney') ?? $trademark->PrimaryAttorney == $userslist->id ? 'selected' : '' }}>
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
                                            <option value="{{ $attorneys->id }}" {{ old('Agent') ?? $trademark->Agent == $attorneys->id ? 'selected' : '' }}>
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
                                            <option value="{{ $userslist->id }}" {{ old('SecondaryAttorney') ?? $trademark->SecondaryAttorney  == $userslist->id ? 'selected' : '' }}>
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
                                            <option value="{{ $userslist->id }}" {{ old('PrimaryParalegal') ?? $trademark->PrimaryParalegal == $userslist->id ? 'selected' : '' }}>
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
                                            <option value="{{ $userslist->id }}" {{ old('SecondaryParalegal') ?? $trademark->SecondaryParalegal  == $userslist->id ? 'selected' : '' }}>
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
                                    <input class="col-md-7  form-control" name="TrademarkPriorityNo" type="text" pattern="\d*" maxlength="8"
                                           onkeypress="return isNumber(event)" onpaste="return false;" placeholder="Priority No "
                                           value="{{ old('TrademarkPriorityNo') ?? ($trademark->TrademarkPriorityNo ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('TrademarkPriorityNo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group row col-md-6">
                                    <label class="col-md-3 col-form-label">Date: </label>
                                    <input class="col-md-9 mr-0 w-100 form-control @error('TrademarkPriorityDate') is-invalid @enderror" dataformatas="y-m-d"  name="TrademarkPriorityDate" type="date"
                                           value="{{ old('TrademarkPriorityDate') ?? ((isset($trademark->TrademarkPriorityDate) ? (new \Carbon\Carbon($trademark->TrademarkPriorityDate))->format('Y-m-d'): null) ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                           value="{{ old('TrademarkPriorityNo') ?? ($trademark->TrademarkApplicationNo ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('TrademarkApplicationNo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group row col-md-6">
                                    <label class="col-md-3 col-form-label">Date: </label>
                                    <input class="col-md-9 mr-0 w-100 form-control @error('TrademarkApplicationDate') is-invalid @enderror"
                                           name="TrademarkApplicationDate" type="date"
                                           value="{{ old('TrademarkApplicationDate') ?? ((isset($trademark->TrademarkApplicationDate) ? (new \Carbon\Carbon($trademark->TrademarkApplicationDate))->format('Y-m-d') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                           value="{{ old('TrademarkPriorityNo') ?? ($trademark->TrademarkPriorityNo ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                           value="{{ old('TrademarkRegistrationDate') ?? ((isset($trademark->TrademarkRegistrationDate) ? (new \Carbon\Carbon($trademark->TrademarkRegistrationDate))->format('Y-m-d')  : null) ?? (app()->environment('local') ? '' : '')) }}" required>
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
                                <input name="NextTaxDate" type="date" class="col-md-9 form-control @error('NextTaxDate') is-invalid @enderror" placeholder=" 72" value="{{ old('NextTaxDate') ?? ((isset($trademark->NextTaxDate) ?(new \Carbon\Carbon($trademark->NextTaxDate))->format('Y-m-d')  : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                @error('NextTaxDate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Taxes Paid By: </label>
                                <input name="TaxPaidBy" type="TaxPaidBy" class="col-md-9 form-control" placeholder=" Taxes Paid By"
                                       value="{{ old('TaxPaidBy') ?? ($trademark->TaxPaidBy ?? (app()->environment('local') ? '' : '')) }}" required>
                                @error('TaxPaidBy')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Does it expire? </label>
                                <select name="DoesItExpire" id="doesItExpire"  class="col-md-9 form-control @error('Country') is-invalid @enderror text-black" required>
                                    <option value="false">No</option>
                                    <option {{isset($trademark->ExpireDate) ? 'selected' : null}} value="true">Yes</option>
                                </select>
                            </div>

                            <div class="form-group row" style="display: none" id="expireDateInputGroup">
                                <label class="col-md-3 col-form-label">Expired Date: </label>
                                <input name="ExpireDate" id="expireDateInput" type="date" class="col-md-9 form-control @error('ExpireDate') is-invalid @enderror"
                                       value="{{ old('ExpireDate') ?? ((isset($trademark->ExpireDate) ? (new \Carbon\Carbon($trademark->ExpireDate))->format('Y-m-d')  : null) ?? (app()->environment('local') ? '' : '')) }}" >
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
                        <div class="footer">
                            <div class="float-right">
                                <button type="submit" form="Trademark" class="btn btn-primary text-center">
                                    Update Patent
                                </button>
                            </div>
                        </div>
                </div>
            </div>
@endsection