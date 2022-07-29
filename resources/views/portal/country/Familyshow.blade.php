@extends('portal.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Family Details</h4>
        <ul class="nav nav-tabs nav-tabs-success" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link text active" id="pills-Actions-tab" data-bs-toggle="pill" href="#pills-Actions" role="tab" aria-controls="pills-Actions" aria-selected="false"><b> Actions </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-applicant-tab" data-bs-toggle="pill" href="#pills-applicant" role="tab" aria-controls="pills-applicant" aria-selected="true"><b> Applicant </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Inventors-tab" data-bs-toggle="pill" href="#pills-Inventors" role="tab" aria-controls="pills-Inventors" aria-selected="true"><b> Inventors </b></a>
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
                <a class="nav-link" id="pills-Related-tab" data-bs-toggle="pill" href="#pills-Related" role="tab" aria-controls="pills-Related" aria-selected="false"><b> Related Case Links </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Abstract-tab" data-bs-toggle="pill" href="#pills-Abstract" role="tab" aria-controls="pills-Abstract" aria-selected="false"><b> Abstract & Figure Field </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Documents-tab" data-bs-toggle="pill" href="#pills-Documents" role="tab" aria-controls="pills-Documents" aria-selected="false"><b> Documents </b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-Notes-tab" data-bs-toggle="pill" href="#pills-Notes" role="tab" aria-controls="pills-Notes" aria-selected="false"><b> Notes </b></a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-Actions" role="tabpanel" aria-labelledby="pills-Actions-tab">
                <div class="media">
                    <h5>Action Will be Available Soon</h5>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-applicant" role="tabpanel" aria-labelledby="pills-applicant-tab">
                <div class="media">
                    <h5>Applicant Will be Available Soon</h5>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Inventors" role="tabpanel" aria-labelledby="pills-Inventors-tab">
                <div class="media">
                    <h5>Inventors Will be Available Soon</h5>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Title" role="tabpanel" aria-labelledby="pills-Title-tab">
                <div class="media">
                    <h5>Title Will be Available Soon</h5>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Invoices" role="tabpanel" aria-labelledby="pills-Invoices-tab">
                <div class="media">
                    <h5>Invoices Will be Available Soon</h5>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Annuities" role="tabpanel" aria-labelledby="pills-Annuities-tab">
                <div class="media">
                    <h5>Annuities Will be Available Soon</h5>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Prior" role="tabpanel" aria-labelledby="pills-Prior-tab">
                <div class="media">
                    <h5>Prior Will be Available Soon</h5>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Related" role="tabpanel" aria-labelledby="pills-Related-tab">
                <div class="media">
                    <h5>Related Will be Available Soon</h5>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Abstract" role="tabpanel" aria-labelledby="pills-Abstract-tab">
                <div class="media">
                    <h5>Abstract Will be Available Soon</h5>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Documents" role="tabpanel" aria-labelledby="pills-Documents-tab">
                <div class="media">
                    <h5>Documents Will be Available Soon</h5>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Notes" role="tabpanel" aria-labelledby="pills-Notes-tab">
                <div class="media">
                    <h5>Notes Will be Available Soon</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection