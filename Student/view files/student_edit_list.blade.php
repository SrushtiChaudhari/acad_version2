@extends('layout.mainlayout')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Student</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Student Listing
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-hover">
              <thead>
                <th>Student Enrollment Number</th>
                <th>Program ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>LastName</th>
                <th>MotherName</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>BloodGroup</th>
                <th>TempAddrLine1</th>
                <th>TempAddrTaluka</th>
                <th>TempAddrDistrict</th>
                <th>TempAddrCountry</th>
                <th>TempAddrState</th>
                <th>TempAddrPostalCode</th>
                <th>PermAddrLine1</th>
                <th>PermAddrTaluka</th>
                <th>PermAddrDistrict</th>
                <th>PermAddrCountry</th>
                <th>PermAddrState</th>
                <th>PermAddrPincode</th>
                <th>PermAddrContactNo</th>
                <th>PersonalContactNo</th>
                <th>EmergencyContactNo</th>
                <th>College Email</th>
                <th>Personal Email</th>
                <th>Caste</th>
                <th>Religion</th>
                <th>Caste CAtegory</th>
                <th>Is Handicapped</th>
                <th>Is Current</th>
                <th>Aadhar ID</th>
                <th>Photo</th>
                <th>Bank Account Number</th>
                <th>Bank Name</th>
                <th>Bank Branch Name </th>
                <th>Bank Branch Code</th>
          <!--      <th>Created At</th>
                <th>Update At</th>  -->


              </thead>
              <tbody>
                @foreach ($students as $student)
                  <tr>
                    <td>{{ $student->StudentEnrollmentNumber }}</td>
                    <td>{{ $student->ProgramID }}</td>
                    <td>{{ $student->FirstName }}</td>
                    <td>{{ $student->MiddleName }}</td>
                    <td>{{ $student->LastName }}</td>
                    <td>{{ $student->MotherName }}</td>
                    <td>{{ $student->Gender }}</td>
                    <td>{{ $student->DOB }}</td>
                    <td>{{ $student->BloodGroup }}</td>
                    <td>{{ $student->TempAddrLine1 }}</td>
                    <td>{{ $student->TempAddrTaluka }}</td>
                    <td>{{ $student->TempAddrDistrict }}</td>
                    <td>{{ $student->TempAddrCountry }}</td>
                    <td>{{ $student->TempAddrState }}</td>
                    <td>{{ $student->TempAddrPostalCode }}</td>
                    <td>{{ $student->PermAddrLine1 }}</td>
                    <td>{{ $student->PermAddrTaluka }}</td>
                    <td>{{ $student->PermAddrDistrict }}</td>
                    <td>{{ $student->PermAddrCountry }}</td>
                    <td>{{ $student->PermAddrState }}</td>
                    <td>{{ $student->PermAddrPincode }}</td>
                    <td>{{ $student->PermAddrContactNo }}</td>
                    <td>{{ $student->PersonalContactNo }}</td>
                    <td>{{ $student->EmergencyContactNo }}</td>
                    <td>{{ $student->CollegeEmail }}</td>
                    <td>{{ $student->PersonalEmail }}</td>
                    <td>{{ $student->Caste }}</td>
                    <td>{{ $student->Religion }}</td>
                    <td>{{ $student->CasteCategory }}</td>
                    <td>{{ $student->IsHandicapped }}</td>
                    <td>{{ $student->IsCurrent }}</td>
                    <td>{{ $student->AadharID }}</td>
                    <td>{{ $student->Photo }}</td>
                    <td>{{ $student->BankAccountNumber }}</td>
                    <td>{{ $student->BankName }}</td>
                    <td>{{ $student->BankBranchName }}</td>
                    <td>{{ $student->BankBranchCode }}</td>
              <!--      <td>{{ $student->created_at }}</td>
                    <td>{{ $student->updated_at }}</td>  -->
        <td><a href="{{ URL::to('Student/' . $student->StudentEnrollmentNumber . '/edit')}}" class="btn btn-default">Edit</td>
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
