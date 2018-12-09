<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $DepartmentID
 * @property string $DepartmentAbbreviation
 * @property string $DepartmentName
 * @property string $DepartmentCode
 * @property int $EstablishmentYear
 * @property string $FaxNo
 * @property string $PhoneNo
 * @property string $Email
 * @property Faculty[] $faculties
 * @property Program[] $programs
 */
class Department extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Department';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'DepartmentID';

    /**
     * @var array
     */
    protected $fillable = ['DepartmentAbbreviation', 'DepartmentName', 'DepartmentCode', 'EstablishmentYear', 'FaxNo', 'PhoneNo', 'Email'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function faculties()
    {
        return $this->hasMany('App\Faculty', 'DepartmentID', 'DepartmentID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programs()
    {
        return $this->hasMany('App\Program', 'DepartmentID', 'DepartmentID');
    }
}
