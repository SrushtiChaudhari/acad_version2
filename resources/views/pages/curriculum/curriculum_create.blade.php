<!--- This is a page for creating a new course. -->

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
        New Curriculum Creation
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6">
          <form action="/Curriculum" method="post">
              <table border="0">
                <tr>
		                <td><label for="CurriculumCode:">Curriculum Code:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="CurriculumCode" required></div></td>
                </tr>
                <tr>
		                <td><label for="TotalCredits">Total Credits:</label></td>
                    <td><div class="form-group"><input type="number" class="form-control" name="TotalCredits" required></div></td>
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
