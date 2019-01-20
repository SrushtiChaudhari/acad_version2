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
        Course Listing
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-hover">
              <thead>
                <th>Course ID</th>
                <th>Department ID</th>
                <th>Department Name</th>
                <th>Course Name</th>
                <th>Course Abbreviation</th>
                <th>Course Code</th>
                <th>Syllabus Code</th>
                <th>Theory</th>
                <th>Course Credits</th>
                <th>Total Teaching Hours</th>
              </thead>
              <tbody>
                @foreach ($courses as $course)
                  <tr>
                    <td>{{ $course->CourseID }}</td>
                    <td>{{ $course->DepartmentID }}</td>
                    <td>{{ $course->DepartmentName }}</td>
                    <td>{{ $course->CourseName }}</td>
                    <td>{{ $course->CourseAbbreviation }}</td>
                    <td>{{ $course->CourseCode }}</td>
                    <td>{{ $course->SyllabusCode }}</td>
                    @if($course->IsTheory == 1)
                      <td>Yes</td>
                    @else
                      <td>No</td>
                    @endif
                    <td>{{ $course->CourseCredits }}</td>
                    <td>{{ $course->TotalTeachingHours }}</td>
                    <td>
                      <form action="/Course/{{ $course->CourseID }}" method="post">
                        @method('DELETE')
                        <input type="hidden" name="_token" value={{csrf_token()}}>
                        <input type="submit" class="btn btn-default" name="delete" value="Delete">
                      </form>
                    </td>
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
