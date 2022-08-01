@extends('portal.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <!-- <h4 class="card-title">Address Book</h4> -->
        <ul class="nav nav-tabs nav-tabs-success" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link text active" id="pills-contacts-tab" data-bs-toggle="pill" href="#pills-contacts" role="tab" aria-controls="pills-contacts" aria-selected="false"><b> Address Book(s) </b></a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-contacts" role="tabpanel" aria-labelledby="pills-contacts-tab">
                <x-forms.contacts.merged id="create-merged-modal" class="btn btn-primary btn-sm" :countries="$countries" title="Create Merged" />
                <div class="table-responsive">
                    <table id="merged" class="table" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>data-1</th>
                                <th>data-2</th>
                                <th>data-3</th>
                                <th>data-4</th>
                                <th>data-5</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>data-1</td>
                                <td>data-2</td>
                                <td>data-3</td>
                                <td>data-4</td>
                                <td>data-5</td>
                                <td>
                                    <a class="btn btn-outline-warning btn-sm" href="">
                                        <span class="material-icons" style="font-size: 15px;">edit</span>
                                    </a>
                                    <a class="btn btn-outline-secondary btn-sm" href="">
                                        <span class="material-icons" style="font-size: 15px;">copy_all</span>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" href="">
                                        <span class="material-icons" style="font-size: 15px;">visibility</span>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" href="#">
                                        <span class="material-icons" style="font-size: 15px;">print</span>
                                    </a>
                                    <form method="POST" action="" accept_charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button class="btn btn-outline-danger btn-sm" type="submit" title="Delete Invention" onclick="return confirm(&quot;Confirm to Delete ?&quot;)"><span class="material-icons" style="font-size: 15px;">delete</span></button>
                                    </form>
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