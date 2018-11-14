<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $FacultyRequestID
 * @property int $FacultyID
 * @property string $FacultyRequestSubject
 * @property string $FacultyRequestDetails
 * @property int $FacultyRequestTypeID
 * @property string $FacultyRequestStatus
 * @property Faculty $faculty
 * @property FacultyRequestType $facultyRequestType
 * @property FacutyResponse[] $facutyResponses
 */
class FacutyRequests extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'FacutyRequests';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'FacultyRequestID';

    /**
     * @var array
     */
    protected $fillable = ['FacultyID', 'FacultyRequestSubject', 'FacultyRequestDetails', 'FacultyRequestTypeID', 'FacultyRequestStatus'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
        return $this->belongsTo('App\Faculty', 'FacultyID', 'FacultyID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facultyRequestType()
    {
        return $this->belongsTo('App\FacultyRequestType', 'FacultyRequestTypeID', 'FacultyRequestTypeID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facutyResponses()
    {
        return $this->hasMany('App\FacutyResponse', 'FacultyRequestID', 'FacultyRequestID');
    }
}
