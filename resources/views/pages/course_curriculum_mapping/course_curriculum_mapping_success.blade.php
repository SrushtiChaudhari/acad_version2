<!--- This is a page for creating a new course to curriculum mapping. -->

@extends('layout.mainlayout')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Courses and Curriculum</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Course to Curriculum Mapping Creation
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6">
          <form action="/CourseCurriculumMapping" method="post">
              <table border="0">
                <tr>
                  <td><div class="form-group"><label for="CurriculumCode">Curriculum Code :</label></div></td>
                  <td><div class="form-group">{{ $mapping->CurriculumCode }}</div></td>
                </tr>
                <tr>
                  <td><div class="form-group"><label for="CourseName">Course Name :</label></div></td>
                  <td><div class="form-group">{{ $mapping->CourseName }}</div></td>
                </tr>
                <tr>
		              <td><label for="SemesterNumber">Semester Number:</label></td>
                  <td><div class="form-group">{{ $mapping->SemesterNumber }}</div></td>
                </tr>
                <tr>
                  <td><a href="{{ URL::to('CourseCurriculumMapping/' . $mapping->CourseCurriculumMappingID . '/edit')}}" class="btn btn-default">Edit</td>
                </tr>
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
