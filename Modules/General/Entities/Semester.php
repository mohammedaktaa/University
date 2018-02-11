<?php

namespace Modules\General\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Modules\General\Entities\Semester
 *
 * @property int $semester_id
 * @property string $name_en
 * @property string $name_ar
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Semester whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Semester whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Semester whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Semester whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Semester whereSemesterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\Semester whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Semester extends \Eloquent
{
    protected $fillable=['name_en','name_ar'];

    public function course()
    {
        return self::hasMany(Course::class,'semester_id','semester_id');
    }
}
