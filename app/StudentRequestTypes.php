<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $StudentRequestTypeID
 * @property string $StudentRequestTypeName
 * @property StudentRequest[] $studentRequests
 */
class StudentRequestTypes extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'StudentRequestTypes';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'StudentRequestTypeID';

    /**
     * @var array
     */
    protected $fillable = ['StudentRequestTypeName'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentRequests()
    {
        return $this->hasMany('App\StudentRequest', 'StudentRequestTypeID', 'StudentRequestTypeID');
    }
}
