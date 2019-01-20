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
              <table border="0">
                <tr>
		                <td><div class="form-group"><label for="DepartmentAbbreviation">Department Abbreviation:</label></div></td>
                    <td><div class="form-group">{{ $department->DepartmentAbbreviation }}</div></td>
                </tr>
                <tr>
		                <td><div class="form-group"><label for="DepartmentName">Department Name:</label></div></td>
                    <td><div class="form-group">{{ $department->DepartmentName }}</div></td>
                </tr>
                <tr>
		                <td><div class="form-group"><label for="DepartmentCode">Department Code:</label></div></td>
                    <td><div class="form-group">{{ $department->DepartmentCode }}</div></td>
                </tr>
                <tr>
		                <td><div class="form-group"><label for="EstablishmentYear">Establishment Year:</label></div></td>
                    <td><div class="form-group">{{ $department->EstablishmentYear }}</div></td>
                </tr>
                <tr>
		                <td><div class="form-group"><label for="FaxNo">Fax No:</label></div></td>
                    <td><div class="form-group">{{ $department->FaxNo }}</div></td>
                </tr>
                <tr>
		                <td><div class="form-group"><label for="PhoneNo">Phone No:</label></div></td>
                    <td><div class="form-group">{{ $department->PhoneNo }}</div></td>
                </tr>
                <tr>
		                <td><div class="form-group"><label for="Email">Email Id:</label></div></td>
                    <td><div class="form-group">{{ $department->Email }}</div></td>
                </tr>
                <tr>
                  <td><a href="{{ URL::to('Department/' . $department->DepartmentID . '/edit')}}" class="btn btn-default">Edit</td>
                  <td><a href="{{ URL::to('/Department/create') }}" class="btn btn-default">Back</td>
                </tr>
              </form>
            </table>
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
