<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $FacultyID
 * @property int $DepartmentID
 * @property int $YearOfJoining
 * @property string $DateOfBirth
 * @property string $PermanentAddressLine1
 * @property string $PermanentAddressVillage
 * @property string $PermanentAddressTaluka
 * @property string $PermanentAddressDistrict
 * @property string $PermanentAddressState
 * @property string $PermanentAddressCountry
 * @property string $PermanentAddressPincode
 * @property string $TemporaryAddressLine1
 * @property string $TemporaryAddressVillage
 * @property string $TemporaryAddressTaluka
 * @property string $TemporaryAddressDistrict
 * @property string $TemporaryAddressState
 * @property string $TemporaryAddressCountry
 * @property string $TemporaryAddressPincode
 * @property string $CollegeEmail
 * @property string $PersonalEmail
 * @property string $ContactNo
 * @property string $EmergencyContactNo
 * @property string $RelievingDate
 * @property string $UniqueNo
 * @property string $Gender
 * @property string $BloodGroup
 * @property string $Caste
 * @property string $Religion
 * @property string $CasteCategory
 * @property boolean $IsHandicap
 * @property string $BankAccountNo
 * @property string $AadhaarID
 * @property string $Photo
 * @property string $BankName
 * @property string $BankBranchCode
 * @property string $BankBranch
 * @property string $FacultyName
 * @property Department $department
 * @property Exam[] $exams
 * @property FacultyAttendance[] $facultyAttendances
 * @property FacultyCourseMapping[] $facultyCourseMappings
 * @property FacultyExperience[] $facultyExperiences
 * @property FacultyQualification[] $facultyQualifications
 * @property FacutyRequest[] $facutyRequests
 * @property FacutyResponse[] $facutyResponses
 * @property SemesterRegistration[] $semesterRegistrations
 * @property StudentResponse[] $studentResponses
 */
class Faculty extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Faculty';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'FacultyID';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['DepartmentID', 'YearOfJoining', 'DateOfBirth', 'PermanentAddressLine1', 'PermanentAddressVillage', 'PermanentAddressTaluka', 'PermanentAddressDistrict', 'PermanentAddressState', 'PermanentAddressCountry', 'PermanentAddressPincode', 'TemporaryAddressLine1', 'TemporaryAddressVillage', 'TemporaryAddressTaluka', 'TemporaryAddressDistrict', 'TemporaryAddressState', 'TemporaryAddressCountry', 'TemporaryAddressPincode', 'CollegeEmail', 'PersonalEmail', 'ContactNo', 'EmergencyContactNo', 'RelievingDate', 'UniqueNo', 'Gender', 'BloodGroup', 'Caste', 'Religion', 'CasteCategory', 'IsHandicap', 'BankAccountNo', 'AadhaarID', 'Photo', 'BankName', 'BankBranchCode', 'BankBranch', 'FacultyName'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department()
    {
        return $this->belongsTo('App\Department', 'DepartmentID', 'DepartmentID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exams()
    {
        return $this->hasMany('App\Exam', 'FacultyID', 'FacultyID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facultyAttendances()
    {
        return $this->hasMany('App\FacultyAttendance', 'FacultyID', 'FacultyID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facultyCourseMappings()
    {
        return $this->hasMany('App\FacultyCourseMapping', 'FacultyID', 'FacultyID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facultyExperiences()
    {
        return $this->hasMany('App\FacultyExperience', 'FacultyID', 'FacultyID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facultyQualifications()
    {
        return $this->hasMany('App\FacultyQualification', 'FacultyID', 'FacultyID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facutyRequests()
    {
        return $this->hasMany('App\FacutyRequest', 'FacultyID', 'FacultyID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facutyResponses()
    {
        return $this->hasMany('App\FacutyResponse', 'FacultyID', 'FacultyID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function semesterRegistrations()
    {
        return $this->hasMany('App\SemesterRegistration', 'FacultyID', 'FacultyID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentResponses()
    {
        return $this->hasMany('App\StudentResponse', 'FacultyID', 'FacultyID');
    }
}
