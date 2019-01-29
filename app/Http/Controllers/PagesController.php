<?php

namespace App\Http\Controllers;

use Request;
use App\Department;
use App\Course;
use App\Curriculum;
use App\CourseCurriculumMapping;
use App\Program;
use App\Semester;
use App\Faculty;
use App\Student;

class PagesController extends Controller
{
    public function home() {
      return view('pages.home');
    }

    public function faculty_registration(){
      return view('pages.faculty_registration');
    }

    /*Functions for Department Model*/
    public function department_show_edit() {
      $departments = Department::all();
      return view('pages.department.department_edit_list', compact('departments'));
    }

    public function department_show_delete() {
      $departments = Department::all();
      return view('pages.department.department_delete_list', compact('departments'));
    }

    /*Functions for Course Model*/
    public function course_show_edit() {
      $courses = Course::all();
      foreach ($courses as $course) {
        $department = Department::find($course->DepartmentID);
        $course->DepartmentName = $department->DepartmentName;
      }
      return view('pages.course.course_edit_list', compact('courses'));
    }

    public function course_show_delete() {
      $courses = Course::all();
      foreach ($courses as $course) {
        $department = Department::find($course->DepartmentID);
        $course->DepartmentName = $department->DepartmentName;
      }
      return view('pages.course.course_delete_list', compact('courses'));
    }

    /*Functions for Curriculum Model*/
    public function curriculum_show_edit() {
      $curriculums = Curriculum::all();
      return view('pages.curriculum.curriculum_edit_list', compact('curriculums'));
    }

    public function curriculum_show_delete() {
      $curriculums = Curriculum::all();
      return view('pages.curriculum.curriculum_delete_list', compact('curriculums'));
    }

    /*Functions for CourseCurriculumMapping Model*/
    public function courseCurriculumMapping_show_edit() {
      $mappings = CourseCurriculumMapping::all();
      foreach ($mappings as $mapping) {
        $course = Course::find($mapping->CourseID);
        $curriculum = Curriculum::find($mapping->CurriculumID);
        $mapping->CourseName = $course->CourseName;
        $mapping->CurriculumCode = $curriculum->CurriculumCode;
      }
      $mappings = CourseCurriculumMapping::all();
      return view('pages.course_curriculum_mapping.course_curriculum_mapping_edit_list', compact('mappings'));
    }

    public function courseCurriculumMapping_show_delete() {
      foreach ($mappings as $mapping) {
        $course = Course::find($mapping->CourseID);
        $curriculum = Curriculum::find($mapping->CurriculumID);
        $mapping->CourseName = $course->CourseName;
        $mapping->CurriculumCode = $curriculum->CurriculumCode;
      }
      return view('pages.course_curriculum_mapping.course_curriculum_mapping_delete_list', compact('mappings'));
    }

    /*Functions for Program Model*/
    public function program_show_edit() {
      $programs = Program::all();
      foreach ($programs as $program) {
        $department = Department::find($program->DepartmentID);
        $curriculum = Curriculum::find($program->CurriculumID);
        $program->DepartmentName = $department->DepartmentName;
        $program->CurriculumCode = $curriculum->CurriculumCode;
      }
      return view('pages.program.program_edit_list', compact('programs'));
    }

    public function program_show_delete() {
      $programs = Program::all();
      foreach ($programs as $program) {
        $department = Department::find($program->DepartmentID);
        $curriculum = Curriculum::find($program->CurriculumID);
        $program->DepartmentName = $department->DepartmentName;
        $program->CurriculumCode = $curriculum->CurriculumCode;
      }
      return view('pages.program.program_delete_list', compact('programs'));
    }

    /*Functions for Semester Model*/
    public function semester_show_edit() {
      $semesters = Semester::all();
      foreach ($semesters as $semester) {
        $program = Program::find($semester->ProgramID);
        $semester->ProgramAbbreviation = $program->ProgramAbbreviation;
      }
      return view('pages.semester.semester_edit_list', compact('semesters'));
    }

    public function semester_show_delete() {
      $semesters = Semester::all();
      foreach ($semesters as $semester) {
        $program = Program::find($semester->ProgramID);
        $semester->ProgramAbbreviation = $program->ProgramAbbreviation;
      }
      return view('pages.semester.semester_delete_list', compact('semesters'));
    }


  /*Functions for Faculty Model*/
  public function faculty_show_edit() {
    $faculties = Faculty::all();
    foreach ($faculties as $faculty) {
      $department = Department::find($faculty->DepartmentID);
      $faculty->DepartmentName = $department->DepartmentName;
    }
    return view('pages.faculty.faculty_edit_list', compact('faculties'));
  }

  public function faculty_show_delete() {
    $faculties = Faculty::all();
    foreach ($faculties as $faculty) {
      $department = Department::find($faculty->DepartmentID);
      $faculty->DepartmentName = $department->DepartmentName;
    }
    return view('pages.faculty.faculty_delete_list', compact('faculties'));
  }


/*Functions for student Model*/
public function student_show_edit() {
  $students = Student::all();
  foreach ($students as $student) {
    $program = Program::find($student->ProgramID);
    $student->ProgramAbbreviation = $program->ProgramAbbreviation;
  }
  return view('pages.student.student_edit_list', compact('students'));
}

public function student_show_delete() {
  $students = Student::all();
  foreach ($students as $student) {
    $program = Program::find($student->ProgramID);
    $student->ProgramAbbreviation = $program->ProgramAbbreviation;
  }
  return view('pages.student.student_delete_list', compact('students'));
  }
}
