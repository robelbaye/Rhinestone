@props(['countries'])

<div class="accordion accordion-bordered" $="accordion-4" role="tablist">
	<div class="card">
        <div class="card-header mb-2" role="tab" id="heading-10">
            <button form="agent-form" type="submit" id="create-btn" class=" collapse hidden float-right btn btn-success mr-5 position-relative" style="min-width:8%;z-index: 100">
                Save
            </button>
            <h6 class="font-weight-bold mb-0">
                <a data-bs-toggle="collapse" href="#collapse-10,#create-btn" aria-expanded="true" aria-controls="collapse-10">
					<span class="btn btn-success">Add Agent</span>
				</a>
			</h6>
		</div>
		<div id="collapse-10" class="collapse hidden" role="tabpanel" aria-labelledby="heading-10" data-bs-parent="#accordion-4">
			<div class="card pt-3" style="margin-bottom: -80px;">
				<div class="card-body row">
					<form class="row card-body" id="agent-form" action="{{ route('agent-crud.store') }}" method="POST">
						@csrf
						<div class="col-6">
							<div class="form-group row">
								<label class="col-sm-4 col-form-label text-right">Foreign Associate ID: </label>
								<div class="col-sm-8">
									<input name="agent_ID" type="agent_ID" class="form-control" placeholder=" Agent ID" value="{{ old('agent_ID') ?? ($agent->agent_ID ?? (app()->environment('local') ? '' : '')) }}" required>
									@error('agent_ID')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label text-right">Agent Name: </label>
								<div class="col-sm-8">
									<input name="agent_name" type="agent_name" class="form-control" placeholder=" Agent Name" value="{{ old('agent_name') ?? ($agent->agent_name ?? (app()->environment('local') ? '' : '')) }}" required>
									@error('agent_name')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label text-right">Foreign Associate Address: </label>
								<div class="col-sm-8">
									<input name="agent_address" type="text" class="form-control @error('agent_address') is-invalid @enderror" placeholder=" Agent's address" value="{{ old('agent_address') ?? ($agent->agent_address ?? (app()->environment('local') ? '' : '')) }}" required>
									@error('agent_address')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label text-right">Nationality: </label>
								<div class="col-sm-8">
									<select name="agent_nationality" class="form-control @error('agent_nationality') is-invalid @enderror" required>
										<option value="">Select a country</option>
										@foreach ($countries as $country)
										<option value="{{ $country->name }}" {{ old('agent_nationality') == $country->name ? 'selected' : '' }}>
											{{ $country->name }}
										</option>
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
								<label class="col-sm-4 col-form-label text-right">Contact Person: </label>
								<div class="col-sm-8">
									<input name="agent_contact_person" type="text" class="form-control @error('agent_contact_person') is-invalid @enderror" placeholder=" Contact person" value="{{ old('agent_contact_person') ?? ($agent->agent_contact_person ?? (app()->environment('local') ? '' : '')) }}" required>
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
								<label class="col-sm-4 col-form-label text-right">Telephone Number: </label>
								<div class="col-sm-8">
									<input name="agent_phone" id="telphone" type="text" pattern="\d*" maxlength="13" onkeypress="return isNumber(event)" onpaste="return false;" class="form-control @error('agent_phone') is-invalid @enderror" value="{{ old('agent_phone') ?? ($agent->agent_phone ?? (app()->environment('local') ? '' : '')) }}" required>
									@error('agent_phone')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label text-right">Email Address: </label>
								<div class="col-sm-8">
									<input name="agent_email" type="email" class="form-control @error('agent_email') is-invalid @enderror" placeholder=" Agent's e-Mail" value="{{ old('agent_email') ?? ($agent->email ?? (app()->environment('local') ? '' : '')) }}" required>
									@error('agent_email')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label text-right">Fax Number: </label>
								<div class="col-sm-8">
									<input name="agent_fax_number" type="agent_fax_number" class="form-control @error('agent_fax_number') is-invalid @enderror" placeholder=" Agent's Fax Number" value="{{ old('agent_fax_number') ?? ($agent->agent_fax_number ?? (app()->environment('local') ? '' : '')) }}" required>
									@error('agent_fax_number')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label text-right">Office Contact: </label>
								<div class="col-sm-8">
									<input name="agent_office_phone" type="phone" class="form-control @error('agent_office_phone') is-invalid @enderror" placeholder=" agent's office_contact" value="{{ old('agent_office_phone') ?? ($agent->agent_office_phone ?? (app()->environment('local') ? '' : '')) }}" required>
									@error('agent_office_phone')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label text-right">Email of Future Contact: </label>
								<div class="col-sm-8">
									<input name="agent_future_email" type="email" class="form-control @error('agent_future_email') is-invalid @enderror" placeholder=" Agents's email_of_future_contact" value="{{ old('agent_future_email') ?? ($agent->agent_future_email ?? (app()->environment('local') ? '' : '')) }}" required>
									@error('agent_future_email')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-4 col-form-label text-right">Agent Status:
								</label>
								<div class="col-sm-8">
									<select name="agent_status" class="form-control @error('agent_status') is-invalid @enderror" required>
										<option value="">Select option</option>
										<option value="Active">Active</option>
										<option value="Deactive">Deactive</option>
									</select>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>