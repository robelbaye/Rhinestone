                        <div class="card">
                            <div class="card-body row">
					<form class="row card-body"
						action="{{ url('inventiondiscrud/' .$inventiondis->id) }}" method="POST">
						{{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        
                                    <div class="col-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">IDs Ref. No.: </label>
                                            <div class="col-sm-8">
                                                <input name="reference_number" type="text"
                                                    class="form-control @error('reference_number') is-invalid @enderror"
                                                    placeholder=" IDs Ref. No"
                                                    value="{{ $inventiondis->reference_number }}"
                                                    required>
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
                                                <input name="title" type="title" class="form-control"
                                                    placeholder=" Title"
                                                    value="{{ $inventiondis->title }}"
                                                    required>
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
                                                <select name="status"
                                                    class="form-control @error('status') is-invalid @enderror text-black" required>
                                                    <option value="{{ $inventiondis->status }}">{{ $inventiondis->status }}</option>
                                                    @foreach ($status as $status)
                                                        <option value="{{ $status }}"
                                                            {{ old('status') == $status ? 'selected' : '' }}>
                                                            {{ $status }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Is there an Agreement:
                                            </label>
                                            <div class="col-sm-8">
                                                <select name="agreement_in_place"
                                                    class="form-control @error('agreement_in_place') is-invalid @enderror text-black"
                                                    required>
                                                    <option value="{{ $inventiondis->agreement_in_place }}">{{ $inventiondis->agreement_in_place }}</option>
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
                                                <input name="file_open_date" type="date"
                                                    class="form-control @error('file_open_date') is-invalid @enderror"
                                                    placeholder=" 72"
                                                    value="{{ $inventiondis->file_open_date }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Date of Invention: </label>
                                            <div class="col-sm-8">
                                                <input name="date_of_invention" type="date"
                                                    class="form-control @error('date_of_invention') is-invalid @enderror"
                                                    placeholder=" 72"
                                                    value="{{ $inventiondis->date_of_invention }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Keyword: </label>
                                            <div class="col-sm-8">
                                                <input name="keyword" type="text"
                                                    class="form-control @error('keyword') is-invalid @enderror"
                                                    placeholder=" Keywords"
                                                    value="{{ $inventiondis->keyword }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Business Unit: </label>
                                            <div class="col-sm-8">
                                                <input name="cost_center" type="cost_center" class="form-control"
                                                    placeholder="Business Unit"
                                                    value="{{ $inventiondis->cost_center }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Joint Venture: </label>
                                            <div class="col-sm-8">
                                                <select name="joint_venture"
                                                    class="form-control @error('joint_venture') is-invalid @enderror"
                                                    required>
                                                    <option value="{{ $inventiondis->joint_venture }}">{{ $inventiondis->joint_venture }}</option>
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
                                                <select name="primary_attorney"
                                                    class="form-control @error('primary_attorney') is-invalid @enderror text-black"
                                                    required>
                                                    <option value="{{ $inventiondis->primary_attorney }}">{{ $inventiondis->primary_attorney }}</option>
                                                    @foreach ($attorneys as $attorney)
                                                        <option value="{{ $attorney->id }}"
                                                            {{ old('primary_attorney') == $attorney->id ? 'selected' : '' }}>
                                                            {{ $attorney->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Secondary Attorney: </label>
                                            <div class="col-sm-8">
                                                <select name="secondary_attorney"
                                                    class="form-control @error('secondary_attorney') is-invalid @enderror text-black"
                                                    required>
                                                    <option value="{{ $inventiondis->secondary_attorney }}">{{ $inventiondis->secondary_attorney }}</option>
                                                    @foreach ($attorneys as $attorney)
                                                        <option value="{{ $attorney->id }}"
                                                            {{ old('secondary_attorney') == $attorney->id ? 'selected' : '' }}>
                                                            {{ $attorney->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Primary Paralegal: </label>
                                            <div class="col-sm-8">
                                                <select name="primary_paralegal"
                                                    class="form-control @error('primary_paralegal') is-invalid @enderror text-black"
                                                    required>
                                                    <option value="{{ $inventiondis->primary_paralegal }}">{{ $inventiondis->primary_paralegal }}</option>
                                                    @foreach ($attorneys as $attorney)
                                                        <option value="{{ $attorney->id }}"
                                                            {{ old('primary_paralegal') == $attorney->id ? 'selected' : '' }}>
                                                            {{ $attorney->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Secondary Paralegal: </label>
                                            <div class="col-sm-8">
                                                <select name="secondary_paralegal"
                                                    class="form-control @error('secondary_paralegal') is-invalid @enderror text-black"
                                                    required>
                                                    <option value="{{ $inventiondis->primary_paralegal }}">{{ $inventiondis->primary_paralegal }}</option>
                                                    @foreach ($attorneys as $attorney)
                                                        <option value="{{ $attorney->id }}"
                                                            {{ old('secondary_paralegal') == $attorney->id ? 'selected' : '' }}>
                                                            {{ $attorney->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Business Unit Code: </label>
                                            <div class="col-sm-8">
                                                <input name="center_code" type="center_code" class="form-control"
                                                    placeholder="Business Unit Code"
                                                    value="{{ $inventiondis->center_code }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Invention Description: </label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" id="invention_notes"
                                                    placeholder="Invention description" name="invention_notes"
                                                    placeholder="Invention description">{{ $inventiondis->invention_description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">General Notes: </label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" id="invention_notes"
                                                    placeholder="Invention description" name="invention_notes"
                                                    placeholder="Invention description">{{ $inventiondis->general_notes }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Confirmed Inventors: </label>
                                            <div class="col-sm-8">
                                                <textarea cols="600" rows="3" class="form-control"
                                                    id="confirmed_investors" name="confirmed_investors"
                                                    placeholder="Proposed Inventor">{{ $inventiondis->confirmed_investors }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Approved for Filing: </label>
                                            <div class="col-sm-8">
                                                <select name="approved_for_filing"
                                                    class="form-control @error('approved_for_filing') is-invalid @enderror text-black"
                                                    required>
                                                    <option value="{{ $inventiondis->approved_for_filing }}">{{ $inventiondis->approved_for_filing }}</option>
                                                    <option value="YES">YES</option>
                                                    <option value="NO">NO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Reasons of Approval or Rejection:
                                            </label>
                                            <div class="col-sm-8">
                                                <textarea cols="600" rows="3" class="form-control" id="reason"
                                                    name="reason"
                                                    placeholder="Reasons of Approval or Rejection">{{ $inventiondis->reason }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Approved By: </label>
                                            <div class="col-sm-8">
                                                <textarea cols="600" rows="3" class="form-control" id="reason"
                                                    name="reason"
                                                    placeholder="Reasons of Approval or Rejection">{{ $inventiondis->suggestion }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Approval Date: </label>
                                            <div class="col-sm-8">
                                                <input name="date_of_invention" type="date"
                                                    class="form-control @error('date_of_invention') is-invalid @enderror"
                                                    placeholder=""
                                                    value="{{ $inventiondis->date_of_invention }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label text-right">Proposed Inventors: </label>
                                            <div class="col-sm-8">
                                                <textarea cols="600" rows="3" class="form-control" id="reason"
                                                    name="reason"
                                                    placeholder="Reasons of Approval or Rejection">{{ $evaluation->suggestion }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="float-right">
                                            <button form="disclosure-form" type="submit" class="btn btn-primary">
                                                Create Patent Disclosure
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>