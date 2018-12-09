<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $StudentRequestID
 * @property int $StudentEnrollmentNumber
 * @property int $StudentRequestTypeID
 * @property string $StudentRequestSubject
 * @property string $StudentRequestDetails
 * @property string $StudentRequestStatus
 * @property Student $student
 * @property StudentRequestType $studentRequestType
 * @property StudentResponse[] $studentResponses
 */
class StudentRequests extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'StudentRequests';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'StudentRequestID';

    /**
     * @var array
     */
    protected $fillable = ['StudentEnrollmentNumber', 'StudentRequestTypeID', 'StudentRequestSubject', 'StudentRequestDetails', 'StudentRequestStatus'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo('App\Student', 'StudentEnrollmentNumber', 'StudentEnrollmentNumber');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function studentRequestType()
    {
        return $this->belongsTo('App\StudentRequestType', 'StudentRequestTypeID', 'StudentRequestTypeID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentResponses()
    {
        return $this->hasMany('App\StudentResponse', 'StudentRequestID', 'StudentRequestID');
    }
}
