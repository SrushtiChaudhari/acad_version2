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
 * @property string $TempAddrCountry
 * @property string $TempAddrState
 * @property string $TempAddrPostalCode
 * @property string $PermAddrLine1
 * @property string $PermAddrTaluka
 * @property string $PermAddrDistrict
 * @property string $PermAddrCountry
 * @property string $PermAddrState
 * @property string $PermAddrPincode
 * @property string $PermAddrContactNo
 * @property string $PersonalContactNo
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
 * @property string $BankAccountNumber
 * @property string $BankName
 * @property string $BankBranchName
 * @property string $BankBranchCode
 * @property string $created_at
 * @property string $updated_at
 * @property Program $program
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
    protected $fillable = ['StudentEnrollmentNumber','ProgramID', 'FirstName', 'MiddleName', 'LastName', 'MotherName', 'Gender', 'DOB', 'BloodGroup', 'TempAddrLine1', 'TempAddrTaluka', 'TempAddrDistrict', 'TempAddrCountry', 'TempAddrState', 'TempAddrPostalCode', 'PermAddrLine1', 'PermAddrTaluka', 'PermAddrDistrict', 'PermAddrCountry', 'PermAddrState', 'PermAddrPincode', 'PermAddrContactNo', 'PersonalContactNo', 'EmergencyContactNo', 'CollegeEmail', 'PersonalEmail', 'Caste', 'Religion', 'CasteCategory', 'IsHandicapped', 'IsCurrent', 'AadharID', 'Photo', 'BankAccountNumber', 'BankName', 'BankBranchName', 'BankBranchCode', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function program()
    {
        return $this->belongsTo('App\Program', 'ProgramID', 'ProgramID');
    }
}
