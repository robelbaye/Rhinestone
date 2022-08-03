@extends('portal.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <!-- <h4 class="card-title">Address Book</h4> -->
        <ul class="nav nav-tabs nav-tabs-success" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link text active" id="pills-contacts-tab" data-bs-toggle="pill" href="#pills-contacts" role="tab" aria-controls="pills-contacts" aria-selected="false"><b> Address Book(s) </b></a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-contacts" role="tabpanel" aria-labelledby="pills-contacts-tab">
                <x-forms.contacts.merged id="create-merged-modal" class="btn btn-primary btn-sm" :countries="$countries" title="Create Merged" />
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-success" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link text active" id="pills-Inventors-tab" data-bs-toggle="pill" href="#pills-Inventors" role="tab" aria-controls="pills-Inventors" aria-selected="true"><b> Inventors </b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Applicants-tab" data-bs-toggle="pill" href="#pills-Applicants" role="tab" aria-controls="pills-Applicants" aria-selected="false"><b> Applicants </b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Prior-tab" data-bs-toggle="pill" href="#pills-Prior" role="tab" aria-controls="pills-Prior" aria-selected="false"><b> Prior Art/owner Doc(s) </b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Licensors-tab" data-bs-toggle="pill" href="#pills-Licensors" role="tab" aria-controls="pills-Licensors" aria-selected="false"><b> Licensors </b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Licensees-tab" data-bs-toggle="pill" href="#pills-Licensees" role="tab" aria-controls="pills-Licensees" aria-selected="false"><b> Licensees </b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Consultants-tab" data-bs-toggle="pill" href="#pills-Consultants" role="tab" aria-controls="pills-Consultants" aria-selected="false"><b> Consultants </b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Agents-tab" data-bs-toggle="pill" href="#pills-Agents" role="tab" aria-controls="pills-Agents" aria-selected="false"><b> Agents </b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-paralegals-tab" data-bs-toggle="pill" href="#pills-paralegals" role="tab" aria-controls="pills-paralegals" aria-selected="false"><b> paralegals </b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-Attorneys-tab" data-bs-toggle="pill" href="#pills-Attorneys" role="tab" aria-controls="pills-Attorneys" aria-selected="false"><b> Attorneys </b></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-Inventors" role="tabpanel" aria-labelledby="pills-Inventors-tab">
                            <div class="media">
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
                        </div>
                        <div class="tab-pane fade" id="pills-Applicants" role="tabpanel" aria-labelledby="pills-Applicants-tab">
                            <div class="media">
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
                        </div>
                        <div class="tab-pane fade" id="pills-Prior" role="tabpanel" aria-labelledby="pills-Prior-tab">
                            <h5>Sorry, no owners are available</h5>
                        </div>
                        <div class="tab-pane fade" id="pills-Licensors" role="tabpanel" aria-labelledby="pills-Licensors-tab">
                            <div class="media">
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
                        </div>
                        <div class="tab-pane fade" id="pills-Licensees" role="tabpanel" aria-labelledby="pills-Licensees-tab">
                            <div class="media">
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
                        </div>
                        <div class="tab-pane fade" id="pills-Consultants" role="tabpanel" aria-labelledby="pills-Consultants-tab">
                            <h5>Sorry, no consultants are available</h5>
                        </div>
                        <div class="tab-pane fade" id="pills-Agents" role="tabpanel" aria-labelledby="pills-Agents-tab">
                            <div class="media">
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
                        </div>
                        <div class="tab-pane fade" id="pills-paralegals" role="tabpanel" aria-labelledby="pills-paralegals-tab">
                            <h5>Sorry, no paralegals are available</h5>
                        </div>
                        <div class="tab-pane fade" id="pills-Attorneys" role="tabpanel" aria-labelledby="pills-Attorneys-tab">
                            <h5>Sorry, no attorneys are available</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection