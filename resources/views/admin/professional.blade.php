@extends('layouts.master')
@section('content')
<div class="row mt-3">
    <div class="col-sm-12">
        <!--Striped table-->
        <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
            <h6 class="mb-2">Professional Applications</h6>
            <code class="mb-2">Only professionals </code>
            
            <table class="table table-striped" id="project_table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Progress</th>
                        <th>Application date</th>
                        <th>Approved date</th>
                        <th>Status</th>
                        <th>Details </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Design and Wireframes</td>
                        <td>
                            <div class="progress mt-3" style="height: 7px;">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="40" style="width: 40%"  aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>12 May 2017</td>
                        <td>13 Feb, 2018</td>
                        <td><label class="badge badge-danger badge-pill">Pending</label></td>
                        <td>00</td>
                    </tr>
                    <tr>
                        <td>Web design</td>
                        <td>
                            <div class="progress mt-3" style="height: 7px;">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" style="width: 100%"  aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>13 Feb, 2018</td>
                        <td>10 June, 2018</td>
                        <td><span class="badge badge-success">Completed</span></td>
                        <td>01</td>
                    </tr>
                    <tr>
                        <td>App development</td>
                        <td>
                            <div class="progress mt-3" style="height: 7px;">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="55" style="width: 55%"  aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>03 July, 2018</td>
                        <td>09 November, 2018</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                        <td>02</td>
                    </tr>
                    <tr>
                        <td>App prototyping</td>
                        <td>
                            <div class="progress mt-3" style="height: 7px;">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" style="width: 80%"  aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>31 January, 2018</td>
                        <td>02 September, 2018</td>
                        <td><span class="badge badge-danger">Suspended</span></td>
                        <td>03</td>
                    </tr>
                    <tr>
                        <td>Web development</td>
                        <td>
                            <div class="progress mt-3" style="height: 7px;">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50" style="width: 50%"  aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                        <td>23 October, 2018</td>
                        <td>15 December, 2018</td>
                        <td><span class="badge badge-info">Negotiations</span></td>
                        <td>04</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--/Striped table-->
    </div>
</div>
@endsection