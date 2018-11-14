@extends('layout.mainlayout')

@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Student Registration Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill in the details.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">

  <TABLE BORDER="0">
  <TR>
    <TD>First name</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="name" SIZE="25">
    </TD>
  </TR>
  <TR>
    <TD>Middle name</TD>
    <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>

  </TR>
  <TD>Last name</TD>
  <TD>
    <INPUT TYPE="TEXT" NAME="name" SIZE="25">
  </TD>
</TR>
<TR>
  <TD>Mother's name</TD>
  <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>
  <TD>
    <TR>
  <TD>Gender
    <div class="radio">
        <TD><label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Male
        </label>
    </div>
    <div class="radio">
      <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Female</b>
        </label></TD>
      </TD>
      </TR>
      <TR> <TD>  <div>
            <b>DOB</b>:
            <TD><input type="date" name="bday"></br>
        </div></TD>
      </TR>
      <TR>
        <TD>Temporary address Line 1</TD>
        <TD>
          <INPUT TYPE="TEXT" NAME="name" SIZE="25">
        </TD>
      </TR>
      <TR>
        <TD>Country</TD>
        <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>

      </TR>
      <TD>State</TD>
      <TD>
        <INPUT TYPE="TEXT" NAME="name" SIZE="25">
      </TD>
    </TR>
    <TR>
      <TD>Taluka</TD>
      <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>
      <TD>
        <TR>
          <TR>
            <TD>Temporary address postal code</TD>
            <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>
            <TD>
              <TR>

          <TR>
            <TD>Permanent address Line 1</TD>
            <TD>
              <INPUT TYPE="TEXT" NAME="name" SIZE="25">
            </TD>
          </TR>
          <TR>
            <TD>Country</TD>
            <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>

          </TR>
          <TD>State</TD>
          <TD>
            <INPUT TYPE="TEXT" NAME="name" SIZE="25">
          </TD>
        </TR>
        <TR>
          <TD>Taluka</TD>
          <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>
          <TD>
            <TR>
              <TR>
                <TD>Permanent address postal code</TD>
                <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>
                <TD>
                  <TR>
</TABLE>


                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">

                                  <TABLE BORDER="0">
                                  <TR>
                                    <TD>Contact number</TD>
                                    <TD>
                                      <INPUT TYPE="TEXT" NAME="name" SIZE="25">
                                    </TD>
                                  </TR>
                                  <TR>
                                    <TD>Emerbgency contact</TD>
                                    <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>

                                  </TR>
                                  <TD>College email</TD>
                                  <TD>
                                    <INPUT TYPE="TEXT" NAME="name" SIZE="25">
                                  </TD>
                                </TR>
                                <TR>
                                  <TD>Personal email</TD>
                                  <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>
                                  <TD>
                                    <TR>
                                      <TR>
                                        <TD>Caste</TD>
                                        <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>
                                        <TD>
                                          <TR>
                                  <TD>Is Handicapped
                                    <div class="radio">
                                        <TD><label>
                                          <label class="radio-inline">
                                              <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>YES
                                          </label>
                                          <label class="radio-inline">
                                              <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">NO
                                          </label></TD>
                                      </TD>
                                      </TR>
                                      <TR>
                              <TD>Is Current
                                <div class="radio">
                                    <TD><label>
                                      <label class="radio-inline">
                                          <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>YES
                                      </label>
                                      <label class="radio-inline">
                                          <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">NO
                                      </label></TD>
                                  </TD>
                                  </TR>
                                  <TR>
                                                                            <TD>  <div class="form-group">
                                                                                  <label>Choose a photo</label>
                                                                                <TD>  <input type="file"> </TD>
                                                                              </div></TD>

                                      </TR>
                                      <TR>
                                        <TD>Bank account number</TD>
                                        <TD>
                                          <INPUT TYPE="TEXT" NAME="name" SIZE="25">
                                        </TD>
                                      </TR>
                                      <TR>
                                        <TD>Bank name </TD>
                                        <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>

                                      </TR>
                                      <TD>Bank Branch</TD>
                                      <TD>
                                        <INPUT TYPE="TEXT" NAME="name" SIZE="25">
                                      </TD>
                                    </TR>
                                    <TR>
                                      <TD>Bank branch code</TD>
                                      <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"></TD>
                                      <TD>
                                        <TR>

                                </TABLE>

                                <p align="center">
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                              </p>


                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@endsection
