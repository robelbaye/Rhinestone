@extends('portal.layouts.app')

@section('content')
			<div class="card">
				<div class="card-body row">
					<form class="row card-body"
						action="{{ url('agent-crud/' .$agent->id) }}" method="POST">
						{{ method_field('PATCH') }}
                        {{ csrf_field() }}

						<div class="col-6">
							<input type="hidden" name="id" id="id" value="{{$agent->id}}" id="id"/>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Foreign Associate ID </label>
								<div class="col-sm-9">
									<input name="agent_ID" type="agent_ID" class="form-control"
										placeholder=" Agent ID"
										value="{{$agent->agent_ID}}"
										required>
									@error('agent_ID')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Agent Name </label>
								<div class="col-sm-9">
									<input name="agent_name" type="agent_name" class="form-control"
										placeholder=" Agent Name"
										value="{{$agent->agent_name}}"
										required>
									@error('agent_name')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Foreign Associate Address</label>
								<div class="col-sm-9">
									<input name="agent_address" type="text"
										class="form-control @error('agent_address') is-invalid @enderror"
										placeholder=" applicant's address"
										value="{{$agent->agent_address}}"
										required>
									@error('agent_address')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Nationality</label>
								<div class="col-sm-9">
									<select name="agent_nationality"
										class="form-control @error('agent_nationality') is-invalid @enderror">
										<option value="{{$agent->agent_nationality}}">{{$agent->agent_nationality}}</option>
										@foreach ($countries as $country)
											<option value="{{ $country->name }}"
												{{ old('agent_nationality') == $country->name ? 'selected' : '' }}>
												{{ $country->name }}</option>
										@endforeach
									</select>
									@error('agent_nationality')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Contact Person</label>
								<div class="col-sm-9">
									<input name="agent_contact_person" type="text"
										class="form-control @error('agent_contact_person') is-invalid @enderror"
										placeholder=" Contact person"
										value="{{$agent->agent_contact_person}}"
										required>
									@error('agent_contact_person')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
						</div>
						<div class="col-6">

							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Telephone Number</label>
								<div class="col-sm-9">
                                    <input name="agent_phone" id="telphone" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" 
                                        class="form-control @error('agent_phone') is-invalid @enderror"
                                        value="{{$agent->agent_phone}}"
                                        required>
                                    @error('agent_phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Email Address</label>
								<div class="col-sm-9">
									<input name="agent_email" type="email"
										class="form-control @error('agent_email') is-invalid @enderror"
										placeholder=" Agent's e-Mail"
										value="{{$agent->agent_email}}"
										required>
									@error('agent_email')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Fax Number </label>
								<div class="col-sm-9">
								<input name="agent_fax_number" type="agent_fax_number"
									class="form-control @error('agent_fax_number') is-invalid @enderror"
									placeholder=" Agent's Fax Number"
									value="{{$agent->agent_fax_number}}"
									required>
								@error('agent_fax_number')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Office Contact</label>
								<div class="col-sm-9">
									<input name="agent_office_phone" type="phone"
										class="form-control @error('agent_office_phone') is-invalid @enderror"
										placeholder=" agent's office_contact"
										value="{{$agent->agent_office_phone}}"
										required>
									@error('agent_office_phone')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Email of Future Contact </label>
								<div class="col-sm-9">
									<input name="agent_future_email" type="email"
										class="form-control @error('agent_future_email') is-invalid @enderror"
										placeholder=" investor's email_of_future_contact"
										value="{{$agent->agent_future_email}}"
										required>
									@error('agent_future_email')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Agent Status:
								</label>
								<div class="col-sm-9">
									<select name="agent_status"
										class="form-control @error('agent_status') is-invalid @enderror">
										<option value="{{$agent->agent_status}}">{{$agent->agent_status}}</option>
										<option value="Active">Active</option>
										<option value="Deactive">Deactive</option>
									</select>
								</div>
							</div>
						</div>
						<div class="footer">
							<div class="float-right">
								<button type="submit" class="btn btn-primary text-center">
									Update Agents
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
@endsection