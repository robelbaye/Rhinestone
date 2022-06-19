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
                            @foreach ($patents as $patitem)
                            <tr>
                                <td>{{$patitem->FamilyNo}}</td>
                                <td>{{$patitem->InternalTitle}}</td>
                                <td>{{$patitem->FormalTitle}}</td>
                                <td>{{$patitem->TypeofFiling}}</td>
                                <td>{{$patitem->Status}}</td>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm"
                                        href="#">
                                        <span class="material-icons">visibility</span>
                                    </a>
                                    <a class="btn btn-outline-warning btn-sm"
                                        href="#">
                                        <span class="material-icons">edit</span>
                                    </a>
                                    <a class="btn btn-outline-danger btn-sm"
                                        href="#">
                                        <span class="material-icons">delete</span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
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