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
        $validatedData = $request->validate([
            'name' => 'required',
            'cnic' => 'required',
            'gender' => 'nullable',
            'tell_no' => 'required',
            'desig_id' => 'required',
            'grade' => 'required',
            'dept_id' => 'required',
            'martial_status' => 'nullable',
            'emp_job' => 'required',
            'emp_type' => 'required',
            'city' => 'required',
            'religion' => 'nullable',
            'region' => 'nullable',
            'domicile' => 'nullable',
            'nationality' => 'required',
            'children' => 'required',
            'address' => 'required',
            'email' => 'required',
            'appoint_date' => 'required',
            'retire_date' => 'required'

        ]);

        print_r($validatedData);
        $b = Employee::create($validatedData);
        return redirect()->route('employees.index')
            ->with('success', 'New Employee has been Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $emp = Employee::findOrFail($id);
        return view('Employees.edit_employees', ['emp' => $emp]);
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


    // This dispalys all the departments in the database
    public function all_dept()
    {
        $dept = Department::all();
        return view('Employees.department', ['dept' => $dept]);
    }

    // This Opens a new deptartment
    public function create_dept()
    {
        return view('Employees.create_department');
    }

    // This creates a new department
    public function store_dept(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ]);

        $dept = Department::create($validatedData);

        return redirect()->route('employees.all_departments')
            ->with('success', 'New Department has been Created Successfully');
    }


    // This dispalys all the Designation in the database
    public function all_design()
    {
        $design = Designation::all();
        return view('Employees.designation', ['design' => $design]);
    }

    // This Opens a new deptartment
    public function create_design()
    {
        return view('Employees.create_designation');
    }

    // This creates a new department
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
