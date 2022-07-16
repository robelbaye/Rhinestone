<div class="accordion accordion-bordered" $="accordion-4" role="tablist">
	<div class="card">
		<div class="card-header" role="tab" id="heading-10">
			<h6 class="font-weight-bold mb-0">
				<a data-bs-toggle="collapse" href="#collapse-10" aria-expanded="true"
					aria-controls="collapse-10">
					<span class="btn btn-success">Add New Account Type </span>
				</a>
			</h6>
		</div>
		<div id="collapse-10" class="collapse hidden" role="tabpanel" aria-labelledby="heading-10"
			data-bs-parent="#accordion-4">
			<div class="card" style="margin-bottom: -80px;">
				<div class="card-body row">
					<form class="row card-body" id="agent-form"
						action="{{ route('agent-crud.store') }}" method="POST">
						@csrf
						<div class="col-6">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">Account Type Name </label>
								<div class="col-sm-9">
									<input name="agent_ID" type="agent_ID" class="form-control"
										placeholder=" Agent ID"
										value="{{ old('agent_ID') ?? ($agent->agent_ID ?? (app()->environment('local') ? '' : '')) }}"
										required>
									@error('agent_ID')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">IsActive </label>
								<div class="col-sm-9">
									<select name="agent_status"
										class="form-control @error('agent_status') is-invalid @enderror"
										required>
										<option value="">Select option</option>
										<option value="Active">Yes</option>
										<option value="Deactive">No</option>
									</select>
								</div>
							</div>
                            <div class="form-group row">
								<label class="col-sm-3 col-form-label">Role</label>
								<div class="col-sm-9">
									<input name="agent_address" type="text"
										class="form-control @error('agent_address') is-invalid @enderror"
										placeholder=" applicant's address"
										value="{{ old('agent_address') ?? ($agent->agent_address ?? (app()->environment('local') ? '' : '')) }}"
										required>
									@error('agent_address')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							</div>
						</div>
						</div>
						<div class="col-6">

						</div>
						<div class="footer">
							<div class="float-right">
								<button form="agent-form" type="submit" class="btn btn-primary text-center">
									Save Cost
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
