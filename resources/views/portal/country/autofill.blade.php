@extends('portal.layouts.app')

@section('content')      
<div class="card">
    <div class="card-body row">
        <div class="col-12">
            <div>
                <label class="col-sm-3 col-form-label text-right"> Autofill Sample Page </label>
            </div>
            <div class="form-group row">
                <label class="col-sm-1 col-form-label text-right">Country: </label>
                <div class="col-md-4">
                    <input name="rocountry_name" id="rocountry_name" type="text" class="form-control" placeholder=" Country Name">
                    <div id="rocountryList"></div>
                </div>
            </div>
            {{ csrf_field() }}
        </div>
    </div>
</div>
@endsection