<!--- This is a page for Student-->
<!---Also , BOOL defined as input type "text" , if error do check  -->
@extends('layout.mainlayout')

@section('content')
<div class="row">
<div class="col-lg-12">
  <h1 class="page-header">Student Creation</h1>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      Student Creation
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-6">
          <form action="/Student" method="post">

            <table border="0">


                <tr>
                    <td><label for="StudentEnrollmentNumber">Student Enrollment Number:</label> </td>
                    <td><div class="form-group"><input type="number" class="form-control" name="StudentEnrollmentNumber"></div></td>
                </tr>



              <tr>
                <td><label for="ProgramID">Program:</label></td>
                <td>
                  <div class="form-group">
                    <select class="form-control" name="ProgramID" required>
                      @foreach ($programIDs as $programID):
                        <option value="{{ $programID->ProgramID }}">{{ $programID->ProgramAbbreviation }}</option>
                      @endforeach
                    </select>
                  </div>
              </tr>

                <tr>
                    <td><label for="FirstName">First Name:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="FirstName"></div></td>
                </tr>

                <tr>
                    <td><label for="MiddleName">Middle Name:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="MiddleName"></div></td>
                </tr>

                <tr>
                    <td><label for="LastName">Last Name:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="LastName"></div></td>
                </tr>

                <tr>
                    <td><label for="MotherName">Mother Name:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="MotherName"></div></td>
                </tr>

                <tr>
                  <div class="form-group">
                    <td><label>Gender</label></td>
                      <td>
                        <input type="radio" name="Gender" value="1" checked  required>
                        <label for="Gender">Male</label>
                      </td>

                      <tr>
                        <div class="form-group">

                            <td>
                            </td>


                      <td>
                        <input type="radio" name="Gender" value="0">
                        <label for="Gender">Female</label>
                      </td>
                    </div>
                </tr>

                <tr>
                    <td><label for="DOB">Date Of Birth:</label> </td>
                    <td><div class="form-group"><input type="date"  name="DOB"></div></td>
                </tr>

                <tr>
                    <td><label for="BloodGroup">Blood Group:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="BloodGroup"></div></td>
                </tr>

                <tr>
                    <td><label for="TempAddrLine1">Temporary Adress Line 1:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="TempAddrLine1"></div></td>
                </tr>

                <tr>
                    <td><label for="TempAddrTaluka">TEmporary Address Taluka:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="TempAddrTaluka"></div></td>
                </tr>

                <tr>
                    <td><label for="TempAddrDistrict">Temporary Address District:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="TempAddrDistrict"></div></td>
                </tr>

                <tr>
                    <td><label for="TempAddrCountry">Temporary Address Country:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="TempAddrCountry"></div></td>
                </tr>

                <tr>
                    <td><label for="TempAddrState">Temporary Address State:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="TempAddrState"></div></td>
                </tr>

                <tr>
                    <td><label for="TempAddrPostalCode">Temporary Address PostalCode:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="TempAddrPostalCode"></div></td>
                </tr>

                <tr>
                    <td><label for="PermAddrLine1">Permanent Address Line1:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="PermAddrLine1"></div></td>
                </tr>

                <tr>
                    <td><label for="PermAddrTaluka">Permanent Address Taluka:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="PermAddrTaluka"></div></td>
                </tr>

                <tr>
                    <td><label for="PermAddrDistrict">Permanent Address District:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="PermAddrDistrict"></div></td>
                </tr>

                <tr>
                    <td><label for="PermAddrCountry">Permanent Address Country:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="PermAddrCountry"></div></td>
                </tr>




                  </TABLE>

                </div class="col-lg-6">

                    <TABLE BORDER="0">
                      <!-- /.col-lg-6 (nested) -->

                      <tr>
                          <td><label for="PermAddrState">Permanent Address State:</label> </td>
                          <td><div class="form-group"><input type="text" class="form-control" name="PermAddrState"></div></td>
                      </tr>

                      <tr>
                          <td><label for="PermAddrPincode">Permanent Address Pincode:</label> </td>
                          <td><div class="form-group"><input type="text" class="form-control" name="PermAddrPincode"></div></td>
                      </tr>

                      <tr>
                          <td><label for="PermAddrContactNo">Permanent Address ContactNo:</label> </td>
                          <td><div class="form-group"><input type="text" class="form-control" name="PermAddrContactNo"></div></td>
                      </tr>

                      <tr>
                          <td><label for="PersonalContactNo">Personal ContactNo:</label> </td>
                          <td><div class="form-group"><input type="text" class="form-control" name="PersonalContactNo"></div></td>
                      </tr>

              <tr>
                  <td><label for="EmergencyContactNo">Emergency ContactNo:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="EmergencyContactNo"></div></td>
              </tr>

              <tr>
                  <td><label for="CollegeEmail">College Email:</label> </td>
                  <td><div class="form-group"><input type="email" class="form-control" name="CollegeEmail"></div></td>
              </tr>


            <tr>
                  <td><label for="PersonalEmail">PersonalEmail:</label> </td>
                  <td><div class="form-group"><input type="email" class="form-control" name="PersonalEmail"></div></td>
              </tr>


              <tr>
                  <td><label for="Caste">Caste:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="Caste"></div></td>
              </tr>

              <tr>
                  <td><label for="Religion">Religion:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="Religion"></div></td>
              </tr>

              <tr>
                  <td><label for="CasteCategory">Caste Category:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="CasteCategory"></div></td>
              </tr>

              <td>
              </td>

              <tr>
                <div class="form-group">
                  <td><label>Is Handicap?</label></td>
                    <td>
                      <input type="radio" name="IsHandicapped" value="1" checked  required>
                      <label for="IsHandicapped">Yes</label>
                    </td>
                    <td>
                      <input type="radio" name="IsHandicapped" value="0">
                      <label for="IsHandicapped">No</label>
                    </td>
                  </div>
              </tr>

              <tr>
                <div class="form-group">
                  <td><label>Is Current?</label></td>
                    <td>
                      <input type="radio" name="IsCurrent" value="1" checked  required>
                      <label for="IsCurrent">Yes</label>
                    </td>
                    <td>
                      <input type="radio" name="IsCurrent" value="0">
                      <label for="IsCurrent">No</label>
                    </td>
                  </div>
              </tr>


              <tr>
                  <td><label for="AadharID">AdhaarID:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="AadharID"></div></td>
              </tr>

              <tr>
                <method = "post" enctype="multipart/form-data">
                  <td><label for="Photo"> Choose a Photo:</label> </td>
                  <td><div class="form-group"><input type="file" name="Photo"></div></td>
              </tr>

              <tr>
                  <td><label for="BankAccountNumber">Bank Account Number:</label> </td>
                  <td><div class="form-group"><input type="number" class="form-control" name="BankAccountNumber"></div></td>
              </tr>

              <tr>
                  <td><label for="BankName">Bank :</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="BankName"></div></td>
              </tr>

              <tr>
                  <td><label for="BankBranchName">Bank Branch Name:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="BankBranchName"></div></td>
              </tr>

              <tr>
                  <td><label for="BankBranchCode">BankBranch Code:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="BankBranchCode"></div></td>
              </tr>

          <!---    <tr>
                  <td><label for="created_at">Created At:</label> </td>
                  <td><div class="form-group"><input type="time" class="form-control" name="created_at"></div></td>
              </tr>

              <tr>
                  <td><label for="updated_at">Updated At:</label> </td>
                  <td><div class="form-group"><input type="time" class="form-control" name="updated_at"></div></td>
              </tr>  --->


<!--- This is a token for running the following page . -->
               <input type="hidden" name="_token" value={{csrf_token()}}>


                  <p align="center">

                                                          <!--<button TYPE ="reject" class="btn btn-default">Reject Button</button> -->
                                                        </p>
                                                        <tr>
                                                          <td><input type="submit" class="btn btn-default" name="submit" value="Submit"></td>
                                                          <td><input type="reset" class="btn btn-default" name="reset" value="Reset"></td>
                                                        </tr>
                                                     </TABLE>
                                                  </div>


                                          </form>
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

                  </body>

      </html>
      @endsection
