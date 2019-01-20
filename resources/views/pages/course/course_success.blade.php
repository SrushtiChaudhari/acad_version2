<!--- This is a page for creating a new course. -->

@extends('layout.mainlayout')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Course</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Course Creation
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6">
            <table border="0">
              <tr>
                <td><label for="DepartmentID">Department ID :</label></td>
                <td><div class="form-group">{{ $course->DepartmentID }}</div></td>
              </tr>
              <tr>
                <td><label for="DepartmentName">Department Name :</label></td>
                <td><div class="form-group">{{ $course->DepartmentName }}</div></td>
              </tr>
              <tr>
		            <td><label for="CourseName">Course Name:</label></td>
                <td><div class="form-group">{{ $course->CourseName }}</div></td>
              </tr>
              <tr>
		            <td><label for="CourseAbbreviation">Course Abbreviation:</label></td>
                <td><div class="form-group">{{ $course->CourseAbbreviation }}</div></td>
              </tr>
              <tr>
		            <td><label for="CourseCode">Course Code:</label></td>
                <td><div class="form-group">{{ $course->CourseCode }}</div></td>
              </tr>
              <tr>
		            <td><label for="SyllabusCode">Syllabus Code:</label></td>
                <td><div class="form-group">{{ $course->SyllabusCode }}</div></td>
              </tr>
              <tr>
                <td><div class="form-group"><label>Theory</label></div></td>
                @if($course->IsTheory == 1)
                  <td><div class="form-group">Yes</div></td>
                @else
                  <td><div class="form-group">No</div></td>
                @endif
              </tr>
              <tr>
		            <td><label for="CourseCredits">Course Credits:</label></td>
                <td><div class="form-group">{{ $course->CourseCredits }}</div></td>
              </tr>
              <tr>
		            <td><label for="TotalTeachingHours">Total Teaching Hours:</label></td>
                <td><div class="form-group">{{ $course->TotalTeachingHours }}</div></td>
              </tr>
              <tr>
                <td><a href="{{ URL::to('Course/' . $course->CourseID . '/edit')}}" class="btn btn-default">Edit</td>
              </tr>
            </table>
          </div>
      </div>
                  <!-- /.col-lg-6 (nested) -->
    </div>
                <!-- /.row (nested) -->
  </div>
              <!-- /.panel-body -->
</div>
@endsection
