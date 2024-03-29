@extends('layouts.master')
@section('content')
@if(Session::has('success'))
    <div class="alert alert-success text-center" role="alert">
        {{Session::get('success')}}
    </div>
@endif
<div class="row mt-3">
    <div class="col-sm-12">
        <!--Striped table-->
        <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
            <div class="row border-bottom mb-4">
                <div class="col-sm-8 pt-2">
                    <h6 class="mb-2">Member Type</h6>
                    <code class="mb-2">All categories available</code>
                </div>
                <div class="col-sm-4 text-right pb-3">
                    <button class="btn btn-round btn-theme" data-toggle="modal" data-target="#meberAdd"><i class="fa fa-plus"></i> Add News</button>
                </div>
            </div>
            <table class="table table-striped" id="project_table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($memberType)>0)
                        @foreach ($memberType as $item)
                        <tr>
                            <td class="align-middle">{{$item->id}}</td>
                            <td class="align-middle">{{$item->typeName}}</td>
                            <td class="align-middle text-center">
                                <a href="#"  class="btn text-theme p-1 " data-toggle="modal" data-target='#memberUpdate{{ $item->id }}'><i class="fas fa-edit"></i></a>
                                <a href="/delete-type/{{ $item->id }}" class="btn btn-link text-danger p-1"><i class="fas fa-trash"></i></a>
                            </td>
                            
                        </tr>
                        <div class="modal fade" id="memberUpdate{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Update Member Type</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form class="form-horizontal mt-4 mb-5" method="POST" action="/edit-member-Type/{{ $item->id }}" enctype="multipart/form-data" id="editform">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label class="control-label col-sm-2" for="typeName">Type Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="typeName"  value="{{$item->typeName}}" />
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form> 
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif()
                   
                </tbody>
            </table>
        </div>
        <!--/Striped table-->
        <!--Knowledge Add-->
        <div class="modal fade" id="meberAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Member Type</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-horizontal mt-4 mb-5" method="POST" action="/post-membertype" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="control-label col-sm-2" for="typeName">Type Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="typeName" placeholder="Member Type" required/>
                                </div>
                            </div>
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" >Save</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection