<!--- This is a page for creating a new course. -->

@extends('layout.mainlayout')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Department</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Department Creation
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6">
          <form action="/Department" method="post">
              <table border="0">
                <tr>
		                <td><label for="DepartmentAbbreviation">Department Abbreviation:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="DepartmentAbbreviation" required></div></td>
                </tr>
                <tr>
		                <td><label for="DepartmentName">Department Name:</label></td>
                    <td><div class="form-group"><input type="text" class="form-control" name="DepartmentName" required></div></td>
                </tr>
                <tr>
		                <td><label for="DepartmentCode">Department Code:</label></td>
                    <td><div class="form-group"><input type="text" class="form-control" name="DepartmentCode" required></div></td>
                </tr>
                <tr>
		                <td><label for="EstablishmentYear">Establishment Year:</label></td>
                    <td><div class="form-group"><input type="text" class="form-control" name="EstablishmentYear" required></div></td>
                </tr>
                <tr>
		                <td><label for="FaxNo">Fax No:</label></td>
                    <td><div class="form-group"><input type="text" class="form-control" name="FaxNo" required></div></td>
                </tr>
                <tr>
		                <td><label for="PhoneNo">Phone No:</label></td>
                    <td><div class="form-group"><input type="text" class="form-control" name="PhoneNo" required></div></td>
                </tr>
                <tr>
		                <td><label for="Email">Email Id:</label></td>
                    <td><div class="form-group"><input type="email" class="form-control" name="Email" required></div></td>
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
