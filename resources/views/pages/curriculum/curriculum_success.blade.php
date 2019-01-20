<!--- This is a page for creating a new course. -->

@extends('layout.mainlayout')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Curriclum</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        New Curriculum Creation
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6">
              <table border="0">
                <tr>
		                <td><div class="form-group"><label for="CurriculumCode:">Curriculum Code : </label></div></td>
                    <td><div class="form-group"> {{ $curriculum->CurriculumCode }}</div></td>
                </tr>
                <tr>
		                <td><div class="form-group"><label for="TotalCredits">Total Credits:</label></div></td>
                    <td><div class="form-group">{{ $curriculum->TotalCredits }}</div></td>
                </tr>
                <tr>
                  <td><a href="{{ URL::to('Curriculum/' . $curriculum->CurriculumID . '/edit')}}" class="btn btn-default">Edit</td>
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
