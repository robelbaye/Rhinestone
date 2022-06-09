@extends('portal.layouts.app')

@section('content')
<div class="card" align="text-center">
    <div class="card-body" align="text-center">
        <ul class="nav nav-tabs nav-tabs-success" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link text active" id="pills-audit-tab" data-bs-toggle="pill" href="#"
                    role="tab" aria-controls="pills-audit" aria-selected="true"><b> audit trial </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text active" id="pills-investor-tab" data-bs-toggle="pill" href="#"
                    role="tab" aria-controls="pills-investor" aria-selected="true"><b> copy depulicate </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-applicant-tab" data-bs-toggle="pill" href="#" role="tab"
                    aria-controls="pills-applicant" aria-selected="true"><b> customer special interaction</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-owner-tab" data-bs-toggle="pill" href="#" role="tab"
                    aria-controls="pills-owner" aria-selected="false"><b>back </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-licensor-tab" data-bs-toggle="pill" href="#" role="tab"
                    aria-controls="pills-licensor" aria-selected="false"><b> forward</b></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" id="pills-licensee-tab" data-bs-toggle="pill" href="#"
                    role="tab" aria-controls="pills-licensee" aria-selected="false"><b> save </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-consultant-tab" data-bs-toggle="pill" href="#"
                    role="tab" aria-controls="pills-consultant" aria-selected="false"><b> print</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-agent-tab" data-bs-toggle="pill" href="#"
                    role="tab" aria-controls="pills-agent" aria-selected="false"><b> delete </b></a>
            </li>      
        </ul>
        <div>
             <form class="row card-body" id="disclosure-form"
                        action="{{ route('country.store') }}" method="POST">
                        @csrf
                        <div class="col-3">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Case no: </label>
                                <div class="col-sm-5">
                                    <input name="case_number" type="text"
                                        class="form-control @error('case_number') is-invalid @enderror"
                                        placeholder="Case Number"
                                        value="{{ old('case_number') ?? ($sow->case_number ?? (app()->environment('local') ? 'Case Number' : '')) }}"
                                        required>
                                    @error('case_number')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Internal Title: </label>
                                <div class="col-sm-5">
                                    <input name="internal_title" type="text"
                                        class="form-control @error('internal_title') is-invalid @enderror"
                                        placeholder="Internal Title"
                                        value="{{ old('internal_title') ?? ($sow->internal_title ?? (app()->environment('local') ? 'Internal Title' : '')) }}"
                                        required>
                                    @error('internal_title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Formal Title: </label>
                                <div class="col-sm-5">
                                    <input name="formal_title" type="text"
                                        class="form-control @error('formal_titler') is-invalid @enderror"
                                        placeholder="Formal Title"
                                        value="{{ old('Formal Title') ?? ($sow->formal_title ?? (app()->environment('local') ? 'formal title' : '')) }}"
                                        required>
                                    @error('formal_title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Type of filing: </label>
                                <div class="col-sm-5">
                                    <select name="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        required>
                                        <option value="">Select file</option>
                                        <option value="design,">Copy right</option>
                                        <option value="design,">Domain name</option>
                                        <option value="design,">Patent</option>
                                        <option value="design,">Trade Mark</option>
                                        <option value="design,">Trade Socket</option>
                                        <option value="design,">Design</option>
                                        <option value="design,">Utility model</option>
                                    </select>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Sub filing type: </label>
                                <div class="col-sm-5">
                                    <select name="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        required>
                                        <option value="">Select subfile</option>
                                        <option value="">First filing</option>
                                        <option value="design,">Priority</option>
                                        <option value="design,">PCT(patent corporation treaty)</option>
                                        <option value="design,">PCT National</option>
                                        <option value="design,">EP Regional</option>
                                        <option value="design,">EP Validation</option>
                                    
                                    </select>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Status: </label>
                                <div class="col-sm-5">
                                    <select name="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        required>
                                        <option value="">Select status</option>
                                        <option value="">OPEN</option>
                                        <option value="design,">PENDING</option>
                                        <option value="design,">FILED</option>
                                        <option value="design,">ALLOWED</option>
                                        <option value="design,">GRANTED(live)</option>
                                        <option value="design,">ABANDONED</option>
                                    <option value="design,">GRANTED(dead)</option>
                                    <option value="design,">CONVERTED</option>
                                    <option value="design,">EXPIRED</option>
                                    <option value="design,">PUBLISHED</option>
                                    </select>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Sub status: </label>
                                <div class="col-sm-5">
                                    <select name="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        required>
                                        <option value="">Select sub_status</option>
                                        <option value="">Licenced IN</option>
                                        <option value="design,">Licenced OUT</option>
                                        <option value="design,">Opposition FOR</option>
                                        <option value="design,">Opposition AGAINST</option>
                                    </select>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-3">
                             <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Country </label>
                                <div class="col-sm-5">
                                    <select name="country_id"
                                        class="form-control @error('country_id') is-invalid @enderror"
                                        required>
                                        <option value="">Select a country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}"
                                                {{ old('country') == $country->id ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Primary Attorney</label>
                                <div class="col-sm-5">
                                    <select name="country_id"
                                        class="form-control @error('country_id') is-invalid @enderror"
                                        required>
                                        <option value="">Primary attorney</option>
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Secondary Attorney</label>
                                <div class="col-sm-5">
                                    <select name="country_id"
                                        class="form-control @error('country_id') is-invalid @enderror"
                                        required>
                                        <option value="">Secondary attorney</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Primary Paralegal</label>
                                <div class="col-sm-5">
                                    <select name="country_id"
                                        class="form-control @error('country_id') is-invalid @enderror"
                                        required>
                                        <option value="">Primary paralegal</option>
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Secondary Paralegal</label>
                                <div class="col-sm-5">
                                    <select name="country_id"
                                        class="form-control @error('country_id') is-invalid @enderror"
                                        required>
                                        <option value="">Secondary paralegal</option>
                                    
                                    </select>
                                </div>
                            </div>
                                <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Cost center</label>
                                <div class="col-sm-5">
                                    <select name="country_id"
                                        class="form-control @error('country_id') is-invalid @enderror"
                                        required>
                                        <option value="">cost</option>
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Licence</label>
                                <div class="col-sm-5">
                                    <select name="country_id"
                                        class="form-control @error('country_id') is-invalid @enderror"
                                        required>
                                        <option value="">select option</option>
                                        <option value="">YES</option>
                                        <option value="">NO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                            <div class="col-3">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Agent</label>
                                <div class="col-sm-5">
                                    <select name="agent"
                                        class="form-control @error('agent') is-invalid @enderror"
                                        required>
                                        <option value="">Select agent</option>
                                        <option value=""></option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Agent Ref:</label>
                                <div class="col-sm-5">
                                    <select name="agent_reference"
                                        class="form-control @error('agent-reference') is-invalid @enderror"
                                        required>
                                        <option value="">Select agent reference</option>
                                        <option value=""></option>

                                    </select>
                                </div>
                            </div>
                           <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Agent 2:</label>
                                <div class="col-sm-5">
                                    <select name="agent_2"
                                        class="form-control @error('agent-2') is-invalid @enderror"
                                        required>
                                        <option value="">Select agent 2</option>
                                        <option value=""></option>

                                    </select>
                                </div>
                            </div>
                         <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Agent 2 Ref:</label>
                                <div class="col-sm-5">
                                    <select name="agent_2_ref"
                                        class="form-control @error('agent-2_ref') is-invalid @enderror"
                                        required>
                                        <option value="">Select agent 2 reference</option>
                                        <option value=""></option>

                                    </select>
                                </div>
                            </div>
                          <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Cost Center Code:</label>
                                <div class="col-sm-5">
                                    <select name="cost_code"
                                        class="form-control @error('cost_code') is-invalid @enderror"
                                        required>
                                        <option value="">Select cost code</option>
                                        <option value=""></option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                           <div >
                               <h1 class="card-title">Templates</h1> 
                           </div>
                           <div>
                               <a class="nav-link text active" id="pills-ckeklist-tab" data-bs-toggle="pill" href="#"
                    role="tab" aria-controls="pills-ckecklist" aria-selected="false"><b>checklist for action</b></a>
                           </div>
                           <div>
                               <a class="nav-link text active" id="pills-national-tab" data-bs-toggle="pill" href="#"
                    role="tab" aria-controls="pills-national" aria-selected="false"><b>create national</b></a>
                           </div>
                           <div>
                               <a class="nav-link text active" id="pills-PCT-tab" data-bs-toggle="pill" href="#p"
                    role="tab" aria-controls="pills-investor" aria-selected="false"><b>create PCT</b></a>
                           </div>
                           <div>
                               <a class="nav-link text active" id="pills-EP-Validation-tab" data-bs-toggle="pill" href="#p"
                    role="tab" aria-controls="pills-validation" aria-selected="false"><b>create EP validation</b></a>
                           </div>
                           <div>
                               <a class="nav-link text active" id="pills-registration-tab" data-bs-toggle="pill" href="#p"
                    role="tab" aria-controls="pills-registration" aria-selected="false"><b>create registration</b></a>
                           </div>
                           <div>
                               <a class="nav-link text active" id="pills-trade_mark-tab" data-bs-toggle="pill" href="#p"
                    role="tab" aria-controls="pills-trade_mark" aria-selected="false"><b>create trade mark</b></a>
                    <div>
                               <a class="nav-link text active" id="pills-design-tab" data-bs-toggle="pill" href="#p"
                    role="tab" aria-controls="pills-design" aria-selected="false"><b>create design</b></a>
                           </div>
                           <div>
                               <a class="nav-link text active" id="pills-email_creation-tab" data-bs-toggle="pill" href="#p"
                    role="tab" aria-controls="pills-email_creation" aria-selected="false"><b>email creation</b></a>
                           </div>
                           </div>
                        </div>
                        <div class="footer">
                            <div class="float-center">
                                <button form="disclosure-form" type="submit" class="btn btn-primary">
                                    Save Details
                                </button>
                            </div>
                        </div>
                    </form>
        </div>

    </div>
</div>
@endsection