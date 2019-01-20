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
        Semester Editing
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6">
          <form action="/Semester/{{ $semester->SemesterID }}" method="post">
            @method('PUT')
              <table border="0">
                <tr>
                  <td><label for="ProgramID">Program:</label></td>
                  <td>
                    <div class="form-group">
                      <select class="form-control" name="ProgramID" required>
                        @foreach ($programs as $program):
                          @if($semester->ProgramID == $program->ProgramID)
                            <option value="{{ $program->ProgramID }}" selected>{{ $program->ProgramAbbreviation }}</option>
                          @else
                            <option value="{{ $program->ProgramID }}">{{ $program->ProgramAbbreviation }}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                </tr>
                <tr>
		              <td><label for="MaxCredit">Max Credits:</label></td>
                  <td><div class="form-group"><input class="form-control" type="number" name="MaxCredit" value={{ $semester->MaxCredit }} required></div></td>
                </tr>
                <tr>
		              <td><label for="MinCredit">MinCredits:</label></td>
                  <td><div class="form-group"><input class="form-control" type="number" name="MinCredit" value={{ $semester->MinCredit }} required></div></td>
                </tr>
                <tr>
		              <td><label for="DurationInMonths">Duration(in months):</label></td>
                  <td><div class="form-group"><input class="form-control" type="number" name="DurationInMonths" value={{ $semester->DurationInMonths }} required></div></td>
                </tr>
                <tr>
		              <td><label for="SemesterType">Semester Type:</label></td>
                  <td><div class="form-group"><input class="form-control" type="text" name="SemesterType" value={{ $semester->SemesterType }} required></div></td>
                </tr>
                <tr>
                  <td><label for="SemesterNumber">Semester Number:</label></td>
                  <td><div class="form-group"><input class="form-control" type="number" name="SemesterNumber" value={{ $semester->SemesterNumber }} required></div></td>
                </tr>
                <tr>
                  <div class="form-group">
                    <td><label>Is Current?</label></td>
                    @if($semester->IsCurrent == 1)
                      <td>
                        <input type="radio" name="IsCurrent" value="1" checked required>
                        <label for="IsCurrent">Yes</label>
                      </td>
                      <td>
                        <input type="radio" name="IsCurrent" value="0">
                        <label for="IsCurrent">No</label>
                      </td>
                    @else
                      <td>
                        <input type="radio" name="IsCurrent" value="1" required>
                        <label for="IsCurrent">Yes</label>
                      </td>
                      <td>
                        <input type="radio" name="IsCurrent" value="0" checked>
                        <label for="IsCurrent">No</label>
                      </td>
                    @endif
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
