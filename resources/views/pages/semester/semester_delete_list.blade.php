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
        Semester Listing
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-hover">
              <thead>
                <th>Semester ID</th>
                <th>Program ID</th>
                <th>Program Abbreviation</th>
                <th>Max Credits</th>
                <th>Min Credits</th>
                <th>Duration In Months</th>
                <th>Semester Type</th>
                <th>Semester Number</th>
                <th>Current</th>
              </thead>
              <tbody>
                @foreach ($semesters as $semester)
                  <tr>
                    <td>{{ $semester->SemesterID }}</td>
                    <td>{{ $semester->ProgramID }}</td>
                    <td>{{ $semester->ProgramAbbreviation }}</td>
                    <td>{{ $semester->MaxCredit }}</td>
                    <td>{{ $semester->MinCredit }}</td>
                    <td>{{ $semester->DurationInMonths }}</td>
                    <td>{{ $semester->SemesterType }}</td>
                    <td>{{ $semester->SemesterNumber }}</td>
                    @if($semester->IsCurrent == 1)
                      <td>Yes</td>
                    @else
                      <td>No</td>
                    @endif
                    <td>
                      <form action="/Semester/{{ $semester->SemesterID }}" method="post">
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
