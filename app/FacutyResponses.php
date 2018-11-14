<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $FacultyResponseID
 * @property int $FacultyRequestID
 * @property int $FacultyID
 * @property string $FacultyResponse
 * @property boolean $IsApproved
 * @property Faculty $faculty
 * @property FacutyRequest $facutyRequest
 */
class FacutyResponses extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'FacutyResponses';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'FacultyResponseID';

    /**
     * @var array
     */
    protected $fillable = ['FacultyRequestID', 'FacultyID', 'FacultyResponse', 'IsApproved'];

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
    public function facutyRequest()
    {
        return $this->belongsTo('App\FacutyRequest', 'FacultyRequestID', 'FacultyRequestID');
    }
}
