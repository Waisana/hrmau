@extends('layouts.master')
@section('content')
<div class="row mt-3">
    <div class="col-sm-12">
        <!--Striped table-->
        <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
            <h6 class="mb-2">Cooperate Applications</h6>
            <code class="mb-2">Only Cooperates </code>
            
            <table class="table table-striped" id="project_table">
                <thead>
                    <tr>
                        <th>Org Name</th>
                        <th>Title</th>
                        <th>Staff Total</th>
                        <th>Interest</th>
                        <th>Date Applied</th>
                        <th>Date Approved</th>
                        <th>Status</th>
                        <th>Details </th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($cooperate)>0)
                        @foreach ($cooperate as $item)
                        <tr>
                            <td>{{$item->orgName}}/td>
                            <td>{{$item->title}}/td>
                            <td>{{$item->noOfstaff}}/td>
                            <td>{{$item->interest}}/td>
                            <td>{{$item->doApp}}/td>
                            <td>{{$item->dapproved}}/td>
                            <td><label class="badge badge-danger badge-pill">{{$item->approve}}</label></td>
                            <td>Detail<</td>
                        </tr>
                        @endforeach
                    @endif()
                   
                </tbody>
            </table>
        </div>
        <!--/Striped table-->
    </div>
</div>
@endsection