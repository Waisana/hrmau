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
                        <h6 class="mb-2">Knowledge Hub</h6>
                        <code class="mb-2">All updates on knowledge( Site PDFs and Docs)</code>
                    </div>
                    <div class="col-sm-4 text-right pb-3">
                        <button class="btn btn-round btn-theme" data-toggle="modal" data-target="#knowAdd"><i class="fa fa-plus"></i> Add</button>
                    </div>
                </div>
                
                
                <table class="table table-striped" id="theDataTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Document</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($knowledgehub)>0)    
                            @foreach ($knowledgehub as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td class="align-middle">{{$item->title}}</td>
                                    <td class="align-middle">{{$item->description}}</td>
                                    <td class="align-middle">{{$item->document}}</td>
                                    <td class="align-middle text-center">
                                        <a href="#"  class="btn text-theme p-1 " data-toggle="modal" data-target='#knowHubUpdate{{ $item->id }}'><i class="fas fa-edit"></i></a>
                                        <a href="/delete-knowhub/{{ $item->id }}"  class="btn btn-link text-danger p-1"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="knowHubUpdate{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Document Update</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form class="form-horizontal mt-4 mb-5" method="POST" action="/edit-knowHub/{{ $item->id }}" enctype="multipart/form-data" id="editform">
                                                @csrf
                                                {{ method_field('PUT') }}
                                                <div class="modal-body">
                                                    <div class="form-group row">
                                                        <label class="control-label col-sm-2" for="title">Title</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="title" id="title" value="{{$item->title}}" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="control-label col-sm-2" for="description">Description</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" name="description" id="description" value="{{$item->description}}" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="control-label col-sm-2" for="document">Update Document</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" class="form-control"  name="document" value="{{$item->document}}">
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
                        @endif
                    </tbody>
                </table>
            </div>
            <!--/Striped table-->

            <!--Knowledge Add-->
            <div class="modal fade" id="knowAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Document/Knowledge</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="form-horizontal mt-4 mb-5" method="POST" action="/post-knowHub" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="control-label col-sm-2" for="title">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" placeholder="title" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-sm-2" for="description">Description</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class = "form-control" rows = "3" name="description" placeholder = "Description" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-sm-2" for="document">Upload Document</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="document" required>
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