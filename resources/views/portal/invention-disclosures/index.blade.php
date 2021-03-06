@extends('portal.layouts.app')

@section('content')
<div class="card">
    <x-forms.disclosure :status="$status" :attorneys="$attorneys" :paralegals="$paralegals" />
    <div class="card-body">
        <div class="row">
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
    </div>
</div>
@endsection
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>