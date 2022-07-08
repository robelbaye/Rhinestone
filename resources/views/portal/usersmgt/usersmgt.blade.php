@extends('portal.layouts.app')
@section('content')
    <div class="table-responsive">
        <table id="Devrolist" class="table table-striped table-bordered" style="width:100%">
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
                        <a class="btn btn-outline-primary btn-sm" href="#">
                            <span class="material-icons">visibility</span>
                        </a>
                                        <a class="btn btn-outline-warning btn-sm"
                                            href="#">
                                            <span class="material-icons">edit</span>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm"
                                            href="#">
                                            <span class="material-icons">key</span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
@endsection