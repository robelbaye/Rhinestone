@extends('portal.layouts.app')

@section('content')
<div class="card">
    <x-forms.country.design :countries="$countries" :users="$users" :paralegals="$paralegals" />
    <div class="card-body">
        <div class="tab-content" id="pills-tabContent" style="display: none;">
            <div class="tab-pane fade show active" id="pills-design" role="tabpanel" aria-labelledby="pills-patent-tab">
                <div class="table-responsive">
                    <table id="Devrodesign" class="table" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Case No</th>
                                <th>Country</th>
                                <th>Formal Title</th>
                                <th>Type Of Filing</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($designs as $desitem)
                            <tr>
                                <td>{{$desitem->CaseNo}}</td>
                                <td>{{$desitem->Country}}</td>
                                <td>{{$desitem->FormalTitle}}</td>
                                <td>{{$desitem->TypeofFiling}}</td>
                                <td>{{$desitem->Status}}</td>
                                <td>
                                    <a class="btn btn-outline-warning btn-sm" href="{{ url('/designcrud/' . $desitem->id . '/edit')}}">
                                        <span class="material-icons" style="font-size: 15px;">edit</span>
                                    </a>
                                    <a class="btn btn-outline-secondary btn-sm" href="{{ url('/designcrud/' . $desitem->id . '/edit')}}">
                                        <span class="material-icons" style="font-size: 15px;">copy_all</span>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" href="#">
                                        <span class="material-icons" style="font-size: 15px;">print</span>
                                    </a>
                                    <form method="POST" action="{{ url('/designcrud' . '/' . $desitem->id) }}" accept_charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button class="btn btn-outline-danger btn-sm" type="submit" title="Delete Patent" onclick="return confirm(&quot;Confirm to Delete ({{$desitem->CaseNo}}) ?&quot;)"><span class="material-icons" style="font-size: 15px;">delete</span></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs nav-tabs-success" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link text active" id="pills-Actions-tab" data-bs-toggle="pill"
                   href="#pills-Actions" role="tab" aria-controls="pills-Actions" aria-selected="true"><b> Actions </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Inventors-tab" data-bs-toggle="pill" href="#pills-Inventors" role="tab"
                   aria-controls="pills-Inventors" aria-selected="false"><b> Designs </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-applicant-tab" data-bs-toggle="pill" href="#pills-applicant"
                   role="tab" aria-controls="pills-applicant" aria-selected="false"><b> Applicant(s) </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Title-tab" data-bs-toggle="pill" href="#pills-Title" role="tab"
                   aria-controls="pills-Title" aria-selected="false"><b> Figures </b></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="pills-Notes-tab" data-bs-toggle="pill" href="#pills-Notes" role="tab"
                   aria-controls="pills-Notes" aria-selected="false"><b>Notes</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Annuities-tab" data-bs-toggle="pill" href="#pills-Annuities" role="tab"
                   aria-controls="pills-Annuities" aria-selected="false"><b> Annuities </b></a>
            </li>

        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-Actions" role="tabpanel" aria-labelledby="pills-Actions-tab">
                <div class="media">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Action Code</th>
                                <th>Action Spellout</th>
                                <th>Due Date</th>
                                <th>Taken Date</th>
                                <th>Completed Date</th>
                                <th>Responsible Person</th>
                                <th>Notes</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>001/11</td>
                                <td>TEST</td>
                                <td>29/07/2022</td>
                                <td>30/07/2022</td>
                                <td>1/08/2022</td>
                                <td>Demo</td>
                                <td>TEST Note</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-applicant" role="tabpanel" aria-labelledby="pills-applicant-tab">
                <div class="media">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Applicant ID</th>
                                <th>Surname</th>
                                <th>Given Name(s)</th>
                                <th>Nationality</th>
                                <th>Employment Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>TEST-001</td>
                                <td>TEST Surname</td>
                                <td>TEST Given Name</td>
                                <td>Ethiopian</td>
                                <td>Active</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Inventors" role="tabpanel" aria-labelledby="pills-Inventors-tab">
                <div class="media">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Case No</th>
                                <th>Country</th>
                                <th>Formal Title</th>
                                <th>Type Of Filing</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>TEST-001</td>
                                <td>TEST Surname</td>
                                <td>TEST Given Name</td>
                                <td>Ethiopian</td>
                                <td>Active</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Title" role="tabpanel" aria-labelledby="pills-Title-tab">
                <div class="media">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Figure</th>
                                <th>No Of Figures</th>
                                <th>Views Of Figures</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <img src="data:image/png;base64,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"
                                         alt="" >
                                </td>
                                <td>1</td>
                                <td>4</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Invoices" role="tabpanel" aria-labelledby="pills-Invoices-tab">
                <div class="media">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Invoice No</th>
                                <th>Items</th>
                                <th>Customer Name</th>
                                <th>Address</th>
                                <th>Payment Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>CA-0000012</td>
                                <td>Service</td>
                                <td>Jems</td>
                                <td>Kenya</td>
                                <td>Pending</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Annuities" role="tabpanel" aria-labelledby="pills-Annuities-tab">
                <div class="media">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Result-1</th>
                                <th>Address-2</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>001</td>
                                <td>Demo Result</td>
                                <td>Demo Address</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Prior" role="tabpanel" aria-labelledby="pills-Prior-tab">
                <div class="media">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Owners Name</th>
                                <th>Address</th>
                                <th>Nationality</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>001</td>
                                <td>Demo Name</td>
                                <td>Asefa Teruneh Street</td>
                                <td>Ethiopia</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Related" role="tabpanel" aria-labelledby="pills-Related-tab">
                <div class="media">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Reference Number</th>
                                <th>Country</th>
                                <th>Application Number</th>
                                <th>Application Date</th>
                                <th>Inventors</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>23456121</td>
                                <td>UK</td>
                                <td>rt4523I2</td>
                                <td>12/06/2022</td>
                                <td>Inventor</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Abstract" role="tabpanel" aria-labelledby="pills-Abstract-tab">
                <div class="media">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>No Of Drawing</th>
                                <th>No Of View</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>0001</td>
                                <td>1</td>
                                <td>4</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Documents" role="tabpanel" aria-labelledby="pills-Documents-tab">
                <div class="media">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Document</th>
                                <th>Name of Document</th>
                                <th>Upload Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>File.Docx</td>
                                <td>Request</td>
                                <td>20/07/2022</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Notes" role="tabpanel" aria-labelledby="pills-Notes-tab">
                <div class="media">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Note</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, molestias in quam corrupti nobis provident doloribus quia cumque vel suscipit commodi blanditiis nostrum labore atque laboriosam sint, hic dolorem earum?</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection