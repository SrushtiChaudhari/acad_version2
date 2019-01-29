<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Department;

use Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::all();
        foreach ($faculties as $faculty) {
          $department = Department::find($faculty->DepartmentID);
          $faculty->DepartmentName = $department->DepartmentName;
        }
        return view('pages.faculty.faculty_view', compact('faculties'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $departmentIDs = Department::all();
      return view('pages.faculty.faculty_create')->with('departmentIDs', $departmentIDs);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Faculty::create(Request::all());
      return redirect()->action('FacultyController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show(Faculty $faculty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $faculty = Faculty::find($id);
      /*
      Send a list of all the available departments in order to be able to edit the Department of an existing Course
      */
      $departments = Department::all();
      if(empty($faculty)) {
        return redirect()->action('FacultyController@index');
      }
      else {
        return view('pages.faculty.faculty_edit', compact('faculty', 'departments'));
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $faculty = Faculty::find($id);
        if(!empty($faculty)) {

           $faculty->DepartmentID = Request::get('DepartmentID');
           $faculty->FacultyName = Request::get('FacultyName');
           $faculty->YearOfJoining = Request::get('YearOfJoining');
           $faculty->DateOfBirth = Request::get('DateOfBirth');
           $faculty->PermanentAddressLine1 = Request::get('PermanentAddressLine1');
           $faculty->PermanentAddressVillage = Request::get('PermanentAddressVillage');
           $faculty->PermanentAddressTaluka = Request::get('PermanentAddressTaluka');
           $faculty->PermanentAddressDistrict = Request::get('PermanentAddressDistrict');
           $faculty->PermanentAddressCountry = Request::get('PermanentAddressCountry');
           $faculty->PermanentAddressState = Request::get('PermanentAddressState');
           $faculty->PermanentAddressPincode = Request::get('PermanentAddressPincode');
           $faculty->TemporaryAddressLine1 = Request::get('TemporaryAddressLine1');
           $faculty->TemporaryAddressVillage = Request::get('TemporaryAddressVillage');
           $faculty->TemporaryAddressTaluka = Request::get('TemporaryAddressTaluka');
           $faculty->TemporaryAddressDistrict = Request::get('TemporaryAddressDistrict');
           $faculty->TemporaryAddressCountry  = Request::get('TemporaryAddressCountry');
           $faculty->TemporaryAddressState  = Request::get('TemporaryAddressState');
           $faculty->TemporaryAddressPincode  = Request::get('TemporaryAddressPincode');
           $faculty->CollegeEmail  = Request::get('CollegeEmail');
           $faculty->PersonalEmail = Request::get('PersonalEmail');
           $faculty->ContactNo  = Request::get('ContactNo');
           $faculty->EmergencyContactNo = Request::get('EmergencyContactNo');
           $faculty->RelievingDate = Request::get('RelievingDate');
           $faculty->UniqueNo = Request::get('UniqueNo');
           $faculty->Gender = Request::get('Gender');
           $faculty->BloodGroup = Request::get('BloodGroup');
           $faculty->Caste = Request::get('Caste');
           $faculty->Religion = Request::get('Religion');
           $faculty->CasteCategory = Request::get('CasteCategory');
           $faculty->IsHandicap = Request::get('IsHandicap');
           $faculty->BankAccountNo = Request::get('BankAccountNo');
           $faculty->AadhaarID = Request::get('AadhaarID');
           $faculty->Photo = Request::get('Photo');
           $faculty->BankName = Request::get('BankName');
           $faculty->BankBranch = Request::get('BankBranch');
           $faculty->BankBranchCode = Request::get('BankBranchCode');
           $faculty->save();
         }

               return redirect()->action('FacultyController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {
        //
    }
}
