@extends('portal.layouts.app')

@section('content')
<div class="card">
    <x-forms.disclosure :status="$status" :attorneys="$attorneys" :paralegals="$paralegals" />
    <div class="card-body">
        <div style="display:none;" class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="example" class="table" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Reference Number</th>
                                <th>Title</th>
                                <th>Date File Opened</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($inventionDisclosures as $Disitem)
                            <tr>
                                <td>{{$Disitem->reference_number}}</td>
                                <td>{{$Disitem->title}}</td>
                                <td>{{$Disitem->file_open_date}}</td>
                                <td>
                                    <label class="badge badge-info">{{$Disitem->status}}</label>
                                </td>
                                <td>
                                    <a class="btn btn-outline-warning btn-sm" href="#">
                                        <span class="material-icons" style="font-size: 15px;">edit</span>
                                    </a>
                                    <a class="btn btn-outline-secondary btn-sm" href="#">
                                        <span class="material-icons" style="font-size: 15px;">copy_all</span>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" href="/show">
                                        <span class="material-icons" style="font-size: 15px;">visibility</span>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" href="#">
                                        <span class="material-icons" style="font-size: 15px;">print</span>
                                    </a>
                                    <a class="btn btn-outline-danger btn-sm" href="#">
                                        <span class="material-icons" style="font-size: 15px;">delete</span>
                                    </a>
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
                <a class="nav-link text active" id="pills-Actions-tab" data-bs-toggle="pill" href="#pills-Actions" role="tab" aria-controls="pills-Actions" aria-selected="true"><b> Actions </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Prior-tab" data-bs-toggle="pill" href="#pills-Prior" role="tab" aria-controls="pills-Prior" aria-selected="false"><b> Prior Art/ Cited docs </b></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="pills-Related-tab" data-bs-toggle="pill" href="#pills-Related" role="tab" aria-controls="pills-Related" aria-selected="false"><b> Related Case / Links </b></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="pills-awards-tab" data-bs-toggle="pill" href="#pills-awards" role="tab" aria-controls="pills-awards" aria-selected="false"><b> Inventor Awards </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Documents-tab" data-bs-toggle="pill" href="#pills-Documents" role="tab" aria-controls="pills-Documents" aria-selected="false"><b> Documents </b></a>
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
            <div class="tab-pane fade" id="pills-awards" role="tabpanel" aria-labelledby="pills-awards-tab">
                <div class="media">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Inventor Name</th>
                                <th>Percentage Contributed to Inventions</th>
                                <th>Compensation Calculation</th>
                                <th>Compensation Paid to Inventor</th>
                                <th>Date Compensation Paid</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>TestName</td>
                                <td>95%</td>
                                <td>8054</td>
                                <td>3624</td>
                                <td>01/20/2020</td>
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
                                <th>Inventor ID</th>
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
            <div class="tab-pane fade" id="pills-Title" role="tabpanel" aria-labelledby="pills-Title-tab">
                <div class="media">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Formal Title</th>
                                <th>Internal Title</th>
                                <th>isLicenced</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>001</td>
                                <td>Invention Disclosure Tools</td>
                                <td>Disclosure Tools</td>
                                <td>Yes</td>
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
                                <th>Patentee/Applicant</th>
                                <th>Application No.</th>
                                <th>Country</th>
                                <th>Application Date</th>
                                <th>Publication No.</th>
                                <th>Publication date</th>
                                <th>Grant No.</th>
                                <th>Grant Date</th>
                                <th>Publication author, volume, pages e.t.c</th>
                                <th>Kind code</th>
                                <th>Include in IOS?</th>
                                <th>Submitted as IOS and on date case?</th>
                                <th>On which case ref?</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td>Test User</td>
                                <td>001</td>
                                <td>Germany</td>
                                <td>01/20/2020</td>
                                <td>345345</td>
                                <td>01/20/2020</td>
                                <td>01</td>
                                <td>01/20/2020</td>
                                <td>Redet G. volume II, 178</td>
                                <td>43</td>
                                <td>Yes</td>
                                <td>No</td>
                                <td>Case145</td>
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
                                <th>Reg Number</th>
                                <th>Country</th>
                                <th>Application No</th>
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
                                <th>Date Uploaded</th>
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