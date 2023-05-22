<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LabAcceptance extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function AnalysisRequest() : HasOne
    {
        return $this->hasOne(AnalysisRequest::class,'id', 'lab_approval_id');
    }
}
