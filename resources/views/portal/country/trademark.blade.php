@extends('portal.layouts.app')

@section('content')
<div class="card">
  <x-forms.country.trademark :users="$users" :countries="$countries" :paralegals="$paralegals" />
    <div class="card-body">
        <h4 class="card-title">Trademark Record's</h4>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-patent" role="tabpanel" aria-labelledby="pills-patent-tab">
                <div class="table-responsive">
                    <table id="Devrotrademark" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Case No</th>
                                <th>Trademark Name</th>
                                <th>Taxes</th>
                                <th>Invoice</th>
                                <th>Applicant</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach ($trademarks as $desitem)
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
                                    <form method="POST" action="{{ route('trademark.destroy',$desitem->id) }}" accept_charset="UTF-8" style="display:inline">
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
    </div>
</div>
@endsection
<script>
    $(document).ready(function() {
        $('#Devrotrademark').DataTable();
    });
</script>