<?php

namespace Modules\General\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Modules\General\Entities\StudyYear
 *
 * @property int $study_year_id
 * @property string|null $name_en
 * @property string|null $name_ar
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\StudyYear whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\StudyYear whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\StudyYear whereNameAr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\StudyYear whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\StudyYear whereStudyYearId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\General\Entities\StudyYear whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class StudyYear extends Model
{
    protected $fillable = ['name_en', 'name_ar'];
    protected $primaryKey = "study_year_id";

    public function user()
    {
        return self::hasMany(User::class, 'study_year_id', 'study_year_id');
    }
}
