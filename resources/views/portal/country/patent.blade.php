@extends('portal.layouts.app')

@section('content')
<div class="card">
  <x-forms.country.patent :users="$users" :countries="$countries" :paralegals="$paralegals" />
    <div class="card-body">
        <h4 class="card-title">Patent Record's</h4>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-patent" role="tabpanel" aria-labelledby="pills-patent-tab">
                <div class="table-responsive">
                    <table id="Devropatent" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Family No</th>
                                <th>Internal Title</th>
                                <th>Formal Title</th>
                                <th>Type of Filing</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>013/2022</td>
                                <td>Auto Fill Title</td>
                                <td>Test Title</td>
                                <td>Patent</td>
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
        $('#Devropatent').DataTable();
    });
</script>