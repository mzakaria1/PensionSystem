@extends('common.layout')
@section('page_title', 'Add New Employee')
@section('page_content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Create Employee</h3>
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
                    <h2>Add a New Employee <small>Add Info</small></h2>
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
                        {{csrf_field()}}
                        <span class="section">Personal Info</span>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Employee Name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" name="name" value="{{old('name')}}" placeholder="e.g Afaq Hassan" required="required" type="text">
                            </div>
                        </div>



                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cnic">CNIC <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="cnic" class="form-control col-md-7 col-xs-12" name="cnic" value="{{old('cnic')}}" data-validate-length-range="13" data-validate-length-range-max="13" placeholder="3740512345678" required="required" type="number">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dob">Date of Birth <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="dob" class="form-control col-md-7 col-xs-12" name="dob" type="date">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender: <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                M: <input type="radio" class="flat" name="gender" id="genderM" value="Male" checked="" required /> F:
                                <input type="radio" class="flat" name="gender" id="genderF" value="Female" />
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tell_no">Telephone Number <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="tel-no" class="form-control col-md-7 col-xs-12" name="tell_no" value="{{old('tell_no')}}" placeholder="e.g 03111234567" required="required" type="number">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="desig_id">Designation <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="desig_id">
                                    <option value="">Choose option</option>
                                    @foreach($design as $dg)
                                    <option value="{{$dg->id}}">{{$dg->name}} {{old('desig_id')}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pay-scale">Grade <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="pay-scale" class="form-control col-md-7 col-xs-12" name="grade" value="{{old('grade')}}" data-validate-length-range="2" placeholder="e.g 17" required="required" type="number">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Department</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="dept_id">
                                    <option>Choose option</option>

                                    @foreach($dept as $d)
                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Martial Status:</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="martial_status">
                                    <option value="">Choose option</option>
                                    <option value="Married">Married</option>
                                    <option value="Single">Single</option>
                                    <option value="Divorced">Divorced</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee Status</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="emp_status">
                                    <option value="">Choose option</option>
                                    <option value="Active">Active</option>
                                    <option value="Retired">Retired</option>
                                    <option value="Deceased">Deceased</option>
                                    <option value="On Leave">On Leave</option>
                                    <option value="Suspend">Suspend</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee Job</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="emp_job">
                                    <option value="">Choose option</option>
                                    <option value="Faculty">Faculty</option>
                                    <option value="Staff">Staff</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee Type</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="emp_type">
                                    <option value="Permanent">Permanent</option>
                                    <option value="Conract">Conract</option>
                                    <option value="Probation">Probation</option>
                                </select>
                            </div>
                        </div>



                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="city" class="form-control col-md-7 col-xs-12" name="city" value="{{old('city')}}" placeholder="e.g Rawalpindi" required="required" type="text">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">Religion <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="religion" class="form-control col-md-7 col-xs-12" name="religion" value="{{old('religion')}}" value="Islam" placeholder="e.g Islam" required="required" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Region</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="region">
                                    <option>Choose option</option>
                                    <option>Punjab</option>
                                    <option>Sindh</option>
                                    <option>Balochistan</option>
                                    <option>Kyber Pakhtunkhawan</option>
                                    <option>Gilgit Baldistan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Domicile</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="domicile">
                                    <option>Choose option</option>
                                    <option>Punjab</option>
                                    <option>Sindh</option>
                                    <option>Balochistan</option>
                                    <option>Kyber Pakhtunkhawan</option>
                                    <option>Gilgit Baldistan</option>
                                </select>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="country">Nationality
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="nationality" class="form-control col-md-7 col-xs-12" name="nationality" value="Pakistani" type="text">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nationality">Children <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="children" class="form-control col-md-7 col-xs-12" name="children" value="{{old('children')}}" placeholder="e.g 4" required="required" type="number">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="per-addr">Address
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea name="address" id="textarea" required="required" value="{{old('address')}}" class="form-control col-md-7 col-xs-12"></textarea>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" id="email" name="email" value="{{old('email')}}" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="appoint_date">Appointment Date <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="date" data-date="" data-date-format="YYYY-MM-DD" id="appoint_date" name="appoint_date" value="{{old('appoint_date')}}" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Retirement Date <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="date" data-date="" data-date-format="YYYY-MM-DD" id="retire_date" name="retire_date" value="{{old('retire_date')}}" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <a href="{{ URL::to('employees') }}" class="btn btn-primary">Cancel</a>
                                <button type="submit" class="btn btn-success">Create Employee</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection