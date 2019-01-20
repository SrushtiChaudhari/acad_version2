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
                  <td><label for="CurriculumID">Curriculum:</label></td>
                  <td>
                    <div class="form-group">
                      <select class="form-control" name="CurriculumID" required>
                        @foreach ($curriculums as $curriculum):
                          <option value="{{ $curriculum->CurriculumID }}">{{ $curriculum->CurriculumCode }}</option>
                        @endforeach
                      </select>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><label for="CourseID">Course:</label></td>
                  <td>
                    <div class="form-group">
                      <select class="form-control" name="CourseID" required>
                        @foreach ($courses as $course):
                          <option value="{{ $course->CourseID }}">{{ $course->CourseName }}</option>
                        @endforeach
                      </select>
                    </div>
                  </td>
                </tr>
                <tr>
		              <td><label for="SemesterNumber">Semester Number:</label></td>
                  <td><div class="form-group"><input class="form-control" type="text" name="SemesterNumber" required></div></td>
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
