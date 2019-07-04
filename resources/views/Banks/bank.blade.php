@extends('common.layout')
@section('page_title', 'Banks')
@section('page_content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Banks <small>All Information</small></h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>All Banks<small>Info</small></h2>
                        <div class="right" align="right ">
                            <a href="{{ URL::to('banks/create') }}" class="btn btn-success">Add New Bank</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Bank Name</th>
                                    <th>Address</th>
                                    <th>Branch Code</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($banks as $bank)
                                <tr>
                                    <td>{{$bank->name}}</td>
                                    <td>{{$bank->address}}</td>
                                    <td>{{$bank->branch_code}}</td>
                                    <td>{{$bank->created_at}}</td>
                                    <td align="center"><a id="edit_bank" class="btn btn-primary" href="{{URL::to('banks/'. $bank->id .'/edit')}}">Edit</a>
                                        <a id="delete_bank" type="submit" class="btn btn-danger">Delete</a></td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection