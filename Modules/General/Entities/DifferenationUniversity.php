<?php

namespace Modules\General\Entities;

use Illuminate\Database\Eloquent\Model;

class DifferenationUniversity extends Model
{
    protected $fillable = ['university_id', 'differentiation_id'];

    public function university()
    {
        return self::belongsTo(University::class,'university_id','university_id');
    }

    public function differenation()
    {
        return self::belongsTo(Differentiation::class,'differentiation_id','differentiation_id');
    }
}
