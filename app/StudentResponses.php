<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $StudentResponseID
 * @property int $StudentRequestID
 * @property int $FacultyID
 * @property string $StudentResponse
 * @property boolean $IsApproved
 * @property Faculty $faculty
 * @property StudentRequest $studentRequest
 */
class StudentResponses extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'StudentResponses';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'StudentResponseID';

    /**
     * @var array
     */
    protected $fillable = ['StudentRequestID', 'FacultyID', 'StudentResponse', 'IsApproved'];

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
    public function studentRequest()
    {
        return $this->belongsTo('App\StudentRequest', 'StudentRequestID', 'StudentRequestID');
    }
}
