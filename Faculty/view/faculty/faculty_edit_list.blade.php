@extends('layout.mainlayout')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Faculty</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Faculty Listing
      </div>
      <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <th>Faculty ID</th>
                <th>Department ID</th>
                <th>Faculty Name</th>
                <th>Year of Joining</th>
                <th>DAte Of Birth</th>
                <th>Permanent Address Line1</th>
                <th>Permanent Address Village</th>
                <th>Permanent Address District</th>
                <th>Permanent Address Taluka</th>
                <th>Permanent Address Country</th>
                <th>Permanent Address State</th>
                <th>Permanent Address Pincode</th>
                <th>Temporary Address Line1</th>
                <th>Temporary Address Village</th>
                <th>Temporary Address Taluka</th>
                <th>Temporary Address District</th>
                <th>Temporary Address Country</th>
                <th>Temporary Address State</th>
                <th>Temporary Address Pincode</th>
                <th>College Email</th>
                <th>Personal Email</th>
                <th>Contact Number</th>
                <th>Emergency Coontact Number</th>
                <th>RElieving Date</th>
                <th>Unique Number</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Caste</th>
                <th>Religion</th>
                <th>Caste CAtegory</th>
                <th>Is Handicap</th>
                <th>Bank Account Number</th>
                <th>Aadhaar ID</th>
                <th>Photo</th>
                <th>Bank Name</th>
                <th>Bank Branch</th>
                <th>Bank Branch Code</th>
              </thead>
              <tbody>
                @foreach ($faculties as $faculty)
                <tr>
                  <tr>
                    <td>{{ $faculty->FacultyID }}</td>
                    <td>{{ $faculty->DepartmentID }}</td>
                    <td>{{ $faculty->FacultyName }}</td>
                    <td>{{ $faculty->YearOfJoining }}</td>
                    <td>{{ $faculty->DateOfBirth }}</td>
                    <td>{{ $faculty->PermanentAddressLine1 }}</td>
                    <td>{{ $faculty->PermanentAddressVillage }}</td>
                    <td>{{ $faculty->PermanentAddressTaluka }}</td>
                    <td>{{ $faculty->PermanentAddressDistrict }}</td>
                    <td>{{ $faculty->PermanentAddressCountry }}</td>
                    <td>{{ $faculty->PermanentAddressState }}</td>
                    <td>{{ $faculty->PermanentAddressPincode }}</td>
                    <td>{{ $faculty->TemporaryAddressLine1 }}</td>
                    <td>{{ $faculty->TemporaryAddressVillage }}</td>
                    <td>{{ $faculty->TemporaryAddressTaluka }}</td>
                    <td>{{ $faculty->TemporaryAddressDistrict }}</td>
                    <td>{{ $faculty->TemporaryAddressCountry }}</td>
                    <td>{{ $faculty->TemporaryAddressState }}</td>
                    <td>{{ $faculty->TemporaryAddressPincode }}</td>
                    <td>{{ $faculty->CollegeEmail }}</td>
                    <td>{{ $faculty->PersonalEmail }}</td>
                    <td>{{ $faculty->ContactNo }}</td>
                    <td>{{ $faculty->EmergencyContactNo }}</td>
                    <td>{{ $faculty->RelievingDate }}</td>
                    <td>{{ $faculty->UniqueNo }}</td>
                    <td>{{ $faculty->Gender }}</td>
                    <td>{{ $faculty->BloodGroup }}</td>
                    <td>{{ $faculty->Caste }}</td>
                    <td>{{ $faculty->Religion }}</td>
                    <td>{{ $faculty->CasteCategory }}</td>
                    <td>{{ $faculty->IsHandicap }}</td>
                    <td>{{ $faculty->BankAccountNo }}</td>
                    <td>{{ $faculty->AadhaarID }}</td>
                    <td>{{ $faculty->Photo }}</td>
                    <td>{{ $faculty->BankName }}</td>
                    <td>{{ $faculty->BankBranch }}</td>
                    <td>{{ $faculty->BankBranchCode }}</td>
              <!--      <td>{{ $faculty->created_at }}</td>
                    <td>{{ $faculty->updated_at }}</td>  -->
                  <td><a href="{{ URL::to('Faculty/' . $faculty->FacultyID . '/edit')}}" class="btn btn-default">Edit</td>
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
