<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSurveyOB extends Model
{
    // Table name (since it's not the default plural form)
    protected $table = 'user_surveyOB';

    // Primary key
    protected $primaryKey = 'surveyid';

    // No Laravel timestamps in your table (created_at, updated_at don’t exist)
    public $timestamps = false;

    // Mass assignable fields
    protected $fillable = [
        'Date',
        'Time',
        'hotspotname',
        'Rcrave',
        'Rwork',
        'Rmeet',
        'OBVisit',
        'Visit',
        'RECEIPTNO',
        'PROBLEMNAME',
        'PHONENUMBER',
        'PROBLEM',
        'STAFFID',
        'DOB',
        'PostalCode',
        'EmailAddress',
        'ML',
        'RU',
        'OftenOB',
        'OftenOBDesc',
        'PROBLEMCONTACT',
        'MacAddress',
        'Device',
        'DebugTXT'
    ];
}
