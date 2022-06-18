@extends('portal.layouts.app')

@section('content')
<div class="card">
    <x-forms.country.design :countries="$countries" :users="$users" :paralegals="$paralegals" />
    <div class="card-body">
        <h4 class="card-title">Design Record's</h4>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-design" role="tabpanel" aria-labelledby="pills-patent-tab">
                <div class="table-responsive">
                    <table id="Devrodesign" class="table table-striped table-bordered" style="width:100%">
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
                            <tr>
                                <td>012/2022</td>
                                <td>Ethiopia</td>
                                <td>Test Title</td>
                                <td>Design</td>
                                <td>
                                    <label class="badge badge-info">Opened</label>
                                </td>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm"
                                        href="#">
                                        View
                                    </a>
                                    <a class="btn btn-outline-warning btn-sm"
                                        href="#">
                                        Edit
                                    </a>
                                    <a class="btn btn-outline-danger btn-sm"
                                        href="#">
                                        Delete
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