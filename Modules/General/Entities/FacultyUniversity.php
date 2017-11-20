<?php

namespace Modules\General\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\General\Entities\FacultyUniversity
 *
 * @property int $id
 * @property int $faculty_id
 * @property int $university_id
 * @property int $total_required
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\FacultyUniversity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\FacultyUniversity whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\FacultyUniversity whereFacultyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\FacultyUniversity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\FacultyUniversity whereTotalRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\FacultyUniversity whereUniversityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\FacultyUniversity whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FacultyUniversity extends Model
{
    protected $fillable=["faculty_id","university_id","total_required"];
    protected $primaryKey="id";
    public function faculty()
    {
        return self::belongsTo(Faculty::class,'faculty_id','faculty_id');
    }

    public function university()
    {
        return self::belongsTo(University::class,'university_id','university_id');
    }

    public function register()
    {
        return self::belongsToMany(Registration::class,'register_faculty','faculty_id','register_id');
    }

    public function registration()
    {
        return self::hasMany(Registration::class,'faculty_id','id');
    }
}
