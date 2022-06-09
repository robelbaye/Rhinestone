@extends('portal.layouts.app')

@section('content')
<div class="card">
    <div class="card-body float-right">
         <ul class="nav nav-tabs nav-tabs-success" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link text active" id="pills-audit-tab" data-bs-toggle="pill" href="#"
                    role="tab" aria-controls="pills-audit" aria-selected="false"><b> audit trial </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text active" id="pills-investor-tab" data-bs-toggle="pill" href="#"
                    role="tab" aria-controls="pills-investor" aria-selected="false"><b> copy depulicate </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-applicant-tab" data-bs-toggle="pill" href="#" role="tab"
                    aria-controls="pills-applicant" aria-selected="false"><b> customer special interaction</b></a>
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
                    role="tab" aria-controls="pills-licensee" aria-selected="true"><b> save </b></a>
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
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-investor" role="tabpanel" aria-labelledby="pills-investor-tab">
                <x-forms.patent.familypatent
                    id="create-familypatent-modal"
                    class="btn btn-primary btn-sm"
                    :countries="$countries"
                    title="Create familypatent"
                />
                <div id="Devropatent_filter" class="dataTables_filter float-right " ><label>Search<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="Devropatent"></label></div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Family No</th>
                                <th>Status</th>
                                <th>Licensor</th>
                                <th>Internal Title</th>
                                <th>Formal Title</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection