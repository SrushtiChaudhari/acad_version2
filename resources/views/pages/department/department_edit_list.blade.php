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
        Department Listing
      </div>
      <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <th>Department ID</th>
                <th>Department Abbreviation</th>
                <th>Department Name</th>
                <th>Department Code</th>
                <th>Establishment Year</th>
                <th>Fax No</th>
                <th>Phone No</th>
                <th>Email</th>
              </thead>
              <tbody>
                @foreach ($departments as $department)
                <tr>
                  <td>{{ $department->DepartmentID }}</td>
                  <td>{{ $department->DepartmentAbbreviation }}</td>
                  <td>{{ $department->DepartmentName }}</td>
                  <td>{{ $department->DepartmentCode }}</td>
                  <td>{{ $department->EstablishmentYear }}</td>
                  <td>{{ $department->FaxNo }}</td>
                  <td>{{ $department->PhoneNo }}</td>
                  <td>{{ $department->Email }}</td>
                  <td><a href="{{ URL::to('Department/' . $department->DepartmentID . '/edit')}}" class="btn btn-default">Edit</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        <!-- /.table-responsive -->
      </div>
    </div>
  </div>
</div>
@endsection
