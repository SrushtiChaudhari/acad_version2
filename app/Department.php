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
 * @property string $created_at
 * @property string $updated_at
 * @property Course[] $courses
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
    protected $fillable = ['DepartmentAbbreviation', 'DepartmentName', 'DepartmentCode', 'EstablishmentYear', 'FaxNo', 'PhoneNo', 'Email', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses()
    {
        return $this->hasMany('App\Course', 'DepartmentID', 'DepartmentID');
    }

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
