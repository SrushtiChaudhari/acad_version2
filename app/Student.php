<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $StudentEnrollmentNumber
 * @property int $ProgramID
 * @property string $FirstName
 * @property string $MiddleName
 * @property string $LastName
 * @property string $MotherName
 * @property string $Gender
 * @property string $DOB
 * @property string $BloodGroup
 * @property string $TempAddrLine1
 * @property string $TempAddrTaluka
 * @property string $TempAddrDistrict
 * @property string $TempAddrState
 * @property string $TempAddrCountry
 * @property string $TempAddrPostalCode
 * @property string $PermAddrLine1
 * @property string $PermAddrTaluka
 * @property string $PermAddrDistrict
 * @property string $PermAddrState
 * @property string $PermAddrCountry
 * @property string $ContactNo
 * @property string $PermAddrPostalCode
 * @property string $PermAddrContact
 * @property string $EmergencyContactNo
 * @property string $CollegeEmail
 * @property string $PersonalEmail
 * @property string $Caste
 * @property string $Religion
 * @property string $CasteCategory
 * @property boolean $IsHandicapped
 * @property boolean $IsCurrent
 * @property string $AadharID
 * @property string $Photo
 * @property string $BannkAcNumber
 * @property string $BankName
 * @property string $BankBranchName
 * @property string $BankBranchCode
 * @property Program $program
 * @property Enrollment[] $enrollments
 * @property SemesterRegistration[] $semesterRegistrations
 * @property StudentAdmission[] $studentAdmissions
 * @property StudentRequest[] $studentRequests
 * @property StudentSemAcademicRecord[] $studentSemAcademicRecords
 */
class Student extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Student';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'StudentEnrollmentNumber';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['ProgramID', 'FirstName', 'MiddleName', 'LastName', 'MotherName', 'Gender', 'DOB', 'BloodGroup', 'TempAddrLine1', 'TempAddrTaluka', 'TempAddrDistrict', 'TempAddrState', 'TempAddrCountry', 'TempAddrPostalCode', 'PermAddrLine1', 'PermAddrTaluka', 'PermAddrDistrict', 'PermAddrState', 'PermAddrCountry', 'ContactNo', 'PermAddrPostalCode', 'PermAddrContact', 'EmergencyContactNo', 'CollegeEmail', 'PersonalEmail', 'Caste', 'Religion', 'CasteCategory', 'IsHandicapped', 'IsCurrent', 'AadharID', 'Photo', 'BannkAcNumber', 'BankName', 'BankBranchName', 'BankBranchCode'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function program()
    {
        return $this->belongsTo('App\Program', 'ProgramID', 'ProgramID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enrollments()
    {
        return $this->hasMany('App\Enrollment', 'StudentEnrollmentNumber', 'StudentEnrollmentNumber');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function semesterRegistrations()
    {
        return $this->hasMany('App\SemesterRegistration', 'StudentEnrollmentNumber', 'StudentEnrollmentNumber');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentAdmissions()
    {
        return $this->hasMany('App\StudentAdmission', 'StudentEnrollmentNumber', 'StudentEnrollmentNumber');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentRequests()
    {
        return $this->hasMany('App\StudentRequest', 'StudentEnrollmentNumber', 'StudentEnrollmentNumber');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentSemAcademicRecords()
    {
        return $this->hasMany('App\StudentSemAcademicRecord', 'StudentEnrollmentNumber', 'StudentEnrollmentNumber');
    }
}
