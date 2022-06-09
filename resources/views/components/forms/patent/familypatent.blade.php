@props(['users', 'countries', 'paralegals'])

<div class="accordion accordion-bordered" id="accordion-4" role="tablist">
    <div class="card">
        <div class="card-header" role="tab" id="heading-10">
            <h6 class="font-weight-bold mb-0">
                <a data-bs-toggle="collapse" href="#collapse-10" aria-expanded="true"
                    aria-controls="collapse-10">
                    <center> Add family patent </center>
                </a>
            </h6>
        </div>
        <div id="collapse-10" class="collapse hidden" role="tabpanel" aria-labelledby="heading-10"
            data-bs-parent="#accordion-4">
            <div class="card">
                <div class="card-body row">
                    <form class="row card-body" id="disclosure-form"
                        action="{{ route('invention-disclosures.store') }}" method="POST">
                        @csrf
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Family no: </label>
                                <div class="col-sm-5">
                                    <input name="family_number" type="text"
                                        class="form-control @error('family_number') is-invalid @enderror"
                                        placeholder="Family Number"
                                        value="{{ old('applicant_ID') ?? ($applicant->applicant_ID ?? (app()->environment('local') ? '' : '')) }}"
                                        required>
                                    @error('family_number')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status: </label>
                                <div class="col-sm-5">
                                    <select name="Status"
                                        class="form-control @error('title') is-invalid @enderror"
                                        required>
                                        <option value="">Select status</option>
                                        <option value="open">OPEN</option>
                                        <option value="pend">PENDING</option>
                                        <option value="filed">FILED</option>
                                        <option value="abandoned">ABANDONED</option>
                                        <option value="sold">SOLD</option>
                                        <option value="licenced">LICENCED</option>
                                        <option value="hold">ONHOLD</option>
                                        <option value="oppose">OPPOSED</option>

                                    </select>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                           <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Substatus: </label>
                                <div class="col-sm-5">
                                    <select name="substatus"
                                        class="form-control @error('title') is-invalid @enderror"
                                        required>
                                        <option value="">Select substatus</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option> 
                                    </select>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">type of Filing: </label>
                                <div class="col-sm-5">
                                    <select name="filetype"
                                        class="form-control @error('title') is-invalid @enderror"
                                        required>
                                        <option value="">Select type of filing</option>
                                        <option value="patent">Patent</option>
                                        <option value="design">Design</option>
                                        <option value="trade">Trade mark</option>
                                        <option value="copy">Copyright</option>
                                    </select>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Subfiling Type: </label>
                                <div class="col-sm-5">
                                    <select name="subfile"
                                        class="form-control @error('title') is-invalid @enderror"
                                        required>
                                        <option value="">Select subfile type</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option> <option value=""></option>
                                    </select>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Licenced ? </label>
                                <div class="col-sm-5">
                                    <select name="licenced"
                                        class="form-control @error('licenced') is-invalid @enderror"
                                        required>
                                        <option value="">Select option</option>
                                    </select>
                                    @error('licenced')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Licensor: </label>
                                <div class="col-sm-5">
                                    <select name="licensor"
                                        class="form-control @error('licencer') is-invalid @enderror"
                                        required>
                                        <option value="">Select option</option>
                                    </select>
                                    @error('licencer')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                         <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Internal Title:</label>
                                <div class="col-sm-5">
                                    <input name="internal" type="text"
                                        class="form-control @error('internal') is-invalid @enderror"
                                        placeholder=" internal"
                                        value="free text field"
                                        required>
                                    @error('Internal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Formal Title:</label>
                                <div class="col-sm-5">
                                    <input name="formal" type="text"
                                        class="form-control @error('formal') is-invalid @enderror"
                                        placeholder=" formal"
                                        value="free text field"
                                        required>
                                    @error('formal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Attorney 1:</label>
                                <div class="col-sm-5">
                                    <select name="attorney1"
                                        class="form-control @error('attorney1') is-invalid @enderror"
                                        required>
                                        <option value="">Select option</option>
                                    </select>
                                    @error('attorney1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                          
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Attorney 2: </label>
                                <div class="col-sm-5">
                                    <select name="attorney2"
                                        class="form-control @error('attorney2') is-invalid @enderror"
                                        required>
                                        <option value="">Select option</option>
                                    </select>
                                    @error('attorney2')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                           <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Paralegal 1: </label>
                                <div class="col-sm-5">
                                    <select name="paralegal1"
                                        class="form-control @error('paralegal1') is-invalid @enderror"
                                        required>
                                        <option value="">Select option</option>
                                    </select>
                                    @error('paralegal1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Paralegal 2: </label>
                                <div class="col-sm-5">
                                    <select name="paralegal2"
                                        class="form-control @error('paralegal2') is-invalid @enderror"
                                        required>
                                        <option value="">Select option</option>
                                    </select>
                                    @error('paralegal2')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                           <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Cost Center no:</label>
                                <div class="col-sm-4">
                                    <input name="internal" type="text"
                                        class="form-control @error('internal') is-invalid @enderror"
                                        placeholder=" internal"
                                        value="free text field"
                                        required>
                                    @error('Internal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <label class="col-sm-2 col-form-label">Cost Center code:</label>
                                <div class="col-sm-4">
                                    <input name="internal" type="text"
                                        class="form-control @error('internal') is-invalid @enderror"
                                        placeholder=" internal"
                                        value="free text field"
                                        required>
                                    @error('Internal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            
                            </div>
                        </div>
                        <div class="footer">
                            <div class="float-right">
                                <button form="disclosure-form" type="submit" class="btn btn-primary">
                                    Save Details
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
