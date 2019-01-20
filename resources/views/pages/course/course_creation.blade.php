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
          <form action="/Course" method="post">
              <table border="0">
                <tr>
                  <td><label for="DepartmentID">Department:</label></td>
                  <td>
                    <div class="form-group">
                      <select class="form-control" name="DepartmentID" required>
                        @foreach ($departmentIDs as $departmentID):
                          <option value="{{ $departmentID->DepartmentID }}">{{ $departmentID->DepartmentName }}</option>
                        @endforeach
                      </select>
                    </div>
                </tr>
                <tr>
		              <td><label for="CourseName">Course Name:</label></td>
                  <td><div class="form-group"><input class="form-control" type="text" name="CourseName" required></div></td>
                </tr>
                <tr>
		              <td><label for="CourseAbbreviation">Course Abbreviation:</label></td>
                  <td><div class="form-group"><input class="form-control" type="text" name="CourseAbbreviation"></div></td>
                </tr>
                <tr>
		              <td><label for="CourseCode">Course Code:</label></td>
                  <td><div class="form-group"><input class="form-control" type="text" name="CourseCode" required></div></td>
                </tr>
                <tr>
		              <td><label for="SyllabusCode">Syllabus Code:</label></td>
                  <td><div class="form-group"><input class="form-control" type="text" name="SyllabusCode"></div></td>
                </tr>
                <tr>
                  <div class="form-group">
                    <td><label>Theory</label></td>
                      <td>
                        <input type="radio" name="IsTheory" value="1" checked  required>
                        <label for="IsTheory">Yes</label>
                      </td>
                      <td>
                        <input type="radio" name="IsTheory" value="0">
                        <label for="IsTheory">No</label>
                      </td>
                    </div>
                </tr>
                <tr>
		              <td><label for="CourseCredits">Course Credits:</label></td>
                  <td><div class="form-group"><input class="form-control" type="number" name="CourseCredits"></div></td>
                </tr>
                <tr>
		              <td><label for="TotalTeachingHours">Total Teaching Hours:</label></td>
                  <td><div class="form-group"><input class="form-control" type="number" name="TotalTeachingHours" required></div></td>
                </tr>
<!--- This is a token for running the following page . -->
                 <input type="hidden" name="_token" value={{csrf_token()}}>
                 <tr>
                   <td><input type="submit" class="btn btn-default" name="submit" value="Submit"></td>
                   <td><input type="reset" class="btn btn-default" name="reset" value="Reset"></td>
                 </tr>
              </table>
            </form>
          </div>
        <div class="col-lg-6">

      </div>
                  <!-- /.col-lg-6 (nested) -->
    </div>
                <!-- /.row (nested) -->
  </div>
              <!-- /.panel-body -->
</div>
@endsection
