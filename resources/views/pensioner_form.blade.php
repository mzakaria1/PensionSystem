@extends('common.layout')
@section('page_title', 'Pensioner Form')
@section('page_content')
<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Make Employee a Pensioner</h3>
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
                    <h2>All Employees <small>Make Pensioner from these Employees</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Emplyee ID#</th>
                          <th>Name</th>
                          <th>CNIC</th>
                          <th>Status</th>
                          <th>Designation</th>
                          <th>Department</th>
                          <th>Pay Scale</th>
                          <th>Telephone</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Haroon Khan</td>
                          <td>3740512345678</td>
                          <td>Active</td>
                          <td>Senotypist</td>
                          <td>Education</td>
                          <td>16</td>
                          <td>03215123456</td>
                          <td><button id="make-pen" type="submit" class="btn btn-success">Make Pensioner</button></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Bilal Jadoon</td>
                          <td>3740512345678</td>
                          <td>Retired</td>
                          <td>Nil</td>
                          <td>Education</td>
                          <td>Nill</td>
                          <td>03215123456</td>
                          <td><button id="make-pen" type="submit" class="btn btn-success">Make Pensioner</button></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Talha Khanzada</td>
                          <td>3740512345678</td>
                          <td>Deceased</td>
                          <td>Lecturar</td>
                          <td>Education</td>
                          <td>17</td>
                          <td>03215123456</td>
                          <td><button id="make-pen" type="submit" class="btn btn-success">Make Pensioner</button></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add a New Pensioner <small>Add some new Info</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate>
                      <span class="section">Personal Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="e_id">Employee id <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="e_id" class="form-control col-md-7 col-xs-12" name="e_id" value="2" disabled type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Employee Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="e.g Afaq Hassan" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="f-name">Father's/Husband's Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="f-name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="f-name" placeholder="e.g M Nazir" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nationality">Nationality <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nationality" class="form-control col-md-7 col-xs-12"   name="nationality" placeholder="Pakistani" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cnic">CNIC <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="cnic" class="form-control col-md-7 col-xs-12"   name="cnic" data-validate-length-range="13" data-validate-length-range-max="13" placeholder="3740512345678" required="required" type="number">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          Male: <input  type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> Female  :
                          <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Martial Status:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Married</option>
                            <option>Single</option>
                            <option>Divorced</option>
                          </select>
                        </div>
                      </div>
                      

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="city" class="form-control col-md-7 col-xs-12"   name="city"  placeholder="e.g Rawalpindi" required="required" type="text">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Region</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="country">Country <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="country" class="form-control col-md-7 col-xs-12"   name="country"  value="Pakistan" disabled="disabled" type="text">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Employee Status</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Active</option>
                            <option>Retired</option>
                            <option>Deceased</option>
                            <option>On Leave</option>
                            <option>Suspend</option>
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="e-desg">Employee Designation <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="e-desg" class="form-control col-md-7 col-xs-12"   name="e-desg"  placeholder="e.g Senotypist" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tel-no">Telephone Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tel-no" class="form-control col-md-7 col-xs-12"   name="tel-no"  placeholder="e.g 03111234567" required="required" type="number">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Department</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Admin</option>
                            <option>Accounts</option>
                            <option>Security</option>
                            <option>Acadamics</option>
                            <option>Education</option>
                            <option>Transport</option>
                            <option>Exams</option>
                            <option>Scholarships</option>
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pay-scale">Pay Scale/Grade <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="pay-scale" class="form-control col-md-7 col-xs-12"  name="pay-scale" data-validate-length-range="20"  placeholder="e.g 17" required="required" type="number">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Service Type</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Permanent</option>
                            <option>Probation</option>
                            <option>Temporary</option>
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rec-office">Recording Office <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="rec-office" class="form-control col-md-7 col-xs-12"   name="rec-office"  placeholder="Recording Office" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="l_drawn-salary">Last Drawn Salary <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="l_drawn-salary" class="form-control col-md-7 col-xs-12"   name="l_drawn-salary"  placeholder="50000" required="required" type="number">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Payment Mode</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Bank Transfer</option>
                            <option>Cash Payment</option>
                            <option>Cheque Payment</option>
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="per-addr">Permanant Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" required="required" name="per-addr" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="temp-addr">Temporary Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" required="required" name="temp-addr" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection