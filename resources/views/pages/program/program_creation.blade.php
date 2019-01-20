<!--- This is a page for creating a new course. -->

@extends('layout.mainlayout')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Program</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Program Creation
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6">
          <form action="/Program" method="post">
              <table border="0">
                <tr>
                  <td><label for="DepartmentID">Department:</label></td>
                  <td>
                    <div class="form-group">
                      <select class="form-control" name="DepartmentID" required>
                        @foreach ($departments as $department):
                          <option value="{{ $department->DepartmentID }}">{{ $department->DepartmentName }}</option>
                        @endforeach
                      </select>
                    </div>
                </tr>
                <tr>
                  <td><label for="CurriculumID">Curriculum:</label></td>
                  <td>
                    <div class="form-group">
                      <select class="form-control" name="CurriculumID" required>
                        @foreach ($curriculums as $curriculum):
                          <option value="{{ $curriculum->CurriculumID }}">{{ $curriculum->CurriculumCode }}</option>
                        @endforeach
                      </select>
                    </div>
                </tr>
                <tr>
		              <td><label for="BranchName">Branch Name:</label></td>
                  <td><div class="form-group"><input class="form-control" type="text" name="BranchName" required></div></td>
                </tr>
                <tr>
		              <td><label for="DegreeName">Degree Name:</label></td>
                  <td><div class="form-group"><input class="form-control" type="text" name="DegreeName" required></div></td>
                </tr>
                <tr>
		              <td><label for="ProgramAdmissionYear">Program Admission Year:</label></td>
                  <td><div class="form-group"><input class="form-control" type="number" name="ProgramAdmissionYear" required></div></td>
                </tr>
                <tr>
		              <td><label for="ProgramCode">Program Code:</label></td>
                  <td><div class="form-group"><input class="form-control" type="text" name="ProgramCode" required></div></td>
                </tr>
                <tr>
		              <td><label for="ProgramAbbreviation">Program Abbreviation:</label></td>
                  <td><div class="form-group"><input class="form-control" type="text" name="ProgramAbbreviation" required></div></td>
                </tr>
                <tr>
		              <td><label for="LaunchYear">Launch Year:</label></td>
                  <td><div class="form-group"><input class="form-control" type="number" name="LaunchYear" required></div></td>
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
