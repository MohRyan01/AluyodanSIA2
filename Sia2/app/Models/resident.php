<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;


    protected $table = 'residents';


    protected $primaryKey = 'id';


    protected $fillable = [
        'user_id',
        'profile',
        'name',
        'lastname',
        'middlename',
        'alias',
        'birthday',
        'age',
        'placeofbirth',
        'email',
        'mother',
        'father',
        'height',
        'weight',
        'Gender',
        'VoterStatus',
        'CivilStatus',
        'Citizenship',
        'Telephone',
        'Mobile',
        'status',
        'purok',
        'familyRoles',
        'physical_disability',
        'visual_impairment',
        'hearing_impairment',
        'cognitive_disability',
        'mental_health_condition',
        'neurological_condition',
        'speech_impairment',
        'chronic_illness',
        'autism_spectrum',
        'other_checkbox',
        'other_condition',
        'desability'
    ];

    public function user()
    {

        return $this->belongsTo(User::class, 'user_id');
    }


}
