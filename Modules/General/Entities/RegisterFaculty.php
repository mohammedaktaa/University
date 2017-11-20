<?php

namespace Modules\General\Entities;

use Illuminate\Database\Eloquent\Model;

class RegisterFaculty extends Model
{
    protected $fillable = ['register_id','faculty_id'];

    public function faculty()
    {
        return self::belongsTo(FacultyUniversity::class);
    }

    public function register()
    {
        return self::belongsTo(Registration::class);
    }
}
