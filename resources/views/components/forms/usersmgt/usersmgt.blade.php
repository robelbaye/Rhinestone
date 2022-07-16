@props(['countries'])

<div class="accordion accordion-bordered" id="accordion-4" role="tablist">
    <div class="card">
        <div class="card-header" role="tab" id="heading-10">
            <h6 class="font-weight-bold mb-0">
                <a data-bs-toggle="collapse" href="#collapse-10" aria-expanded="true" aria-controls="collapse-10">
                    <span class="btn btn-success">Add User-Account </span>
                </a>
            </h6>
        </div>
        <div id="collapse-10" class="collapse hidden" role="tabpanel" aria-labelledby="heading-10" data-bs-parent="#accordion-4">
            <div class="card" style="margin-bottom: -80px;">
                <div class="card-body row">
                    <form class="row card-body" action="{{ route('usersmgtlist.store') }}" method="POST">
                        @csrf
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-right">First Name: </label>
                                <div class="col-sm-8">
                                    <input name="name" type="name" class="form-control" placeholder=" First Name" value="{{ old('name') ?? ($users->name ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-right">Last Name: </label>
                                <div class="col-sm-8">
                                    <input name="lastname" type="lastname" class="form-control" placeholder=" First Name" value="{{ old('lastname') ?? ($users->lastname ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('lastname')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-right">e-Mail Address: </label>
                                <div class="col-sm-8">
                                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder=" e-Mail Address" value="{{ old('email') ?? ($users->email ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-right">User's Phone: </label>
                                <div class="col-sm-8">
                                    <input name="phone" type="number" class="form-control @error('phone') is-invalid @enderror" placeholder=" User's Phone" value="{{ old('phone') ?? ($users->phone ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-right">Password: </label>
                                <div class="col-sm-8">
                                    <input name="password" type="password" class="form-control" placeholder=" Password" value="{{ old('password') ?? ($users->password ?? (app()->environment('local') ? '' : '')) }}" required>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="float-right">
                            <button form="agent-form" type="submit" class="btn btn-success text-center" style="width: 100px; margin-top: -40.5%; margin-left: 90%;">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>