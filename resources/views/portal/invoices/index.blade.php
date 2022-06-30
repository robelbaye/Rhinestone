@extends('portal.layouts.app')

@section('content')
<div class="card">
    <x-forms.invoices.invoice :countries="$countries" :users="$users" :paralegals="$paralegals" />
    <div class="card-body">
        <h4 class="card-title">Invoice Record's</h4>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-design" role="tabpanel" aria-labelledby="pills-patent-tab">
                <div class="table-responsive">
                    <table id="Devrodesign" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Invoice No</th>
                                <th>Invoiced to</th>
                                <th>Invoiced By</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>CA-00000001</td>
                                <td>Robel Baye</td>
                                <td>Devro</td>
                                <td>29/06/2022</td>
                                <td>11500.00</td>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm"
                                        href="#">
                                        <span class="material-icons">visibility</span>
                                    </a>
                                    <a class="btn btn-outline-warning btn-sm"
                                        href="#">
                                        <span class="material-icons">delete</span>
                                    </a>
                                    <a class="btn btn-outline-secondary btn-sm"
                                        href="#">
                                        <span class="material-icons">print</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>CA-00000002</td>
                                <td>Yimam</td>
                                <td>Devro</td>
                                <td>29/06/2022</td>
                                <td>111,500.00</td>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm"
                                        href="#">
                                        <span class="material-icons">visibility</span>
                                    </a>
                                    <a class="btn btn-outline-warning btn-sm"
                                        href="#">
                                        <span class="material-icons">delete</span>
                                    </a>
                                    <a class="btn btn-outline-secondary btn-sm"
                                        href="#">
                                        <span class="material-icons">print</span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    $(document).ready(function() {
        $('#Devrodesign').DataTable();
    });
</script>