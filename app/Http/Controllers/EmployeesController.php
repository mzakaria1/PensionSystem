<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;
use App\Designation;
use App\Employee;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Finder\Iterator\DepthRangeFilterIterator;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // //
        $emp = Employee::all();

        return view('Employees.employee', ['emp' => $emp]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $design = Designation::all();
        $dept = Department::all();
        return view('Employees.create_employee', ['design' => $design, 'dept' => $dept]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $emp = new Employee();
        $emp->name = $request->name;
        // print_r($emp);
        $emp->gender = $request->gender;
        $emp->dob = $request->dob;
        $emp->tell_no = $request->tell_no;
        $emp->emp_status = $request->emp_status;
        $emp->emp_job = $request->emp_job;
        $emp->emp_type = $request->emp_type;
        $emp->email = $request->email;
        $emp->grade = $request->grade;
        $emp->martial_status = $request->martial_status;
        $emp->city = $request->city;
        $emp->address = $request->address;
        $emp->region = $request->region;
        $emp->domicile = $request->domicile;
        $emp->nationality = $request->nationality;
        $emp->religion = $request->religion;
        $emp->appoint_date = $request->appoint_date;
        $emp->retire_date = $request->retire_date;
        $emp->children = $request->children;
        $emp->dept_id = $request->dept_id;
        $emp->desig_id = $request->desig_id;
        $emp->cnic = $request->cnic;
        //print_r($emp);

        $emp->save();

        //$b = Employee::create($validatedData);
        return redirect()->route('employees.index')
            ->with('success', 'New Employee has been Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $emp)
    {
        //
        return $emp;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $design = Designation::all();
        $dept = Department::all();
        $emp = Employee::findOrFail($id);
        return view('Employees.edit_employee', compact('emp', 'design', 'dept'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }







    // This dispalys all the departments in the database in the table
    public function all_dept()
    {
        $dept = Department::all();
        return view('Employees.department', ['dept' => $dept]);
    }

    // This Opens a new deptartment form
    public function create_dept()
    {
        return view('Employees.create_department');
    }

    // This creates a new department and adds in Database
    public function store_dept(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);

        $dept = Department::create($validatedData);

        return redirect()->route('employees.all_departments')
            ->with('success', 'New Department has been Created Successfully');
    }




    // This dispalys all the Designation from the database in the table
    public function all_design()
    {
        $design = Designation::all();
        return view('Employees.designation', ['design' => $design]);
    }

    // This Opens deptartment form
    public function create_design()
    {
        return view('Employees.create_designation');
    }

    // This creates a new department in the database
    public function store_design(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);

        $design = Designation::create($validatedData);

        return redirect()->route('employees.designation')
            ->with('success', 'New Designation has been Created Successfully');
    }
}
