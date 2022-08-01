@props(['status', 'attorneys', 'paralegals'])

<div class="card">
    <div class="card-body">
        <div class="mt-4">
            <div class="accordion accordion-bordered" id="accordion-4" role="tablist">
                <div class="card">
                    <div class="card-header" role="tab" id="heading-10">
                        <h6 class="font-weight-bold mb-0">
                            <a data-bs-toggle="collapse" href="#collapse-10" aria-expanded="true" aria-controls="collapse-10">
                                <span class="btn btn-success"><b> Create Patent Family </b></span>
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
                        <div class="pt-3 card" style="margin-bottom: -80px;">
                            <div class="card-body row">
                                <form class="row card-body" id="disclosure-form" action="{{ route('invention-disclosures.store') }}" method="POST">
                                    @csrf
                                    <div class="col-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">IDs Ref. No.: </label>
                                            <div class="col-sm-8">
                                                <input name="reference_number" type="text" class="form-control @error('reference_number') is-invalid @enderror" placeholder=" IDs Ref. No" value="{{ old('reference_number') ?? ($sow->reference_number ?? (app()->environment('local') ? '' : '')) }}" required>
                                                @error('reference_number')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Title: </label>
                                            <div class="col-sm-8">
                                                <input name="title" type="title" class="form-control" placeholder=" Title" value="{{ old('title') ?? ($user->name ?? (app()->environment('local') ? '' : '')) }}" required>
                                            </div>
                                            @error('reference_number')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Status: </label>
                                            <div class="col-sm-8">
                                                <select name="status" class="form-control @error('status') is-invalid @enderror text-black" required>
                                                    <option value="">Select application status</option>
                                                    @foreach ($status as $status)
                                                    <option value="{{ $status }}" {{ old('status') == $status ? 'selected' : '' }}>
                                                        {{ $status }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Is there an Agreement:
                                            </label>
                                            <div class="col-sm-8">
                                                <select name="agreement_in_place" class="form-control @error('agreement_in_place') is-invalid @enderror text-black" required>
                                                    <option value="">Select option</option>
                                                    <option value="YES">YES</option>
                                                    <option value="NO">NO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Date File Opened: </label>
                                            <div class="col-sm-8">
                                                <input name="file_open_date" type="date" class="form-control @error('file_open_date') is-invalid @enderror" placeholder=" 72" value="{{ old('file_open_date') ?? ((isset($sow->file_open_date) ? $sow->file_open_date->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Date of Invention: </label>
                                            <div class="col-sm-8">
                                                <input name="date_of_invention" type="date" class="form-control @error('date_of_invention') is-invalid @enderror" placeholder=" 72" value="{{ old('date_of_invention') ?? ((isset($sow->date_of_invention) ? $sow->date_of_invention->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Keyword: </label>
                                            <div class="col-sm-8">
                                                <input name="keyword" type="text" class="form-control @error('keyword') is-invalid @enderror" placeholder=" Keywords" value="{{ old('keyword') ?? ($sow->keyword ?? (app()->environment('local') ? '' : '')) }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label text-right">Business Unit Code: </label>
                                            <div class="col-sm-3">
                                                <input name="center_code" type="center_code" class="form-control" value="{{ old('center_code') ?? ($user->center_code ?? (app()->environment('local') ? '' : '')) }}" required>
                                            </div>
                                            <label class="col-sm-3 col-form-label text-right">Business Unit: </label>
                                            <div class="col-sm-3">
                                                <input name="cost_center" type="cost_center" class="form-control" value="{{ old('cost_center') ?? ($user->cost_center ?? (app()->environment('local') ? '' : '')) }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Joint Venture: </label>
                                            <div class="col-sm-8">
                                                <select name="joint_venture" class="form-control @error('joint_venture') is-invalid @enderror" required>
                                                    <option value="">Select option</option>
                                                    <option value="YES">YES</option>
                                                    <option value="NO">NO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Primary Attorney: </label>
                                            <div class="col-sm-8">
                                                <select name="primary_attorney" class="form-control @error('primary_attorney') is-invalid @enderror text-black" required>
                                                    <option value="">Select a primary attorney</option>
                                                    @foreach ($attorneys as $attorney)
                                                    <option value="{{ $attorney->id }}" {{ old('primary_attorney') == $attorney->id ? 'selected' : '' }}>
                                                        {{ $attorney->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Secondary Attorney: </label>
                                            <div class="col-sm-8">
                                                <select name="primary_attorney" class="form-control @error('primary_attorney') is-invalid @enderror text-black" required>
                                                    <option value="">Select a secondary attorney</option>
                                                    @foreach ($attorneys as $attorney)
                                                    <option value="{{ $attorney->id }}" {{ old('primary_attorney') == $attorney->id ? 'selected' : '' }}>
                                                        {{ $attorney->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Primary Paralegal: </label>
                                            <div class="col-sm-8">
                                                <select name="primary_attorney" class="form-control @error('primary_attorney') is-invalid @enderror text-black" required>
                                                    <option value="">Select a primary paralegal</option>
                                                    @foreach ($attorneys as $attorney)
                                                    <option value="{{ $attorney->id }}" {{ old('primary_attorney') == $attorney->id ? 'selected' : '' }}>
                                                        {{ $attorney->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Secondary Attorney: </label>
                                            <div class="col-sm-8">
                                                <select name="primary_attorney" class="form-control @error('primary_attorney') is-invalid @enderror text-black" required>
                                                    <option value="">Select a secondary attorney</option>
                                                    @foreach ($attorneys as $attorney)
                                                    <option value="{{ $attorney->id }}" {{ old('primary_attorney') == $attorney->id ? 'selected' : '' }}>
                                                        {{ $attorney->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Invention Description: </label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" id="invention_notes" placeholder="Invention description" name="invention_notes" placeholder="Invention description">{{ $evaluation->suggestion ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">General Notes: </label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" id="invention_notes" placeholder="Invention description" name="invention_notes" placeholder="Invention description">{{ $evaluation->suggestion ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Confirmed Inventors: </label>
                                            <div class="col-sm-8">
                                                <textarea cols="600" rows="3" class="form-control" id="proposed_investors" name="proposed_investors" placeholder="Proposed Inventors">{{ $evaluation->suggestion ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Approved for Filing: </label>
                                            <div class="col-sm-8">
                                                <select name="approved_for_filing" class="form-control @error('approved_for_filing') is-invalid @enderror text-black" required>
                                                    <option value="">Select option</option>
                                                    <option value="YES">YES</option>
                                                    <option value="NO">NO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Reasons of Approval or Rejection:
                                            </label>
                                            <div class="col-sm-8">
                                                <textarea cols="600" rows="3" class="form-control" id="reason" name="reason" placeholder="Reasons of Approval or Rejection">{{ $evaluation->suggestion ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Approved By: </label>
                                            <div class="col-sm-8">
                                                <textarea cols="600" rows="3" class="form-control" id="reason" name="reason" placeholder="Reasons of Approval or Rejection">{{ $evaluation->suggestion ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Approval or Rejection Date: </label>
                                            <div class="col-sm-8">
                                                <input name="date_of_invention" type="date" class="form-control @error('date_of_invention') is-invalid @enderror" placeholder="" value="{{ old('date_of_invention') ?? ((isset($sow->date_of_invention) ? $sow->date_of_invention->format('d-m-Y') : null) ?? (app()->environment('local') ? '' : '')) }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Proposed Inventors: </label>
                                            <div class="col-sm-8">
                                                <textarea cols="600" rows="3" class="form-control" id="reason" name="reason" placeholder="Reasons of Approval or Rejection">{{ $evaluation->suggestion ?? '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-right">
                                        <button form="disclosure-form" type="submit" class="btn btn-primary text-center" style="width: 200px; margin-top: -1015px; margin-left: 83%;">
                                            Save Patent Family
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>