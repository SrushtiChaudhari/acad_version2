<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $FacultyRequestTypeID
 * @property string $FacultyRequestTypeName
 * @property FacutyRequest[] $facutyRequests
 */
class FacultyRequestTypes extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'FacultyRequestTypes';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'FacultyRequestTypeID';

    /**
     * @var array
     */
    protected $fillable = ['FacultyRequestTypeName'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facutyRequests()
    {
        return $this->hasMany('App\FacutyRequest', 'FacultyRequestTypeID', 'FacultyRequestTypeID');
    }
}
