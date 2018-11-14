<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $FacultyAttendanceID
 * @property int $FacultyID
 * @property string $Date
 * @property boolean $IsPresent
 * @property Faculty $faculty
 */
class FacultyAttendance extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'FacultyAttendance';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'FacultyAttendanceID';

    /**
     * @var array
     */
    protected $fillable = ['FacultyID', 'Date', 'IsPresent'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
        return $this->belongsTo('App\Faculty', 'FacultyID', 'FacultyID');
    }
}
