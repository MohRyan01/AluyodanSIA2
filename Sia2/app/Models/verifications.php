<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    use HasFactory;


    protected $table = 'verifications';


    protected $primaryKey = 'id';


    protected $fillable = [
        'Resident_id',
        'Status',
        'name',
        'ValidateType',
        'contact',
        'Birthday',
        'email',
        'id_pic',
        'id_pic2',
    ];


    public function resident()
    {

        return $this->belongsTo(Resident::class, 'Resident_id');
    }

    
}
