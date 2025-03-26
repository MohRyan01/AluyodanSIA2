<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service__requests extends Model
{
    use HasFactory;

    protected $table = 'service__requests'; // ✅ Ensure correct table name
    protected $primaryKey = 'id';

    protected $fillable = [
        'Resident_id',
        'Status',
        'Request_date',
        'Verification_date',
    ];

    public function resident()
    {
        return $this->belongsTo(Resident::class, 'Resident_id'); // ✅ Ensure correct reference
    }
}
