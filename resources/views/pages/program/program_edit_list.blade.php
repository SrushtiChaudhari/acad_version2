@extends('layout.mainlayout')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Program</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Program Listing
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-hover">
              <thead>
                <th>Program ID</th>
                <th>Department ID</th>
                <th>Department Name</th>
                <th>Curriculum ID</th>
                <th>Curriculum Code</th>
                <th>Branch Name</th>
                <th>Degree Name</th>
                <th>Program Admission Year</th>
                <th>Program Code</th>
                <th>Program Abbreviation</th>
                <th>Launch Year</th>
              </thead>
              <tbody>
                @foreach ($programs as $program)
                  <tr>
                    <td>{{ $program->ProgramID }}</td>
                    <td>{{ $program->DepartmentID }}</td>
                    <td>{{ $program->DepartmentName }}</td>
                    <td>{{ $program->CurriculumID }}</td>
                    <td>{{ $program->CurriculumCode }}</td>
                    <td>{{ $program->BranchName }}</td>
                    <td>{{ $program->DegreeName }}</td>
                    <td>{{ $program->ProgramAdmissionYear }}</td>
                    <td>{{ $program->ProgramCode }}</td>
                    <td>{{ $program->ProgramAbbreviation }}</td>
                    <td>{{ $program->LaunchYear }}</td>
                    <td><a href="{{ URL::to('Program/' . $program->ProgramID . '/edit')}}" class="btn btn-default">Edit</td>
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
