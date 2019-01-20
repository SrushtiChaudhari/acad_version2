<!--- This is a page for faculty-->
<!---Also , BOOL defined as input type "text" , if error do check  -->
@extends('layout.mainlayout')

@section('content')
<div class="row">
<div class="col-lg-12">
  <h1 class="page-header">Faculty Edit</h1>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      Faculty Creation
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-6">
          <form action="/Faculty/{{ $faculty->FacultyID }}" method="post">
            @method('PUT')
            <table border="0">

              <tr>
                <td><label for="DepartmentID">Department:</label></td>
                <td>
                  <div class="form-group">
                    <select class="form-control" name="DepartmentID" required>
                      @foreach ($departments as $department):
                        @if($department->DepartmentID == $faculty->DepartmentID)
                          <option value="{{ $department->DepartmentID }}" selected>{{ $department->DepartmentName }}</option>
                        @else
                          <option value="{{ $department->DepartmentID }}">{{ $department->DepartmentName }}</option>
                        @endif
                      @endforeach
                    </select>
                  </div>
              </tr>

                <tr>
                    <td><label for="FacultyName">Name of Faculty:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="FacultyName" value="{{ $faculty->FacultyName}}"></div></td>
                </tr>

                <tr>
                    <td><label for="YearOfJoining">Year Of Joining:</label> </td>
                    <td><div class="form-group"><input type="number" class="form-control" name="YearOfJoining" value="{{ $faculty->YearOfJoining}}"></div></td>
                </tr>

                <tr>
                    <td><label for="DateOfBirth">Date Of Birth:</label> </td>
                    <td><div class="form-group"><input type="date"  name="DateOfBirth" value="{{ $faculty->DateOfBirth }}"></div></td>
                </tr>

                <tr>
                    <td><label for="PermanentAddressLine1">Permanent Adress Line 1:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="PermanentAddressLine1" value="{{ $faculty->PermanentAddressLine1}}"></div></td>
                </tr>

                <tr>
                    <td><label for="PermanentAddressVillage">Permanent Adress Village 1:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="PermanentAddressVillage" value="{{ $faculty->PermanentAddressVillage}}"></div></td>
                </tr>

                <tr>
                    <td><label for="PermanentAddressTaluka">Permanent Adress Taluka:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="PermanentAddressTaluka" value = "{{ $faculty->PermanentAddressTaluka}}"></div></td>
                </tr>

                <tr>
                    <td><label for="PermanentAddressDistrict">Permanent Adress District:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="PermanentAddressDistrict" value = "{{ $faculty->PermanentAddressDistrict}}"></div></td>
                </tr>

                <tr>
                    <td><label for="PermanentAddressCountry">Permanent Adress Country:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="PermanentAddressCountry" value = "{{ $faculty->PermanentAddressCountry}}"></div></td>
                </tr>

                <tr>
                    <td><label for="PermanentAddressState">Permanent Adress State:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="PermanentAddressState" value = "{{ $faculty->PermanentAddressState}}"></div></td>
                </tr>

                <tr>
                    <td><label for="PermanentAddressPincode">Permanent Adress Pincode:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="PermanentAddressPincode" value = "{{ $faculty->PermanentAddressPincode}}"></div></td>
                </tr>

                <tr>
                    <td><label for="TemporaryAddressLine1">Temporary Adress Line1:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="TemporaryAddressLine1" value = "{{ $faculty->TemporaryAddressLine1}}"></div></td>
                </tr>

                <tr>
                    <td><label for="TemporaryAddressVillage">Temporary Adress Vilage:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="TemporaryAddressVillage" value = "{{ $faculty->TemporaryAddressVillage}}"></div></td>
                </tr>

                <tr>
                    <td><label for="TemporaryAddressTaluka">Temporary Adress Taluka:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="TemporaryAddressTaluka" value = "{{ $faculty->TemporaryAddressTaluka}}"></div></td>
                </tr>
                <tr>
                    <td><label for="TemporaryAddressDistrict">Temporary Adress District:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="TemporaryAddressDistrict" value = "{{ $faculty->TemporaryAddressDistrict}}"></div></td>
                </tr>

                <tr>
                    <td><label for="TemporaryAddressCountry">Temporary Adress Counyry:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="TemporaryAddressCountry" value = "{{ $faculty->TemporaryAddressCountry}}"></div></td>
                </tr>

                <tr>
                    <td><label for="TemporaryAddressState">Permanent Adress State:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="TemporaryAddressState" value = "{{ $faculty->TemporaryAddressState}}"></div></td>
                </tr>

                <tr>
                    <td><label for="TemporaryAddressPincode">Temporary Adress Pincode:</label> </td>
                    <td><div class="form-group"><input type="text" class="form-control" name="TemporaryAddressPincode" value = "{{ $faculty->TemporaryAddressPincode}}"></div></td>
                </tr>


                  </TABLE>

                </div class="col-lg-6">

                    <TABLE BORDER="0">
                      <!-- /.col-lg-6 (nested) -->

              <tr>
                  <td><label for="CollegeEmail">College Email:</label> </td>
                  <td><div class="form-group"><input type="email" class="form-control" name="CollegeEmail" value = "{{ $faculty->CollegeEmail}}"></div></td>
              </tr>

            <tr>
                  <td><label for="PersonalEmail">PersonalEmail:</label> </td>
                  <td><div class="form-group"><input type="email" class="form-control" name="PersonalEmail" value = "{{ $faculty->PersonalEmail}}"></div></td>
              </tr>

              <tr>
                  <td><label for="ContactNo">Contact Number:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="ContactNo" value = "{{ $faculty->ContactNo}}"></div></td>
              </tr>

              <tr>
                  <td><label for="EmergencyContactNo">Emergency Contact Number:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="EmergencyContactNo" value = "{{ $faculty->EmergencyContactNo}}"></div></td>
              </tr>

              <tr>
                  <td><label for="RelievingDate">Relieving Date:</label> </td>
                  <td><div class="form-group"><input type="date"  name="RelievingDate" value = "{{ $faculty->RelievingDate}}"></div></td>
              </tr>

              <tr>
                  <td><label for="UniqueNo">Unique Number:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="UniqueNo" value = "{{ $faculty->UniqueNo}}"></div></td>
              </tr>



              <td>
              </td>

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
                  <td><label for="BloodGroup">Blood Group:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="BloodGroup" value="{{ $faculty->BloodGroup}}"></div></td>
              </tr>

              <tr>
                  <td><label for="Caste">Caste:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="Caste"  value="{{ $faculty->Caste}}"></div></td>
              </tr>

              <tr>
                  <td><label for="Religion">Religion:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="Religion"  value="{{ $faculty->Religion}}"></div></td>
              </tr>

              <tr>
                  <td><label for="CasteCategory">Caste Category:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="CasteCategory"  value="{{ $faculty->CasteCategory}}"></div></td>
              </tr>

              <tr>
                <div class="form-group">
                  <td><label>Is Handicap?</label></td>
                    <td>
                      <input type="radio" name="IsHandicap" value="1" checked  required>
                      <label for="IsHandicap">Yes</label>
                    </td>
                    <td>
                      <input type="radio" name="IsHandicap" value="0">
                      <label for="IsHandicap">No</label>
                    </td>
                  </div>
              </tr>

              <tr>
                  <td><label for="BankAccountNo">BankAccount Number:</label> </td>
                  <td><div class="form-group"><input type="number" class="form-control" name="BankAccountNo"  value="{{ $faculty->BankAccountNo}}"></div></td>
              </tr>

              <tr>
                  <td><label for="AadhaarID">AdhaarID:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="AadhaarID"  value="{{ $faculty->AadhaarID}}"></div></td>
              </tr>

              <tr>
                <method = "post" enctype="multipart/form-data">
                  <td><label for="Photo"> Choose a Photo:</label> </td>
                  <td><div class="form-group"><input type="file" name="Photo"  value="{{ $faculty->Photo}}"></div></td>
              </tr>

              <tr>
                  <td><label for="BankName">Bank Name:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="BankName"  value="{{ $faculty->BankName}}"></div></td>
              </tr>

              <tr>
                  <td><label for="BankBranch">Bank Branch:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="BankBranch"  value="{{ $faculty->BankBranch}}"></div></td>
              </tr>

              <tr>
                  <td><label for="BankBranchCode">Bank Branch Code:</label> </td>
                  <td><div class="form-group"><input type="text" class="form-control" name="BankBranchCode"  value="{{ $faculty->BankBranchCode}}"></div></td>
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
