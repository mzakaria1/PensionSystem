@extends('common.layout')
@section('page_title', 'Employees')
@section('page_content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>All Employees <small>All the Employees registered</small></h2>
                <div class="right" align="right ">
                    <a href="{{ URL::to('employees/create') }}" class="btn btn-success">Add New Employee</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>CNIC</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>Designation</th>
                            <th>Department</th>
                            <th>Emp Status</th>
                            <th>Emp Job</th>
                            <th>Emp Type</th>
                            <th>Email</th>
                            <th>Grade</th>
                            <th>Tell No</th>
                            <th>Martial Status</th>
                            <th>City</th>
                            <th>Address</th>
                            <th>Region</th>
                            <th>Domicile</th>
                            <th>Nationality</th>
                            <th>Religion</th>
                            <th>Appointment Date</th>
                            <th>Retiremnet Date</th>
                            <th>Children</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($emp as $e)
                        <tr>
                            <td>{{$e->name}}</td>
                            <td>{{$e->cnic}}</td>
                            <td>{{$e->gender}}</td>
                            <td>{{$e->dob}}</td>
                            <td>{{$e->designation->name}}</td>
                            <td>{{$e->department->name}}</td>
                            <td>{{$e->emp_status}}</td>
                            <td>{{$e->emp_job}}</td>
                            <td>{{$e->emp_type}}</td>
                            <td>{{$e->email}}</td>
                            <td>{{$e->grade}}</td>
                            <td>{{$e->tell_no}}</td>
                            <td>{{$e->martial_status}}</td>
                            <td>{{$e->city}}</td>
                            <td>{{$e->address}}</td>
                            <td>{{$e->region}}</td>
                            <td>{{$e->domicile}}</td>
                            <td>{{$e->nationality}}</td>
                            <td>{{$e->religion}}</td>
                            <td>{{$e->appoint_date}}</td>
                            <td>{{$e->retire_date}}</td>
                            <td>{{$e->children}}</td>
                            <td>{{$e->created_at}}</td>
                            <td>{{$e->updated_at}}</td>
                            <td align="center"><a id="edit_emp" class="btn btn-primary" href="{{URL::to('employees/'.$e->id.'/edit')}}">Edit</a>
                                <a id="delete_emp" type="submit" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection