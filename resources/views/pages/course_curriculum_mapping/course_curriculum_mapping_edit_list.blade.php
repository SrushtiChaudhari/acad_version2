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
        Course to Curriculum Mapping Listing
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-hover">
              <thead>
                <th>Course Curriculum Mapping ID</th>
                <th>Curriculum ID</th>
                <th>Curriculum Code</th>
                <th>Course ID</th>
                <th>Course Name</th>
                <th>Semester Number</th>
              </thead>
              <tbody>
                @foreach ($mappings as $mapping)
                  <tr>
                    <td>{{ $mapping->CourseCurriculumMappingID }}</td>
                    <td>{{ $mapping->CurriculumID }}</td>
                    <td>{{ $mapping->CurriculumCode }}</td>
                    <td>{{ $mapping->CourseID }}</td>
                    <td>{{ $mapping->CourseName }}</td>
                    <td>{{ $mapping->SemesterNumber }}</td>
                    <td><a href="{{ URL::to('CourseCurriculumMapping/' . $mapping->CourseCurriculumMappingID . '/edit')}}" class="btn btn-default">Edit</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.table-responsive -->
      </div>
    </div>
  </div>
</div>
@endsection
