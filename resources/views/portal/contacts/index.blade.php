@extends('portal.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Address Book</h4>
        <ul class="nav nav-tabs nav-tabs-success" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link text active" id="pills-investor-tab" data-bs-toggle="pill" href="#pills-investor" role="tab" aria-controls="pills-investor" aria-selected="false"><b> Inventor(s) </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-applicant-tab" data-bs-toggle="pill" href="#pills-applicant" role="tab" aria-controls="pills-applicant" aria-selected="true"><b> Applicant </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-owner-tab" data-bs-toggle="pill" href="#pills-owner" role="tab" aria-controls="pills-owner" aria-selected="false"><b> Prior Art/owner Doc(s) </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-licensor-tab" data-bs-toggle="pill" href="#pills-licensor" role="tab" aria-controls="pills-licensor" aria-selected="false"><b> licensor(s) </b></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="pills-licensee-tab" data-bs-toggle="pill" href="#pills-licensee" role="tab" aria-controls="pills-licensee" aria-selected="false"><b> Licensee(s) </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-consultant-tab" data-bs-toggle="pill" href="#pills-consultant" role="tab" aria-controls="pills-consultant" aria-selected="false"><b> Consultant(s) </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-agent-tab" data-bs-toggle="pill" href="#pills-agent" role="tab" aria-controls="pills-agent" aria-selected="false"><b> Agents/Counsel </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-paralegal-tab" data-bs-toggle="pill" href="#pills-paralegal" role="tab" aria-controls="pills-paralegal" aria-selected="false"><b> Paralegal(s) </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-attorney-tab" data-bs-toggle="pill" href="#pills-attorney" role="tab" aria-controls="pills-attorney" aria-selected="false"><b> Attorney(s) </b></a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-investor" role="tabpanel" aria-labelledby="pills-investor-tab">
                <x-forms.contacts.investor id="create-investor-modal" class="btn btn-primary btn-sm" :countries="$countries" title="Create Investor" />
                <div class="table-responsive">
                    <table id="Devroinvestor" class="table" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Inventors ID</th>
                                <th>Surname</th>
                                <th>Given Name(s)</th>
                                <th>Nationality</th>
                                <th>Inventors Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($investor as $invsitem)
                            <tr>
                                <td>{{$invsitem->InvestorID}}</td>
                                <td>{{$invsitem->InvestorLastName}}</td>
                                <td>{{$invsitem->InvestorGivenName}}</td>
                                <td>{{$invsitem->Nationality}}</td>
                                <td>{{$invsitem->InvestorPhone}}</td>
                                <td>
                                    <a class="btn btn-outline-warning btn-sm" href="{{ url('/inventioncrud/' . $invsitem->id . '/edit')}}">
                                        <span class="material-icons" style="font-size: 15px;">edit</span>
                                    </a>
                                    <a class="btn btn-outline-secondary btn-sm" href="{{ url('/inventioncrud/' . $invsitem->id . '/edit')}}">
                                        <span class="material-icons" style="font-size: 15px;">copy_all</span>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" href="/showc">
                                        <span class="material-icons" style="font-size: 15px;">visibility</span>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" href="#">
                                        <span class="material-icons" style="font-size: 15px;">print</span>
                                    </a>
                                    <form method="POST" action="{{ url('/inventioncrud' . '/' . $invsitem->id) }}" accept_charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button class="btn btn-outline-danger btn-sm" type="submit" title="Delete Invention" onclick="return confirm(&quot;Confirm to Delete ({{$invsitem->InvestorLastName}}) ?&quot;)"><span class="material-icons" style="font-size: 15px;">delete</span></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-applicant" role="tabpanel" aria-labelledby="pills-applicant-tab">
                <x-forms.contacts.applicant id="create-contact-modal" class="btn btn-primary btn-sm" :countries="$countries" title="Create Applicant" />
                <div class="table-responsive">
                    <table id="Devroapplicant" class="table" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Nationality</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($applicant as $appsitem)
                            <tr>
                                <td>{{$appsitem->applicant_name}}</td>
                                <td>{{$appsitem->applicant_email}}</td>
                                <td>{{$appsitem->applicant_phone}}</td>
                                <td>{{$appsitem->applicant_nationality}}</td>
                                <td>
                                    <label class="badge badge-info">{{$appsitem->applicant_status}}</label>
                                </td>
                                <td>
                                    <a class="btn btn-outline-warning btn-sm" href="{{ url('/apptcrud/' . $appsitem->id . '/edit')}}">
                                        <span class="material-icons" style="font-size: 15px;">edit</span>
                                    </a>
                                    <a class="btn btn-outline-secondary btn-sm" href="{{ url('/apptcrud/' . $appsitem->id . '/edit')}}">
                                        <span class="material-icons" style="font-size: 15px;">copy_all</span>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" href="/showc">
                                        <span class="material-icons" style="font-size: 15px;">visibility</span>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" href="#">
                                        <span class="material-icons" style="font-size: 15px;">print</span>
                                    </a>
                                    <form method="POST" action="{{ url('/apptcrud' . '/' . $appsitem->id) }}" accept_charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button class="btn btn-outline-danger btn-sm" type="submit" title="Delete Applicant" onclick="return confirm(&quot;Confirm to Delete ({{$appsitem->applicant_email}}) ?&quot;)"><span class="material-icons" style="font-size: 15px;">delete</span></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-owner" role="tabpanel" aria-labelledby="pills-owner-tab">
                <h5>Sorry, no owners are available</h5>
            </div>
            <div class="tab-pane fade" id="pills-licensor" role="tabpanel" aria-labelledby="pills-licensor-tab">
                <x-forms.contacts.licensor id="create-licensor-modal" class="btn btn-primary btn-sm" :countries="$countries" title="Create Licensor" />
                <div class="table-responsive">
                    <table id="Devrolicensor" class="table" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Nationality</th>
                                <th>Date of Contract</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($licensor as $licensoritem)
                            <tr>
                                <td>{{$licensoritem->Last_Name}}&nbsp;&nbsp;{{$licensoritem->Given_Name}}</td>
                                <td>{{$licensoritem->Email_of_Future_Contact}}</td>
                                <td>{{$licensoritem->Phone_Number}}</td>
                                <td>{{$licensoritem->Nationality}}</td>
                                <td>{{$licensoritem->Date_of_Contract}}</td>
                                <td>
                                    <a class="btn btn-outline-warning btn-sm" href="{{ url('/licensorcrud/' . $licensoritem->id . '/edit')}}">
                                        <span class="material-icons" style="font-size: 15px;">edit</span>
                                    </a>
                                    <a class="btn btn-outline-secondary btn-sm" href="{{ url('/licensorcrud/' . $licensoritem->id . '/edit')}}">
                                        <span class="material-icons" style="font-size: 15px;">copy_all</span>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" href="/showc">
                                        <span class="material-icons" style="font-size: 15px;">visibility</span>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" href="#">
                                        <span class="material-icons" style="font-size: 15px;">print</span>
                                    </a>
                                    <form method="POST" action="{{ url('/licensorcrud' . '/' . $licensoritem->id) }}" accept_charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button class="btn btn-outline-danger btn-sm" type="submit" title="Delete Licensor" onclick="return confirm(&quot;Confirm to Delete ({{$licensoritem->Email_of_Future_Contact}}) ?&quot;)"><span class="material-icons" style="font-size: 15px;">delete</span></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-licensee" role="tabpanel" aria-labelledby="pills-licensee-tab">
                <x-forms.contacts.licensee id="create-licensee-modal" class="btn btn-primary btn-sm" :countries="$countries" title="Create Licensee" />
                <div class="table-responsive">
                    <table id="Devrolicensee" class="table" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Nationality</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($licensee as $licenseeitem)
                            <tr>
                                <td>{{$licenseeitem->Licensee_Name}}</td>
                                <td>{{$licenseeitem->Licensee_Email}}</td>
                                <td>{{$licenseeitem->Licensee_Phone}}</td>
                                <td>{{$licenseeitem->Nationality}}</td>
                                <td>
                                    <a class="btn btn-outline-warning btn-sm" href="{{ url('/licenseecrud/' . $licenseeitem->id . '/edit')}}">
                                        <span class="material-icons" style="font-size: 15px;">edit</span>
                                    </a>
                                    <a class="btn btn-outline-secondary btn-sm" href="{{ url('/licenseecrud/' . $licenseeitem->id . '/edit')}}">
                                        <span class="material-icons" style="font-size: 15px;">copy_all</span>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" href="/showc">
                                        <span class="material-icons" style="font-size: 15px;">visibility</span>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" href="#">
                                        <span class="material-icons" style="font-size: 15px;">print</span>
                                    </a>
                                    <form method="POST" action="{{ url('/licenseecrud' . '/' . $licenseeitem->id) }}" accept_charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button class="btn btn-outline-danger btn-sm" type="submit" title="Delete Licensee" onclick="return confirm(&quot;Confirm to Delete ({{$licenseeitem->Licensee_Email}}) ?&quot;)"><span class="material-icons" style="font-size: 15px;">delete</span></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-consultant" role="tabpanel" aria-labelledby="pills-consultant-tab">
                <div class="media">
                    <h5>Sorry, no consultants are available</h5>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-agent" role="tabpanel" aria-labelledby="pills-agent-tab">
                <x-forms.contacts.agent id="create-agent-modal" class="btn btn-primary btn-sm" :countries="$countries" title="Create Agent" />
                <div class="table-responsive">
                    <table id="Devroagent" class="table" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Nationality</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($agent as $agentitem)
                            <tr>
                                <td>{{$agentitem->agent_name}}</td>
                                <td>{{$agentitem->agent_email}}</td>
                                <td>{{$agentitem->agent_phone}}</td>
                                <td>{{$agentitem->agent_nationality}}</td>
                                <td>
                                    <label class="badge badge-info">{{$agentitem->agent_status}}</label>
                                </td>
                                <td>
                                    <a class="btn btn-outline-warning btn-sm" href="{{ url('/agentcrud/' . $agentitem->id . '/edit')}}">
                                        <span class="material-icons" style="font-size: 15px;">edit</span>
                                    </a>
                                    <a class="btn btn-outline-secondary btn-sm" href="{{ url('/agentcrud/' . $agentitem->id . '/edit')}}">
                                        <span class="material-icons" style="font-size: 15px;">copy_all</span>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" href="/showc">
                                        <span class="material-icons" style="font-size: 15px;">visibility</span>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" href="#">
                                        <span class="material-icons" style="font-size: 15px;">print</span>
                                    </a>
                                    <form method="POST" action="{{ url('/agentcrud' . '/' . $agentitem->id) }}" accept_charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button class="btn btn-outline-danger btn-sm" type="submit" title="Delete Agent" onclick="return confirm(&quot;Confirm to Delete ({{$agentitem->agent_email}}) ?&quot;)"><span class="material-icons" style="font-size: 15px;">delete</span></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-paralegal" role="tabpanel" aria-labelledby="pills-paralegal-tab">
                <h5>Sorry, no paralegals are available</h5>
            </div>
            <div class="tab-pane fade" id="pills-paralegal" role="tabpanel" aria-labelledby="pills-paralegal-tab">
                <h5>Sorry, no attorneys are available</h5>
            </div>
        </div>
    </div>
</div>
@endsection