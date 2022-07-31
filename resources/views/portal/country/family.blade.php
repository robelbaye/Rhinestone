@extends('portal.layouts.app')

@section('content')
<div class="card">
    <x-forms.country.family :countries="$countries" :users="$users" :paralegals="$paralegals"/>
    <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-success" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link text active" id="pills-Actions-tab" data-bs-toggle="pill" href="#pills-Actions" role="tab" aria-controls="pills-Actions" aria-selected="true"><b> Actions </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-applicant-tab" data-bs-toggle="pill" href="#pills-applicant" role="tab" aria-controls="pills-applicant" aria-selected="false"><b> Applicant </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Inventors-tab" data-bs-toggle="pill" href="#pills-Inventors" role="tab" aria-controls="pills-Inventors" aria-selected="false"><b> Inventors </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Title-tab" data-bs-toggle="pill" href="#pills-Title" role="tab" aria-controls="pills-Title" aria-selected="false"><b> Title </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Invoices-tab" data-bs-toggle="pill" href="#pills-Invoices" role="tab" aria-controls="pills-Invoices" aria-selected="false"><b> Invoices </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Annuities-tab" data-bs-toggle="pill" href="#pills-Annuities" role="tab" aria-controls="pills-Annuities" aria-selected="false"><b> Annuities </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Prior-tab" data-bs-toggle="pill" href="#pills-Prior" role="tab" aria-controls="pills-Prior" aria-selected="false"><b> Prior Art </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Related-tab" data-bs-toggle="pill" href="#pills-Related" role="tab" aria-controls="pills-Related" aria-selected="false"><b> Related Case </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Abstract-tab" data-bs-toggle="pill" href="#pills-Abstract" role="tab" aria-controls="pills-Abstract" aria-selected="false"><b> Abstract & Figure </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Documents-tab" data-bs-toggle="pill" href="#pills-Documents" role="tab" aria-controls="pills-Documents" aria-selected="false"><b> Documents </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Notes-tab" data-bs-toggle="pill" href="#pills-Notes" role="tab" aria-controls="pills-Notes" aria-selected="false"><b>Notes</b></a>
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