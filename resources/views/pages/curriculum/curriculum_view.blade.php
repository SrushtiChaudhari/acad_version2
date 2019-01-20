@extends('layout.mainlayout')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Curriculum</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Curriculum Listing
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-hover">
              <thead>
                <th>Curriclum ID</th>
                <th>Curriculum Code</th>
                <th>Total Credits</th>
              </thead>
              <tbody>
                @foreach ($curriculums as $curriculum)
                <tr>
                  <td>{{ $curriculum->CurriculumID }}</td>
                  <td>{{ $curriculum->CurriculumCode }}</td>
                  <td>{{ $curriculum->TotalCredits }}</td>
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
