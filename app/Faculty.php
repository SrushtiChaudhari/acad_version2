<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $FacultyID
 * @property int $DepartmentID
 * @property string $FacultyName
 * @property int $YearOfJoining
 * @property string $DateOfBirth
 * @property string $PermanentAddressLine1
 * @property string $PermanentAddressVillage
 * @property string $PermanentAddressTaluka
 * @property string $PermanentAddressDistrict
 * @property string $PermanentAddressCountry
 * @property string $PermanentAddressState
 * @property string $PermanentAddressPincode
 * @property string $TemporaryAddressLine1
 * @property string $TemporaryAddressVillage
 * @property string $TemporaryAddressTaluka
 * @property string $TemporaryAddressDistrict
 * @property string $TemporaryAddressCountry
 * @property string $TemporaryAddressState
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
 * @property string $BankBranch
 * @property string $BankBranchCode
 * @property string $created_at
 * @property string $updated_at
 * @property Department $department
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
    protected $fillable = ['FacultyID','DepartmentID', 'FacultyName', 'YearOfJoining', 'DateOfBirth', 'PermanentAddressLine1', 'PermanentAddressVillage', 'PermanentAddressTaluka', 'PermanentAddressDistrict', 'PermanentAddressCountry', 'PermanentAddressState', 'PermanentAddressPincode', 'TemporaryAddressLine1', 'TemporaryAddressVillage', 'TemporaryAddressTaluka', 'TemporaryAddressDistrict', 'TemporaryAddressCountry', 'TemporaryAddressState', 'TemporaryAddressPincode', 'CollegeEmail', 'PersonalEmail', 'ContactNo', 'EmergencyContactNo', 'RelievingDate', 'UniqueNo', 'Gender', 'BloodGroup', 'Caste', 'Religion', 'CasteCategory', 'IsHandicap', 'BankAccountNo', 'AadhaarID', 'Photo', 'BankName', 'BankBranch', 'BankBranchCode', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department()
    {
        return $this->belongsTo('App\Department', 'DepartmentID', 'DepartmentID');
    }
}
