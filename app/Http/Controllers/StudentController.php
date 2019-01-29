<?php

namespace App\Http\Controllers;

use App\Student;
use App\Program;


use Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $students = Student::all();
      foreach ($students as $student) {
        $program = Program::find($student->ProgramID);
        $student->ProgramAbbreviation = $program->ProgramAbbreviation;
      }
      return view('pages.student.student_view', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $programIDs = Program::all();
      return view('pages.student.student_create')->with('programIDs', $programIDs);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Student::create(Request::all());
      return redirect()->action('StudentController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $student = Student::find($id);
      /*
      Send a list of all the available departments in order to be able to edit the Department of an existing Course
      */
      $programs = Program::all();
      if(empty($student)) {
        return redirect()->action('StudentController@index');
      }
      else {
        return view('pages.student.student_edit', compact('student','programs'));
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $student = Student::find($id);
      if(!empty($student)) {
          $student->ProgramID = Request::get('ProgramID');
          $student->FirstName = Request::get('FirstName');
          $student->MiddleName = Request::get('MiddleName');
          $student->LastName = Request::get('LastName');
          $student->MotherName = Request::get('MotherName');
          $student->Gender = Request::get('Gender');
          $student->DOB = Request::get('DOB');
          $student->BloodGroup = Request::get('BloodGroup');
          $student->TempAddrLine1 = Request::get('TempAddrLine1');
          $student->TempAddrTaluka = Request::get('TempAddrTaluka');
          $student->TempAddrDistrict = Request::get('TempAddrDistrict');
          $student->TempAddrCountry = Request::get('TempAddrCountry');
          $student->TempAddrState = Request::get('TempAddrState');
          $student->TempAddrPostalCode = Request::get('TempAddrPostalCode');
          $student->PermAddrLine1 = Request::get('PermAddrLine1');
          $student->PermAddrTaluka = Request::get('PermAddrTaluka');
          $student->PermAddrDistrict = Request::get('PermAddrDistrict');
          $student->PermAddrCountry = Request::get('PermAddrCountry');
          $student->PermAddrState = Request::get('PermAddrState');
          $student->PermAddrPincode = Request::get('PermAddrPincode');
          $student->PermAddrContactNo = Request::get('PermAddrContactNo');
          $student->PersonalContactNo = Request::get('PersonalContactNo');
          $student->EmergencyContactNo = Request::get('EmergencyContactNo');
          $student->CollegeEmail = Request::get('CollegeEmail');
          $student->PersonalEmail = Request::get('PersonalEmail');
          $student->Caste = Request::get('Caste');
          $student->Religion = Request::get('Religion');
          $student->CasteCategory = Request::get('CasteCategory');
          $student->IsHandicapped = Request::get('IsHandicapped');
          $student->IsCurrent = Request::get('IsCurrent');
          $student->AadharID = Request::get('AadharID');
          $student->Photo = Request::get('Photo');
          $student->BankAccountNumber = Request::get('BankAccountNumber');
          $student->BankName = Request::get('BankName');
          $student->BankBranchName = Request::get('BankBranchName');
          $student->BankBranchCode = Request::get('BankBranchCode');
          $student->save();
        }
            return redirect()->action('StudentController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
