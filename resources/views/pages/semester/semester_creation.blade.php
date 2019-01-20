<!--- This is a page for creating a new semester. -->

@extends('layout.mainlayout')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Semester</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Semester Creation
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6">
          <form action="/Semester" method="post">
              <table border="0">
                <tr>
                  <td><label for="ProgramID">Program:</label></td>
                  <td>
                    <div class="form-group">
                      <select class="form-control" name="ProgramID" required>
                        @foreach ($programIDs as $programID):
                          <option value="{{ $programID->ProgramID }}">{{ $programID->ProgramAbbreviation }}</option>
                        @endforeach
                      </select>
                    </div>
                </tr>
                <tr>
		              <td><label for="MaxCredit">Max Credits:</label></td>
                  <td><div class="form-group"><input class="form-control" type="number" name="MaxCredit" required></div></td>
                </tr>
                <tr>
		              <td><label for="MinCredit">MinCredits:</label></td>
                  <td><div class="form-group"><input class="form-control" type="number" name="MinCredit" required></div></td>
                </tr>
                <tr>
		              <td><label for="DurationInMonths">Duration(in months):</label></td>
                  <td><div class="form-group"><input class="form-control" type="number" name="DurationInMonths" required></div></td>
                </tr>
                <tr>
		              <td><label for="SemesterType">Semester Type:</label></td>
                  <td><div class="form-group"><input class="form-control" type="text" name="SemesterType" required></div></td>
                </tr>
                <tr>
                  <td><label for="SemesterNumber">Semester Number:</label></td>
                  <td><div class="form-group"><input class="form-control" type="number" name="SemesterNumber" required></div></td>
                </tr>
                <tr>
                  <div class="form-group">
                    <td><label>Is Current?</label></td>
                      <td>
                        <input type="radio" name="IsCurrent" value="1" checked required>
                        <label for="IsCurrent">Yes</label>
                      </td>
                      <td>
                        <input type="radio" name="IsCurrent" value="0">
                        <label for="IsCurrent">No</label>
                      </td>
                    </div>
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
