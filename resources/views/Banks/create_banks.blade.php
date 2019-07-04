@extends('common.layout')
@section('page_title', 'Add New Bank')
@section('page_content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Bank</h3>
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

    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                <div class="x_title">
                    <h2>Add a New Bank <small>Add Info</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <form method="post" action="{{ route('banks.store') }}" class="form-horizontal form-label-left">
                        @csrf
                        <span class="section">Bank Info</span>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Bank Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-words="2" name="name" placeholder="e.g Allied Bank" required="required" type="text">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="f-name">Branch code <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="branch_code" class="form-control col-md-7 col-xs-12" name="branch_code" placeholder="e.g Al-645" required="required" type="text">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="temp-addr">Bank Address
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea id="address" name="address" class="form-control col-md-7 col-xs-12"></textarea>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <a href="{{ URL::to('banks') }}" class="btn btn-primary">Cancel</a>
                                <button type="submit" class="btn btn-success">Add Bank</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection