@extends('portal.layouts.app')

@section('content')
<div class="card">
    <x-forms.usersmgt.usersmgt />
    <div class="card-body">
        <h4 class="card-title">Design Record's</h4>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-users" role="tabpanel" aria-labelledby="pills-users-tab">
                <div class="table-responsive">
        <table id="Devrolist" class="table" style="width:100%">
            <thead class="text-center">
                <tr>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>e-Mail</th>
                    <th>Phone</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($users as $userlist)
                <tr>
                    <td>{{$userlist->name}}</td>
                    <td>{{$userlist->lastname}}</td>
                    <td>{{$userlist->email}}</td>
                    <td>{{$userlist->phone}}</td>
                    <td>
                        <a class="btn btn-outline-primary btn-sm" 
                            href="{{ url('/usersmgtcrud/' . $userlist->id . '/edit')}}">
                            <span class="material-icons" style="font-size: 15px;">edit</span>
                        </a>
                        <form method="POST" action="{{ url('/usersmgtcrud' . '/' . $userlist->id) }}" accept_charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button class="btn btn-outline-danger btn-sm" type="submit" title="Delete Users" onclick="return confirm(&quot;Confirm to Delete ?&quot;)"><span class="material-icons" style="font-size: 15px;">delete</span></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        </div>
</div>
@endsection