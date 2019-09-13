@extends('common.layout')
@section('page_title', 'Edit Employee')
@section('page_content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Edit Employee</h3>
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
                <div class="x_title">
                    <h2>Edit an Employee <small>Edit Info</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <form action="{{ route('employees.store') }}" method="POST" class="form-horizontal form-label-left">
                        @method('PATCH')
                        @csrf
                        <span class="section">Personal Info</span>

                        <div class="item form-group">

                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Employee Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" name="name" value="{{ $emp->name }}" placeholder="e.g Afaq Hassan" required="required" type="text">
                            </div>
                        </div>



                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cnic">CNIC <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="cnic" class="form-control col-md-7 col-xs-12" name="cnic" value="{{ $emp->cnic }}" data-validate-length-range="13" data-validate-length-range-max="13" placeholder="3740512345678" required="required" type="number">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dob">Date of Birth <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="dob" class="form-control col-md-7 col-xs-12" name="dob" type="date" value="{{ $emp->dob }}">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender: <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                M: <input type="radio" class="flat" name="gender" id="genderM" value="Male" required {{ $emp->gender == 'Male' ? 'checked' : '' }} /> F:
                                <input type="radio" class="flat" name="gender" id="genderF" value="Female" {{ $emp->gender == 'Female' ? 'checked' : '' }} />
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tell_no">Telephone Number <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="tel-no" class="form-control col-md-7 col-xs-12" name="tell_no" value="{{ $emp->tell_no }}" placeholder="e.g 03111234567" required="required" type="number">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="desig_id">Designation <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="desig_id">
                                    @foreach($design as $dg)
                                    <option value="{{$dg->id}}" {{ $emp->desig_id == $dg->id ? 'selected' : '' }}>{{$dg->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pay-scale">Grade <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="pay-scale" class="form-control col-md-7 col-xs-12" name="grade" value="{{ $emp->grade }}" data-validate-length-range="2" placeholder="e.g 17" required="required" type="number">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Department</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="dept_id">
                                    @foreach($dept as $d)
                                    <option value="{{$d->id}}" {{ $emp->dept_id == $d->id ? 'selected' : '' }}>{{$d->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Martial Status:</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="martial_status">
                                    <option value="Married" {{ $emp->martial_status == 'Married' ? 'selected' : '' }}>Married</option>
                                    <option value="Single" {{ $emp->martial_status == 'Single' ? 'selected' : '' }}>Single</option>
                                    <option value="Divorced" {{ $emp->martial_status == 'Divorced' ? 'selected' : '' }}>Divorced</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee Status</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="emp_status">
                                    <option value="Active" {{ $emp->emp_status == 'Active' ? 'selected' : '' }}>Active</option>
                                    <option value="Retired" {{ $emp->emp_status == 'Retired' ? 'selected' : '' }}>Retired</option>
                                    <option value="Deceased" {{ $emp->emp_status == 'Deceased' ? 'selected' : '' }}>Deceased</option>
                                    <option value="On Leave" {{ $emp->emp_status == 'On Leave' ? 'selected' : '' }}>On Leave</option>
                                    <option value="Suspend" {{ $emp->emp_status == 'Suspend' ? 'selected' : '' }}>Suspend</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee Job</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="emp_job">
                                    <option value="Faculty" {{ $emp->emp_job == 'Faculty' ? 'selected' : '' }}>Faculty</option>
                                    <option value="Staff" {{ $emp->emp_job == 'Staff' ? 'selected' : '' }}>Staff</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee Type</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="emp_type">
                                    <option value="Permanent" {{ $emp->emp_type == 'Permanent' ? 'selected' : '' }}>Permanent</option>
                                    <option value="Contract" {{ $emp->emp_type == 'Conract' ? 'selected' : '' }}>Conract</option>
                                    <option value="Probation" {{ $emp->emp_type == 'Probation' ? 'selected' : '' }}>Probation</option>
                                </select>
                            </div>
                        </div>



                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="city" class="form-control col-md-7 col-xs-12" name="city" value="{{ $emp->city }}" placeholder="e.g Rawalpindi" required="required" type="text">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">Religion <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="religion" class="form-control col-md-7 col-xs-12" name="religion" value="{{ $emp->religion }}" placeholder="e.g Islam" required="required" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Region</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="region">
                                    <option {{ $emp->region == 'Punjab' ? 'selected' : '' }}>Punjab</option>
                                    <option {{ $emp->region == 'Islamabad Capital' ? 'selected' : '' }}>Islamabad Capital</option>
                                    <option {{ $emp->region == 'Sindh' ? 'selected' : '' }}>Sindh</option>
                                    <option {{ $emp->region == 'Balochistan' ? 'selected' : '' }}>Balochistan</option>
                                    <option {{ $emp->region == 'KPK' ? 'selected' : '' }}>KPK</option>
                                    <option {{ $emp->region == 'Gilgit Baldistan' ? 'selected' : '' }}>Gilgit Baldistan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Domicile</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="domicile">
                                    <option {{ $emp->domicile == 'Punjab' ? 'selected' : '' }}>Punjab</option>
                                    <option {{ $emp->domicile == 'Islamabad Capital' ? 'selected' : '' }}>Islamabad Capital</option>
                                    <option {{ $emp->domicile == 'Sindh' ? 'selected' : '' }}>Sindh</option>
                                    <option {{ $emp->domicile == 'Balochistan' ? 'selected' : '' }}>Balochistan</option>
                                    <option {{ $emp->domicile == 'Kyber Pakhtunkhawan' ? 'selected' : '' }}>Kyber Pakhtunkhawan</option>
                                    <option {{ $emp->domicile == 'Gilgit Baldistan' ? 'selected' : '' }}>Gilgit Baldistan</option>
                                </select>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="country">Nationality
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="nationality" class="form-control col-md-7 col-xs-12" name="nationality" value="Pakistani" type="text" disabled>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="children">Children <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="children" class="form-control col-md-7 col-xs-12" name="children" value="{{ $emp->children }}" placeholder="e.g 4" required="required" type="number">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea name="address" id="textarea" required="required" class="form-control col-md-7 col-xs-12">{{ $emp->address }}</textarea>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" id="email" name="email" value="{{ $emp->email }}" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="appoint_date">Appointment Date <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="date" data-date="" data-date-format="YYYY-MM-DD" id="appoint_date" name="appoint_date" value="{{ $emp->appoint_date }}" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Retirement Date <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="date" data-date="" data-date-format="YYYY-MM-DD" id="retire_date" name="retire_date" value="{{ $emp->retire_date }}" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <a href="{{ URL::to('employees') }}" class="btn btn-primary">Cancel</a>
                                <button type="submit" class="btn btn-success">Update Employee</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection